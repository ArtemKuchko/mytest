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
		
		$stroka = '1,2,3,4,5,6,7';
		$temp = 0;
		
		for ($i=0; $i < strlen($stroka); $i++)
		{
			$temp+= $stroka[$i];
		}
		
		echo $temp;
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
