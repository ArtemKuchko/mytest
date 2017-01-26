<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;

use DB;
class WeighingController extends Controller
{
    //
    public function show(Request $request)
    {

        $teams = Team::all();
		
        if (!is_null(session('chosen_profiles')))
		{
			$chosen_profiles = session('chosen_profiles');
		}
		else
		{
			$chosen_profiles = 0;
		}
		
		if (!is_null(session('team_id')))
		{
			$team_t = Team::find(session('team_id'));
		}
		else
		{	
			$team_t = Team::find(1)->first();
		}
		
        //надо возвращать еще и selected value в выпадающий список

        return view('weighing.weighing_teams', ['chosen_profiles' => $chosen_profiles, 'team_t' => $team_t, 'teams' => $teams,]);

    }


    public function chooseTeam(Request $request)
    {
        $teams = Team::all();

        //выбрали команду
        $team_id = $request -> team_id;		
		session(['team_id' => $team_id]);
		
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

		session(['chosen_profiles' => $chosen_profiles]);
		
        return view('weighing.weighing_teams', ['chosen_profiles' => $chosen_profiles, 'team_t' => $team_t, 'teams' => $teams]);

    }

    public function chooseSearch(Request $request)
    {

        $chosen_profiles = DB::table('profiles')
            ->where('name', 'like', '%'.$request->search_profile.'%')
            ->orWhere('surname', 'like', '%'.$request->search_profile.'%')

            ->get();

        return view('weighing.weighing_search', ['chosen_profiles' => $chosen_profiles]);
    }

    public function chooseCategory()
    {


    }
	
	public function realWeight(Request $request)
	{
		DB::table('weighings')->insert(
										[
											'competition_id' => session('id'),
											'profile_id' => $request->profile_id,
											'real_weight' => $request->real_weight
										]
		
		);
		//$cp = $request->session()->all();
		//dd($cp);
		
		return redirect('/weighing_teams');//, ['chosen_profiles' => session('chosen_profiles'), 'team_t' => session('team_id')]);
		//return back();
	}
}
