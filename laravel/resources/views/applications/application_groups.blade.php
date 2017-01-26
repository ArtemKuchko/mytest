@extends('layouts.head_coach.app_head_coach')

@section ('content')

    <div class="row">
        <div class="col-lg-12">

            <h1 class="page-header">
                <a href="{{ url('/applications') }}"><button type="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-arrow-left"></i>
                </button></a>
                Заявки по категориям </h1>

        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-6">

            <form action="{{ url('/application_groups') }}" method="post">

                {{ csrf_field() }}

                <label>Выберите возрастную группу:</label>
                <select name="group_id" aria-controls="dataTables-example" class="form-control input-sm">

                    @foreach ($groups as $group)

                        {{-- @if (($group -> id) == ($group_t -> id))
                            {
                                <option selected value="{{ $group -> id }}">{{ $group -> name}}</option>
                            }
                        @else
                            {
                                <option	value="{{ $group -> id }}">{{ $group -> name}}</option>
                            }
                        @endif--}}
                        <option	value="{{ $group -> id }}">{{ $group -> name}}</option>

                    @endforeach

                </select>

                <br>

                <button type="submit" class="btn btn-success">Категории <i class="fa fa-arrow-right"></i></button>

            </form>

        </div>

    </div>

    <br>

    <div class="row">

        <div class="panel-body">
            <div class="table-responsive">



                        @if ( $chosen_group !=[] )

                        <p>Список весовых категорий возрастной группы  </p>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Название</th>
                                        <th>Найти участников</th>

                                    </tr>
                                    </thead>
                                    <tbody>



                                        @foreach ($categories->sortBy('name') as $category)

                                            <tr>
                                                <td>{{ $loop -> iteration }}</td>
                                                <td> {{ $category -> name }} </td>
                                                <td>
                                                    <a href="{{ route('applicationCategory', ['id' => $category->id]) }}">
                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> найти участников </button>
                                                    </a>
                                                </td>


                                            </tr>
                                        @endforeach




                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>

                        @endif



{{--
                        <p>Весовая категория - $category -> name </p>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Ф.И.О.</th>
                                <th>Команда</th>
                                <th>Разряд</th>
                                <!--<th>Команда</th>-->
                                <!--<th>Тренер</th>-->
                            </tr>
                            </thead>
                            <tbody>


                            {{--@foreach ($chosen_profiles as $profile)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $profile[0] -> surname ." ". $profile[0] -> name ." ". $profile[0] -> last_name}} </td>
                                    <td>{{ $profile[0] -> birth_date }}</td>
                                    <td>{{ $profile[0] -> sport_level }}</td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>



                @endif --}}

            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->

    </div>





@endsection