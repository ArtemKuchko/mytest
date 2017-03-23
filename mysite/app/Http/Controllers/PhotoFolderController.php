<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
		$photofolder->image_path = 'test.jpg';
		$photofolder-> save();
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

	public function test()
	{
		error_reporting(E_ALL | E_STRICT);
		require('../UploadHandler.php');
		$upload_handler = new UploadHandler(array(

				'download_via_php' => true
		));
	}

}
