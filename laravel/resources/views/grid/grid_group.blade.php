@extends('layouts.head_coach.app_head_coach')

@section ('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <a href="{{ url('/grids') }}"><button type="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-arrow-left"></i>
                    </button></a>
                Жеребьевка по весовым категориям</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <!--<div class="col-lg-6">-->
        <div class="panel panel-default">
            <div class="panel-heading">
                Весовые категории:  {{$group -> name}}
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Название</th>
                            <th>Жеребить</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($categories->sortBy('name') as $category)

                            <tr>
                                <td>{{ $loop -> iteration }}</td>
                                <td> {{ $category -> name }} </td>
                                <td><a href=" {{ route('gridSort', ['id' => $category->id]) }} "><button type="button" class="btn btn-primary">Прожеребить</button></a></td>

                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
        <!--</div>-->
    </div>

@endsection