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

}
