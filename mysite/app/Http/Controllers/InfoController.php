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
			$title='События';
        }
        elseif ($name_uri == 'congratulations')
        {
            $temps = Info::where('type', 'c')->get();
			$title='Поздравления';
		}
        elseif ($name_uri == 'info')
        {
            $temps = Info::where('type', 'i')->get();
			$title='Информация';
        }

		//dd($temps);
        return view('info', ['temps' => $temps, 'title' => $title]);
		//return view($name_uri, [$name_uri => $temps]);
    }
	
}
