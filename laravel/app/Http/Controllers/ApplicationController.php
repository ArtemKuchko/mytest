<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Application;
use App\Team;
use DB;

class ApplicationController extends Controller
{
    //
	public function show(Request $request)
	{
		$teams = Team::all();
		
		//dd($teams);
		
		return view('applications.teams', ['teams' => $teams]);
	}
	
	
}
