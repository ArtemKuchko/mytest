<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

use App\Group;

use DB;

class GroupController extends Controller
{

	public function show(Request $request)
	{		
        $groups = App\Group::all();
		
		//для вывода номера соревнования:
		//$i=1;
		//$id = $request->session()->get('id');
		//$competition = Competition::find($id);


        return view('groups', ['groups' => $groups]);
		
	}
	
	public function add(Request $request)
	{
				
		$data = $request->all();
		
		$group = new Group;
		$group -> fill($data);				
		$group -> competition_id =1;		
		$group -> save();
		
		return redirect ('/groups');
				
	}
	
	public function edit($id)
	{		
		$group = Group::find($id);
		session(['group_id'=> $id]);
		
		return view ('edit_group', ['group' => $group, 'id' => $id] );
		
	}
	
	public function update(Request $request, Group $group)
	{
			$id = $request->session()->get('group_id');
			
			DB::table('groups')->where('id', $id)->update(['name' => $request -> name,
														  'gender' => $request -> gender]);
																
			return redirect ('/groups'); 
		
	}
	
	public function back(Request $request)
	{
		return redirect('/groups');		
	}
	
	public function delete(Request $request, Group $group)
	{
		$group -> delete();		
		return redirect ('/groups');
	}
	
	
}
