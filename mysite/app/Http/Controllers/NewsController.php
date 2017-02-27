<?php

namespace App\Http\Controllers;

use App\News;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::all();

        return view('news', ['news' => $news]);

    }

    public function show($id)
    {
        $one_news = News::find($id);

        return view ('one_news', ['one_news' => $one_news]);

    }

}
