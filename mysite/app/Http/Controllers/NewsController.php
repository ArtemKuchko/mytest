<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Info;

use DB;

class NewsController extends Controller
{
	public function index()
	{
		return redirect('/news_1');
	}
	
	public function show($page)
    {
		//всего новостей:
		$amount = News::all()->count();
		
		//кол-во новостей на 1 странице:
		$one_page = 3;		
		
		$news = DB::table('news')->offset($one_page * ($page-1))->limit($one_page)->get();

		return view ('news', ['news' => $news, 'page' => $page, 'one_page' => $one_page, 'amount' => $amount]);
    }

    public function showOne($id)
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
