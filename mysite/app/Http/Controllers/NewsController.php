<?php

namespace App\Http\Controllers;

use App\News;

use Illuminate\Http\Request;

use DB;

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
	
	public function store(Request $request)
	{
		$news = new News;
		$news->name = $request->name;
		$news->description = $request->description;
		$news->image_path = 'test.jpg';
		$news-> save();
		return redirect('/admin_news');
	}
	
	public function showAdmin()
	{
		$news = News::all();
		
		return view('admin.admin_news', ['news' => $news]);
		
	}
	
	
	
	
}
