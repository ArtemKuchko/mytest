<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view ('admin.admin_test2');

    }

    public function store(Request $request)
    {
        //	
		//$request->file('myfile')->store('myfiles');
		
		$file = $request->file('myfile');
		
		//$ext = $file ->guessClientExtension();
		
		$name = $file->getClientOriginalName();
		$ext = $file->getClientOriginalExtension();
		//$file->getSize();
		
		$file ->storeAs('myfiles', "{$name}.{$ext}");
		
		
		
		return back();
		
    }
	
	 
	  public function delete($id)
		{
			$upload = Upload::find($id);
			$upload->delete();

			$success = new stdClass();
			$success->{$upload->filename} = true;

			return Response::json(array('files'=> array($success)), 200);
		}

}
