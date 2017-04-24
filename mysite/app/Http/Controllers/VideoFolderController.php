<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VideoFolder;

use DB;

class VideoFolderController extends Controller
{
    //
	public function index()
    {
        return redirect('/videofolders_1');		
    }

    public function show($page)
    {
		$videofolders = VideoFolder::all();
		
		// на 1 странице допустим 2 записи:
		$one_page = 2;		
		//тогда всего страниц:
		$num_pages = intval(count($videofolders)/$one_page+0.5);
		
		//постраничный вывод c записью в массив:		
		$offset = $one_page * ($page-1);
		
		$previous = $page-1;		
		$next = $page+1;
		
		$videofolders = DB::table('videofolders')->offset($offset)->limit($one_page)->get();

		return view ('videofolders', ['videofolders' => $videofolders, 'num_pages' => $num_pages, 'page' => $page, 'previous' => $previous, 'next' => $next]);

    }
	
	public function showAdmin()
	{
		$videofolders = VideoFolder::all();
		return view('admin.admin_videogallery', ['videofolders' => $videofolders]);
	}
		
	public function update(Request $request, $id)
	{			
		$folder = VideoFolder::find($id);		
		$folder->name = $request->name;
		$folder->description = $request->description;
		
		if (!empty($request->file))		
		{
			$uploaddir = 'images/videofolders/';
			$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);			
			$uploadname = time() . '.' . $extension;			
			$uploadfile = $uploaddir . $uploadname;
			if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
			{
				unlink('images/videofolders/'.$folder->image_path);
				$folder->image_path = $uploadname;
			}					
		}
		
		$folder->save();		
		return back();
		
	}
	
	public function store(Request $request)
	{
		$videofolder = new VideoFolder();		
		$videofolder->name = $request->name;
		$videofolder->description = $request->description;

		$imageName = time().'.'.$request->myfile->getClientOriginalExtension();
		$videofolder->image_path = $imageName;
		$request->myfile->move('images/videofolders/', $imageName);		
		$videofolder-> save();
		
		$new_id = $videofolder->id; //just received id for the new videofolder
		
		//директория создается в папке videos т.к. в папке videofolders содержатся иконки видеоальбомов
		mkdir('videos/'.$new_id);
		
		return redirect('/admin_videogallery');			
	}
	
	public function delete($id)
	{
		//удаление записей в БД
		$folder = VideoFolder::find($id);		
		$videos = $folder->videos;
		
		$dirr = 'videos/'.$folder->id;
		
		//удаление видео:
		foreach ($videos as $video)
		{
			$video->delete();
			unlink($dirr.'/'.$video->video_path);
		}
		rmdir($dirr);
		
		$folder -> delete();
		unlink('images/videofolders/'.$folder->image_path);
		
		return back();
	}

}
