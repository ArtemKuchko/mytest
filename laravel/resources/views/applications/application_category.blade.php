@extends('layouts.head_coach.app_head_coach')

@section ('content')

    <div class="row">
        <div class="col-lg-12">

            <h1 class="page-header">
                <a href="{{ url('/application_groups') }}"><button type="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-arrow-left"></i>
                    </button></a>
                Заявка в возрастной группе {{ $group -> name }} </h1>

        </div>
        <!-- /.col-lg-12 -->
    </div>


    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Весовая категория - {{ $category -> name }}
            </div>

            @if ($sportsmen != 0)

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Ф. И. О.</th>
                                <th>Дата рождения</th>
                                <th>Разряд</th>
                                <th>Команда</th>
                                <th>Тренер</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($sportsmen as $profile)

                                <tr>
                                    <td>{{ $loop -> iteration }}</td>
                                    <td> {{ $profile[0] -> surname ." ".$profile[0] -> name." ".$profile[0] -> last_name }} </td>
                                    <td> {{ $profile[0] -> birth_date }} </td>
									
                                    @if ($profile[0] -> sport_level == "CMS")
										<td>КМС</td>
									@elseif ($profile[0] -> sport_level == "MS")
										<td>МС</td>
									@elseif($profile[0] -> sport_level == "IMS")
										<td>МСМК</td>
									@elseif ($profile[0] -> sport_level == "HMS")
										<td>ЗМС</td>
									@else
										<td>{{$profile[0] -> sport_level}}</td>
									@endif
									
									<td> {{ $chosen_teams[$loop->index][0] -> name }} </td>
									<td> {{ $coach[$loop->index][0] -> surname }}</td>
									
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->

            @endif
        </div>
        <!-- /.panel -->
    </div>


@endsection