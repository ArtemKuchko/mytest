<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Video;
use App\VideoFolder;


class VideoController extends Controller
{
    //
	
	public function show($folder_id)
    {
        $videos = Video::where('folder_id', $folder_id)->get();

        $folder = VideoFolder::find($folder_id);

		return view('videos', ['videos' => $videos, 'folder' => $folder]);
    	
    }
}
