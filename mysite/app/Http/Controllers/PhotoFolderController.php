<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PhotoFolder;

class PhotoFolderController extends Controller
{
    //

    public function index()
    {
        $photofolders = PhotoFolder::all();

        return view('photofolders', ['photofolders' => $photofolders]);

    }

    public function show($id)
    {
        $photofolder = PhotoFolder::find($id);

        return view ('photofolder', ['photofolder' => $photofolder]);

    }

}
