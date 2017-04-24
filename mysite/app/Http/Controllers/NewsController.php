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
		
		$imageName =time().'.'. $request->myfile->getClientOriginalExtension();
		$news->image_path = $imageName;
		$request->myfile->move(public_path().'/images/news/', $imageName);
		
		$news-> save();
		return redirect('/admin_news');
	}
	
	public function showAdmin()
	{
		$news = News::all();		
		return view('admin.admin_news', ['news' => $news]);	
	}
	
	public function edit($id)
	{
		$news = News::find($id);
		return view('admin.admin_news_edit', ['news' => $news]);
	}
	
	public function update(Request $request, $id)
	{
		$news = News::find($id);		
		$news->name = $request->name;
		$news->description = $request->description;
		
		if (!empty($request->file))		
		{
			$uploaddir = 'images/news/';
			$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
			$uploadname = time() . '.' . $extension;			
			$uploadfile = $uploaddir . $uploadname;
			if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
			{
				unlink('images/news/'.$news->image_path);
				$news->image_path = $uploadname;
			}					
		}
		
		$news->save();				
		return back();		
	}
	
	public function delete($id)
	{
		$news = News::find($id);
		$news->delete();		
		unlink('images/news/'.$news->image_path);
		
		return back();
	}	
}
