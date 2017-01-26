@extends('layouts.head_coach.app_head_coach')

@section ('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <a href="{{ route('CompetitionShow', ['id' => session('id') ]) }}"><button type="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-arrow-left"></i>
                    </button></a>
                Жеребьевка участников соревнований </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">

        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Название</th>
                        <th>Пол</th>
                        <th>Категории</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach ($groups->sortBy('name') as $group)

                        <tr>
                            <td> {{$loop -> iteration}} </td>
                            <td> {{ $group -> name }} </td>
                            <td>
                                @if ($group -> gender == "M")
                                    Мужской

                                @else
                                    Женский
                                @endif
                            </td>
                            <td><a href="{{ route('grids.show', ['id' => $group->id]) }}"><button type="button" class="btn btn-success">Категории <i class="fa fa-arrow-right"></i></button></a></td>

                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>

    </div>


@endsection