<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		return view('admin.admin_test');

    }
	
	public function store(Request $request)
	{
		$filesnum = count($_FILES['file']['name']);
		
		for($i=0; $i<$filesnum; $i++)
		{
			$uploaddir =storage_path('app/myfiles/');
			$extension = pathinfo($_FILES['file']['name'][$i], PATHINFO_EXTENSION);
			$uploadfile = $uploaddir . $i . '.' . $extension;
			
			//$uploadfile = $uploaddir . basename($_FILES['file']['name'][$i]);
			
			if (!move_uploaded_file($_FILES['file']['tmp_name'][$i], $uploadfile))
			{
				echo "Файл ". $_FILES['file']['tmp_name'][$i] ." не загружен\n";
			}
			
		}
		
	}
	
	public function store_one(Request $request)
	{
		dd($_FILES['myfile']['tmp_name']);
		
	}
	
	  /*public function delete($id)
		{
			$upload = Upload::find($id);
			$upload->delete();

			$success = new stdClass();
			$success->{$upload->filename} = true;

			return Response::json(array('files'=> array($success)), 200);
		}*/

}
