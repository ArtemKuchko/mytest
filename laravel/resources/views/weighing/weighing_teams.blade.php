@extends('layouts.head_coach.app_head_coach')

@section ('content')

    <div class="row">
        <div class="col-lg-12">

            <h1 class="page-header">
                <a href="{{ url('/weighing') }}"><button type="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-arrow-left"></i>
                    </button></a>
                Взвешивание по командам </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-6">

            <form action="{{ url('/weighing_teams') }}" method="post">

                {{ csrf_field() }}

                <label>Выберите команду:</label>
                <select name="team_id" aria-controls="dataTables-example" class="form-control input-sm">

                    @foreach ($teams as $team)

                        @if (($team -> id) == ($team_t -> id))
                            {
                            <option selected value="{{ $team -> id }}">{{ $team -> name}}</option>
                            }
                        @else
                            {
                            <option	value="{{ $team -> id }}">{{ $team -> name}}</option>
                            }
                        @endif

                    @endforeach
                </select>

                <br>

                <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> найти участников </button>


            </form>


        </div>

    </div>

    <br>
    <div class="row">

        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped">

                    @if ($chosen_profiles != 0)

                        <p>Команда - {{ $team_t -> name}}</p>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Ф.И.О.</th>
                                <th>Дата</th>
                                <th>Разряд</th>
                                <th>Реальный вес</th>
                                <th>Взвесить</th>
                                <!--<th>Тренер</th>-->
                            </tr>
                            </thead>
                            <tbody>


                            @foreach ($chosen_profiles as $profile)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $profile[0] -> surname ." ". $profile[0] -> name ." ". $profile[0] -> last_name}} </td>
                                    <td>{{ $profile[0] -> birth_date }}</td>
                                    <td>{{ $profile[0] -> sport_level }}</td>
                                    <td>real_weight</td>
                                    <td>
                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$profile[0]->id}}">
                                            Взвесить
                                        </button>
										
										<!-- Modal -->
										  <div class="modal fade" id="myModal{{$profile[0]->id}}" role="dialog">
											<div class="modal-dialog">
											
											  <!-- Modal content-->
											  <div class="modal-content">
												
												<div class="modal-header">
												  <button type="button" class="close" data-dismiss="modal">&times;</button>
												  <h4 class="modal-title">Взвешивание участника - {{$profile[0] -> surname. " " .$profile[0] -> name}} </h4>
												</div>
												
												<div class="modal-body">
												
													<form method="post" action="{{ route('realWeight', ['profile_id' => $profile[0]->id] )}}">
														{{csrf_field()}}
														<label>Введите реальный вес:</label>
														<input type="double" name="real_weight" size="6">
													
												  
												</div>
												
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
													<button type="submit" class="btn btn-primary">Сохранить</button></div>
													</form>
											  </div>
											  
											</div>
										  </div>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
						</table>



                @endif

            </div>
            <!-- /.table-responsive -->
			
			
			
			
			
        </div>
        <!-- /.panel-body -->

    </div>





@endsection