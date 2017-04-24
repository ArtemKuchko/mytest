<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Video;
use App\VideoFolder;


class VideoController extends Controller
{
    //
	
	public function show($id)
    {
        $folder = VideoFolder::find($id);		
		//$videos = Video::where('folder_id', $id)->get();
		$videos = $folder->videos;
		
		return view('videos', ['videos' => $videos, 'folder' => $folder]);    	
    }
	
	public function add($id)
	{
		session_start();		
		$_SESSION['folder_id'] = $id;
		$folder = VideoFolder::find($id);				
		$videos = $folder->videos;
		return view ('admin.admin_videos_add', ['folder' => $folder, 'videos' => $videos]);
	}
	
	public function store(Request $request)
	{
		session_start();
		$folder_id = $_SESSION['folder_id'];
		
		//saving file or files:
		$filesnum = count($_FILES['file']['name']);
		
		for ($i=0; $i < $filesnum; $i++)
		{
			$uploaddir = 'videos/'.$folder_id.'/';
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
				$video = new Video();
				$video->folder_id = $folder_id;
				$video->name = null;
				$video->video_path = $uploadname;
				$video->save();
			}
		}
		
	}
	
	public function delete($id)
	{		
		// 1 - получить id файла, 2 - unlink файл, 3 - удалить из базы
		session_start();
		$folder_id = $_SESSION['folder_id'];
		
		$video = Video::find($id);		
		$file = 'videos/'.$folder_id .'/'. $video->video_path;
		
		if (file_exists($file))
		{
			unlink($file);
			$video ->delete();	
		}

		return back();
	}
	
	
	
}
