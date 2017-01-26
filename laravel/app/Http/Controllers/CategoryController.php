<?php

namespace App\Http\Controllers;

use App;

use Illuminate\Http\Request;

use App\Category;

use App\Group;

use DB;

class CategoryController extends Controller
{
	
	public function show($id)
	{
		$group = App\Group::find($id);
		$categories = DB::table('categories')->where('group_id', $group->id)->get();		
		session(['group_id'=> $id]);

		return view('/category_group', ['categories' => $categories, 'group' => $group]);
				
	}
	
	public function add(Request $request, Category $category)
	{
		$data = $request->all();
		$category= new Category;		
		$category -> fill($data);
		
		//извлечение из сесси номера группы:
		$group_id = $request->session()->get('group_id');		
		$category -> group_id = $group_id;		
		$category-> save();
		
		return redirect()->route('categoryGroup', ['id' => $group_id]); //правильно ли стоит id??????
						
	}
	
	public function edit($id)
	{
		$category = Category::find($id);
		session(['category_id' => $id]);
		
		return view ('/edit_category', ['category' => $category]);
	}
	
	public function update(Request $request, Category $category)
	{
		$id = $request->session()->get('category_id');
		
		
		DB::table('categories')->where('id', $id)->update(['name' => $request->name,
														  'min_weight' => $request->min_weight,
														  'max_weight' => $request->max_weight]
		
		);
		
		$group_id = $request->session()->get('group_id');
		
		return redirect()->route('categoryGroup', ['id' => $group_id]);
	}
	
	public function delete(Request $request, Category $category)
	{
		$category -> delete();
		
		$group_id = $request->session()->get('group_id');
		return redirect()->route('categoryGroup', ['id' => $group_id]);
	}
					
}
