<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhotoFolder;
use App\Photo;
use Response;
use Illuminate\Support\Facades\Route;

class PhotoController extends Controller
{
	
    public function show($id)
    {
        $folder = PhotoFolder::find($id);
		$photos = $folder->photos;
		
		return view('photos', ['folder' => $folder, 'photos' => $photos]);    	
    }
	
	public function add($id)
	{		
		session_start();		
		$_SESSION['folder_id'] = $id;
		$folder = PhotoFolder::find($id);
		$photos = $folder->photos;
		
		return view ('admin.admin_photos_add', ['folder' => $folder, 'photos' => $photos]);
	}
	
	public function store(Request $request)
	{
		session_start();
		$folder_id = $_SESSION['folder_id'];
		
		//saving file or files:
		$filesnum = count($_FILES['file']['name']);
		
		for ($i=0; $i < $filesnum; $i++)
		{
			$uploaddir = 'images/photos/'.$folder_id.'/';
			$extension = pathinfo($_FILES['file']['name'][$i], PATHINFO_EXTENSION);			
			$uploadname = time(). $i . '.' . $extension;			
			$uploadfile = $uploaddir . $uploadname;
			
			if (!move_uploaded_file($_FILES['file']['tmp_name'][$i], $uploadfile))
			{
				return Response::json('error', 400);
			}
			else
			{
				//saving records in database for file/files:
				$photo = new Photo();
				$photo->folder_id = $folder_id;
				$photo->name = null;
				$photo->image_path = $uploadname;
				$photo->save();				
			}
		}
		
	}
	
	public function delete($id)
	{		
		// 1 - получить id файла, 2 - unlink файл, 3 - удалить из базы
		session_start();
		$folder_id = $_SESSION['folder_id'];
		
		$photo = Photo::find($id);		
		$file = 'images/photos/'.$folder_id .'/'. $photo->image_path;
		
		if (file_exists($file))
		{
			unlink($file);
			$photo ->delete();	
		}
			
		return back();
		
	}

}
