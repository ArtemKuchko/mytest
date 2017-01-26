<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Group;

class GridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $groups = Group::all();


        return view('grid.grid', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $group = Group::find($id);
        session(['group_id'=> $id]);

        $categories = DB::table('categories')->where('group_id', $group->id)->get();

        return view ('grid.grid_group', ['group' => $group, 'id' => $id, 'categories' => $categories] );


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chosen_applines = DB::table('applines')->where('category_id', $id)->get();

        $i=0;

        foreach($chosen_applines as $appline)
        {
            $chosen_profiles[$i] = DB::table('profiles')->where('id', $appline->profile_id)->get();
            $i++;
        }

        return view('grid.grid_sort', ['chosen_profiles' => $chosen_profiles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
