@extends('layouts.head_coach.app_head_coach')

@section ('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <a href="{{ route('CompetitionShow', ['id' => session('id') ]) }}"><button type="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-arrow-left"></i>
                    </button></a>
                Взвешивание участников соревнований </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


    <div class="row">

        <div class="col-lg-6">

            <label>Введите имя спортсмена:</label>

            <div class="form-group input-group">
                <form action="{{ url('/search_profile') }}" method="post">

                    {{ csrf_field() }}

                    <input type="text" name="search_profile" class="form-control">
                                                <span class="input-group-btn">
                                                    <a href="{{ url('/search_profile') }}"><button class="btn btn-default" type="submit"><i class="fa fa-search"> Поиск </i>
                                                    </button></a>
                                                </span>
                </form>
            </div>

            <a href="{{ url('/weighing_teams') }}"><button type="button" class="btn btn-primary btn-lg btn-block"> Поиск по командам </button></a>
            <br>
            <a href="#"><button type="button" class="btn btn-success btn-lg btn-block"> Поиск по категориям </button></a>

            <br>

        </div>

    </div>

    <div class="row">



    </div>



@endsection



