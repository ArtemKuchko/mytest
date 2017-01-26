@extends('layouts.head_coach.app_head_coach')

@section ('content')

    <div class="row">
        <div class="col-lg-12">

            <h1 class="page-header">
                <a href="{{ url('/weighing') }}"><button type="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-arrow-left"></i>
                    </button></a>
                Взвешивание по поиску </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <div class="row">

        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped">

                    {{--@if ($chosen_profiles != 0)--}}

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Ф.И.О.</th>
                                <th>Команда</th>
                                <th>Дата</th>
                                <th>Разряд</th>
                                <th>Реальный вес</th>
                                <!--<th>Команда</th>-->
                                <!--<th>Тренер</th>-->
                            </tr>
                            </thead>
                            <tbody>


                            @foreach ($chosen_profiles as $profile)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $profile -> surname ." ". $profile -> name ." ". $profile -> last_name}} </td>
                                    <td> $team </td>
                                    <td>{{ $profile -> birth_date }}</td>
                                    <td>{{ $profile -> sport_level }}</td>
                                    <td>real_weight</td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">
                                            Взвесить
                                        </button>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>



                {{--@endif--}}

            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->

    </div>





@endsection