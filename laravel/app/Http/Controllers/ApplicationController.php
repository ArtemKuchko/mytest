<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Application;
use App\Group;
use App\Team;
use DB;



class ApplicationController extends Controller
{
    //
	public function show(Request $request)
	{
		$teams = Team::all();
		$team_t = Team::find(1)->first();
		
		//надо возвращать еще и selected value в выпадающий список

		return view('applications.teams', ['chosen_profiles' => 0, 'team_t' => $team_t, 'teams' => $teams,]);
	}

	public function  showGroup(Request $request)
	{
		$groups = Group::all();
		
		$chosen_group = session('group_id');
		
		$categories = DB::table('categories')->where('group_id', $chosen_group)->get();
		
		//dd($chosen_group);

		return view ('applications.application_groups', ['groups' => $groups, 'categories' => $categories, 'chosen_group' => $chosen_group]);
	}
	
	public function chooseTeam(Request $request)
	{
		$teams = Team::all();
		
		//выбрали команду
		$team_id = $request -> team_id;		
		//нашли команду в БД
		$team_t = Team::find($team_id);
		
		//выбрали соединение по выбранной команде
		$connects = DB::table('connections')->where('team_id', $team_t->id)->get();
		
		$i = 0;
		
		if (!($connects -> isEmpty()))
		{
			foreach ($connects as $connect)
			{
					// profile_id - массив идентификаторов профайлов спортсменов
					$profile_id[$i] = $connect -> profile_id;
					
					//по массиву профайлов выбираем наши профайлы
					$chosen_profiles[$i] = DB::table('profiles')->where('id', $profile_id[$i])->get();
					
					$i++;
					
			}
		}
		else
		{
			$chosen_profiles = 0;
		}
		
		//return view('applications.team_application', ['chosen_profiles' => $chosen_profiles, 'team' => $team]);
		return view('applications.teams', ['chosen_profiles' => $chosen_profiles, 'team_t' => $team_t, 'teams' => $teams,]);
		
	}

	public function chooseGroup(Request $request)
	{
		$groups = Group::all();
		$chosen_group = Group::find($request -> group_id);

		$categories = DB::table('categories')->where('group_id', $chosen_group->id)->get();

		session(['group_id' => $chosen_group->id]);

		/*
		//выбрали команду
		$group_id = $request -> group_id;
		//нашли команду в БД
		$group_t = Team::find($group_id);

		//выбрали соединение по выбранной команде
		$connects = DB::table('connections')->where('team_id', $team_t->id)->get();

		$i = 0;

		if (!($connects -> isEmpty()))
		{
			foreach ($connects as $connect)
			{
				// profile_id - массив идентификаторов профайлов спортсменов
				$profile_id[$i] = $connect -> profile_id;

				//по массиву профайлов выбираем наши профайлы
				$chosen_profiles[$i] = DB::table('profiles')->where('id', $profile_id[$i])->get();

				$i++;

			}
		}
		else
		{
			$chosen_profiles = 0;
		}

		//return view('applications.team_application', ['chosen_profiles' => $chosen_profiles, 'team' => $team]);
		return view('applications.teams', ['chosen_profiles' => $chosen_profiles, 'team_t' => $team_t, 'teams' => $teams,]);*/

		return view('applications.application_groups', ['groups' => $groups, 'categories' => $categories, 'chosen_group' => $chosen_group]);
	}

	public function chooseCategory(Request $request)
	{
		$category_id = $request -> id;

		$category = Category::find($category_id);

		$group = Group::find(session('group_id'));

		$chosen_applines = DB::table('applines')->where('category_id', $category_id)->get();

		if (!($chosen_applines ->isEmpty()))
		{
			$i=0;
			foreach ($chosen_applines as $chosen_appline)
			{
				$sportsmen[$i] = DB::table('profiles')->where('id', $chosen_appline->profile_id)->get();
				$chosen_connections[$i] = DB::table('connections')->where('profile_id', $chosen_appline->profile_id)->get();
				$chosen_teams[$i] = DB::table('teams')->where('id', $chosen_connections[$i][0]->team_id)->get();
				$coach[$i] = DB::table('coaches')->where('id', $chosen_appline->coach_id)->get();
				$i++;
			}
		}
		else
		{
			$sportsmen = 0;
			$chosen_teams = 0;
			$coach = 0;
			
		}
		
		//dd($coach);
		
		return view('applications.application_category', ['category' => $category, 'group' => $group, 'sportsmen' => $sportsmen, 
														  'chosen_teams' => $chosen_teams, 'coach' => $coach]);

	}
	
}
