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
        //$photofolders = PhotoFolder::all();
		
		$photofolders = DB::table('photofolders')->take(1)->get();
		
		//постраничный вывод c записью в массив:
		
		// на 1 странице допусти 3 записи:
		$one_page = 3;
		
		//тогда всего страниц:
		$num_pages = intval(count($photofolders)/$one_page);
		
		// теерь нужно выводить массив limit $num_pages;
		
		
		
        return view('photofolders', ['photofolders' => $photofolders]);

    }

    /* public function show($id)
    {
        $photofolder = PhotoFolder::find($id);

        return view ('photofolder', ['photofolder' => $photofolder]);

    } */

}
