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
		return view('admin.admin_test');
		/*$stroka = '1,2,3,4,5,6,7';
		$temp = 0;
		
		for ($i=0; $i < strlen($stroka); $i++)
		{
			$temp+= $stroka[$i];
		}
		
		echo $temp;*/
    }
	
	public function store(Request $request)
	{
		$filesnum = count($_FILES['file']['name']);
		
		for($i=0; $i<$filesnum; $i++)
		{
			$uploaddir =storage_path('app/myfiles/');
			$uploadfile = $uploaddir . basename($_FILES['file']['name'][$i]);

			if (!move_uploaded_file($_FILES['file']['tmp_name'][$i], $uploadfile))
			{
				echo "Файл ". $_FILES['file']['tmp_name'][$i] ." не загружен\n";
			}
			
		}
		
		/*
		$uploaddir =storage_path('app/myfiles/');
		$uploadfile = $uploaddir . basename($_FILES['file']['name']);

		if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
			echo "Файл корректен и был успешно загружен.\n";
		} else {
			echo "Возможная атака с помощью файловой загрузки!\n";
		}*/
		
		
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
