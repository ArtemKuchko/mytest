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

        //dd(count($photos));

        $folder =PhotoFolder::find($folder_id);

        //dd($folder);

        return view('photos', ['photos' => $photos, 'folder' => $folder]);
    }

    /*public function showItem($item_id)
    {
        $photo = Photo::find($item_id);

        $folder = $photo->photofolder()->get();

        return view('photo', ['photo' => $photo, 'folder' => $folder[0]]);
    }*/
}
