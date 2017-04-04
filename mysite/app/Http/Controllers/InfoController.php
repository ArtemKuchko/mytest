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
	public $folder;
	public $type;
	
	public function __construct()
	{
		$this->name_uri = Route::current()->uri();
		
		if (substr_count($this->name_uri, 'event') > 0)
		{
            $this->temps = Info::where('type', 'e')->get();
			$this->title='События';
			$this->folder='events';
			$this->type='e';
			
		}
        elseif (substr_count($this->name_uri, 'congrat') > 0)
        {
            $this->temps = Info::where('type', 'c')->get();
			$this->title='Поздравления';
			$this->folder='congrats';
			$this->type='c';
		}
        elseif (substr_count($this->name_uri, 'info') > 0)
        {
            $this->temps = Info::where('type', 'i')->get();
			$this->title='Информация';
			$this->folder='infos';
			$this->type='i';
		}
		
	}
	
    public  function show()
    {			
        return view('info', ['temps' => $this->temps, 'title' => $this->title]);
    }
	
	public function showAdmin()
	{
		return view('admin.admin_infos', ['temps' => $this->temps, 'title' => $this->title, 'folder' => $this->folder]);
	}
	
	public function addAdmin()
	{
		return view ('admin.admin_info_add', ['title' => $this->title, 'folder' => $this->folder]);
	}
	
	public function store(Request $request)
	{
		$info = new Info;
		$info->name = $request->name;
		$info->description= $request->description;
		$info->type = $this->type;
		
		$imageName = time().'.'. $request->myfile->getClientOriginalExtension();
		$info->image_path = $imageName;
		$request->myfile->move(public_path().'/images/'.$this->folder, $imageName);
		
		$info->save();
		
		return redirect('/admin_'.$this->folder);
		//url('/admin_'.$folder.'_add')
	}
	
}
