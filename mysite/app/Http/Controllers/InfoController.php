<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Info;

class InfoController extends Controller
{
    //
    public  function show()
    {
        $name_uri = Route::current()->uri;

        if ($name_uri == 'events')
        {
            $temps = Info::where('type', 'e')->get();
        }
        elseif ($name_uri == 'congrats')
        {
            $temps = Info::where('type', 'c')->get();
        }
        elseif ($name_uri == 'infos')
        {
            $temps = Info::where('type', 'i')->get();
        }

        return view($name_uri, [$name_uri => $temps]);
    }

}
