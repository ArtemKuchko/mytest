<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\PhotoFolder;


class PhotoController extends Controller
{
    //

    public function show($folder_id)
    {
        $photos = Photo::where('folder_id', $folder_id)->get();

        $folder =PhotoFolder::find($folder_id);

		return view('photos', ['photos' => $photos, 'folder' => $folder]);
    	
		//return view('photos', ['photos' => $photos, 'folder' => $folder]);
    }

}
