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

}
