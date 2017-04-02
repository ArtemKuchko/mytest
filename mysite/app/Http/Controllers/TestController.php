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

		return view('test');
    }

	public function upload(Request $request)
	{

		error_reporting(E_ALL | E_STRICT);
		require __DIR__.'/libraries/UploadHandler.php';
		$upload_handler = new UploadHandler(array(

				'download_via_php' => true
		));
	}

   /* public function store(Request $request)
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
		
    }*/
	
	 
	  /*public function delete($id)
		{
			$upload = Upload::find($id);
			$upload->delete();

			$success = new stdClass();
			$success->{$upload->filename} = true;

			return Response::json(array('files'=> array($success)), 200);
		}*/

}
