<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Info;

class InfoController extends Controller
{    
	public $name_uri;
	public $title;
	public $temps;
	public $myurl;
	public $type;
	
	public function __construct()
	{
		$this->name_uri = Route::current()->uri();
		
		if (substr_count($this->name_uri, 'event') > 0)
		{
            $this->temps = Info::where('type', 'e')->get();
			$this->title='События';
			$this->myurl='event';
			$this->type='e';
			
		}
        elseif (substr_count($this->name_uri, 'congrat') > 0)
        {
            $this->temps = Info::where('type', 'c')->get();
			$this->title='Поздравления';
			$this->myurl='congrat';
			$this->type='c';
		}
        elseif (substr_count($this->name_uri, 'info') > 0)
        {
            $this->temps = Info::where('type', 'i')->get();
			$this->title='Информация';
			$this->myurl='info';
			$this->type='i';
		}
		
	}
	
    public  function show()
    {			
        return view('info', ['temps' => $this->temps, 'title' => $this->title]);
    }
	
	public function showAdmin()
	{
		return view('admin.admin_infos', ['temps' => $this->temps, 'title' => $this->title, 'myurl' => $this->myurl]);
	}
	
	public function add()
	{
		return view ('admin.admin_info_add', ['title' => $this->title, 'myurl' => $this->myurl]);
	}
	
	public function store(Request $request)
	{
		$info = new Info;
		$info->name = $request->name;
		$info->description= $request->description;
		$info->type = $this->type;
		
		$imageName = time().'.'. $request->myfile->getClientOriginalExtension();
		$info->image_path = $imageName;
		$request->myfile->move(public_path().'/images/infos', $imageName);
		
		$info->save();
		
		return redirect('/admin_'.$this->myurl. 's');
			
	}
	
	public function edit($id)
	{
		$info = Info::find($id);
		return view('admin.admin_info_edit', ['info' => $info]);
	}
	
	public function update(Request $request, $id)
	{		
		$info = Info::find($id);
		$info->name = $request->name;
		$info->description = $request->description;
		
		if (!empty($request->file))		
		{
			$uploaddir = 'images/infos/';
			$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
			$uploadname = time() . '.' . $extension;			
			$uploadfile = $uploaddir . $uploadname;
			if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
			{
				unlink('images/infos/'.$info->image_path);
				$info->image_path = $uploadname;
			}					
		}
		
		$info->save();
		return back();
	}
	 public function delete($id)
	 {
		$info = Info::find($id);
		$info->delete();		
		unlink('images/infos/'.$info->image_path);
		
		return back();
		 
	 }
	
	
	
	
	
	
}
