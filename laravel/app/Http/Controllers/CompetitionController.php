<?php

namespace App\Http\Controllers;

use App;
use App\Competition;
use Illuminate\Http\Request;
use DB;

class CompetitionController extends Controller
{

	//показ текущих соревнований:
    public function show(Request $request)
    {
        $competitions = App\Competition::all();
		
		//для вывода номера соревнования:
		$i=1;
		
        return view('/competitions', ['competitions' => $competitions, 'i' => $i]);
    }

    //добавление новых соревнований:
    public function add(Request $request) 
	{
		$data = $request->all();		
		$competition = new Competition;		
		$competition->fill($data);		
		$competition->save();
				
        return redirect('/competitions');
    }

	// переход в окно текущих (интересующих, конкретных) соревнований
	public function edit($id) 
	{	
		$competition = Competition::find($id);		
		session(['id'=>$id]);
		
		return view('competition_content')->with('competition', $competition);
		
	}
	// показ основных данных:
	public function show_main_data (Request $request, Competition $competition)
	{	
		
		$id = $request->session()->get('id');				
		$competition = Competition::find($id);		
		
		return view('competition_main')->with('competition', $competition);		
		
	}
		
	//переход в режим редактирования основных данных:
	public function edit_competition(Request $request, Competition $competition)
	{

		$id = $request->session()->get('id');		
		$competition = Competition::find($id);
		
		return view ('edit_competition', ['competition' => $competition] );
	}
	//----------------------
	
	//обновление данных:
	public function update (Request $request, Competition $competition)
	{			
		$id = $request->session()->get('id');
				
		DB::table('competitions')->where('id', $id)->update(['name' => $request-> name, 
															'place' => $request-> place,
															'date_start' => $request->date_start,
															'date_end' => $request->date_end,
															'dead_line'=> $request->dead_line,
															'level'=> $request->level,
															'description'=> $request->description
																			
																			]);	
				
		$competition = Competition::find($id);
					
		return view('competition_main')->with('competition', $competition);
				
	}

	
	//кнопка возврата назад:
	public function back(Request $request)
	{
		$id = $request->session()->get('id');
		$competition = Competition::find($id);

		return view('competition_content')->with('competition', $competition);
	}
		
}
