<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\PhotoFolder;
use DB;

class PhotoFolderController extends Controller
{
    //

    public function index()
    {
        return redirect('/photofolders_1');
		
    }

    public function show($page)
    {
		$photofolders = PhotoFolder::all();
		
		// на 1 странице допустим 2 записи:
		$one_page = 2;		
		//тогда всего страниц:
		$num_pages = intval(count($photofolders)/$one_page+0.5);
		
		//постраничный вывод c записью в массив:		
		$offset = $one_page * ($page-1);
		
		$previous = $page-1;		
		$next = $page+1;
		
		$photofolders = DB::table('photofolders')->offset($offset)->limit($one_page)->get();

		return view ('photofolders', ['photofolders' => $photofolders, 'num_pages' => $num_pages, 'page' => $page, 'previous' => $previous, 'next' => $next]);
    }

	public function store(Request $request)
	{	
		
		$photofolder = new PhotoFolder();
		$photofolder->name = $request->name;
		$photofolder->description = $request->description;

		$imageName = time().'.'.$request->myfile->getClientOriginalExtension();
		$photofolder->image_path = $imageName;
		$request->myfile->move('images/photofolders/', $imageName);
		
		$photofolder-> save();
		
		$new_id = $photofolder->id; //just received id for the new photofolder
		
		//директория создается в папке photos т.к. в папке photofolders содержатся иконки фотоальбомов
		mkdir('images/photos/'.$new_id);
		
		return redirect('/admin_photogallery');
	}

	public function showAdmin()
	{
		$photofolders = PhotoFolder::all();

		return view('admin.admin_photogallery', ['photofolders' => $photofolders]);
	}

	public function edit($id)
	{
		$folder = PhotoFolder::where('id', $id)->get();

		return view('admin.admin_photofolder_edit', ['folder' => $folder[0]]);
	}
	
	public function update(Request $request, $id)
	{			
		$folder = PhotoFolder::find($id);		
		$folder->name = $request->name;
		$folder->description = $request->description;
		
		if (!empty($request->file))		
		{
			$uploaddir = 'images/photofolders/';
			$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
			$uploadname = time() . '.' . $extension;			
			$uploadfile = $uploaddir . $uploadname;
			if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
			{
				unlink('images/photofolders/'.$folder->image_path);
				$folder->image_path = $uploadname;
			}					
		}
		
		$folder->save();		
		return back();
		
	}

}
