<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Info;

class MainController extends Controller
{
    //
	public function index()
	{
		
		$last_news = News::orderBy('id', 'desc')->take(3)->get();
		
		// mask: e - event, c - congratulation, i - other information
		
		$last_i['event'] = Info:: where('type', 'e')->orderBy('id', 'desc')->first();
		
		$last_i['congratulation'] = Info::where('type', 'c')->orderBy('id', 'desc')->first();
		
		$last_i['info'] = Info::where('type', 'i')->orderBy('id', 'desc')->first();
		
		return view('index', ['last_news' => $last_news, 'last_i' => $last_i]);
	}
	
	
}
