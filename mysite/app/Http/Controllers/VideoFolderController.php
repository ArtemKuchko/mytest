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

	public function edit($id)
	{
		$folder = VideoFolder::where('id', $id)->get();
		return view('admin.admin_videofolder_edit', ['folder' => $folder[0]]);
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
		mkdir('images/videos/'.$new_id);
		
		return redirect('/admin_videogallery');			
	}

}
