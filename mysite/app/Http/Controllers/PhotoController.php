<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\PhotoFolder;
//use Input;
use Response;
use Storage;

class PhotoController extends Controller
{
    //

    public function show($folder_id)
    {
        $photos = Photo::where('folder_id', $folder_id)->get();

        $folder = PhotoFolder::find($folder_id);

		return view('photos', ['photos' => $photos, 'folder' => $folder]);
    	
    }
	
	public function add()
	{
		
		return view ('admin.admin_photos_add');
	}
	
	public function store(Request $request)
	{
	
		$filesnum = count($_FILES['file']['name']);
		
		for($i=0; $i<$filesnum; $i++)
		{
			$uploaddir =storage_path('app/myfiles/');
			$extension = pathinfo($_FILES['file']['name'][$i], PATHINFO_EXTENSION);
			$uploadfile = $uploaddir . $i . '.' . $extension;
			
			if (!move_uploaded_file($_FILES['file']['tmp_name'][$i], $uploadfile))
			{
				return Response::json('error', 400);
			}
			
		}
		
	}
	
	public function delete(Request $request)
	{
		
		// 1 - получить имя файла, 2 - unlink файл
		
		$file = storage_path('app/myfiles').'/test.png';
		
		unlink($file);
		
	}
	/*public function dropzoneRemove(Request $request)
	{
		if($request->ajax()) { 
			$photo = Photo::find($request->photoId); //Get image by id or desired parameters

			if(File::exists($destinationPath.$photo->file_name)) //Check if file exists
				File::delete($destinationPath.$photo->file_name) //Delete file from storage

			$photo->delete()   //Delete file record from DB

			return response('Photo deleted', 200); //return success
		}
	}*/

}
