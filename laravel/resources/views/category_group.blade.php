@extends('layouts.head_coach.app_head_coach')

@section ('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Редактирование весовых категорий</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <p><a href="{{url('/add_category')}}"><button type="button" class="btn btn-primary btn-lg">Добавить весовую категорию <i class="fa fa-plus-circle"></i></button></a>
        &nbsp;&nbsp;&nbsp;
		<a href="{{ url('/back_to_groups') }}"><button type="button" class="btn btn-warning btn-lg">Назад</button></a>
		</p>
    </div>

    <div class="row">
        <!--<div class="col-lg-6">-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Весовые категории:  {{$group -> name}}  <!--12-13 лет (мужчины)-->
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th>Минимальный вес</th>
                                <th>Максимальный вес</th>
                            </tr>
                            </thead>
                            <tbody>
							
							@foreach ($categories->sortBy('name') as $category)
							
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td> {{ $category -> name }} </td>
                                <td> {{ $category -> min_weight }} </td>
                                <td> {{ $category -> max_weight }} </td>
                                <td><a href=" {{ route('editCategory', ['id' => $category -> id]) }} "><button type="button" class="btn btn-primary">Редактировать</button></a></td>
								<td>
									<form action="{{ route('categoryDelete', ['category' => $category->id]) }}" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="btn btn-danger">Удалить</button>
									</form>
								</td>
                            </tr>
							@endforeach
							<!--
                            <tr>
                                <td>2</td>
                                <td>до 75 кг</td>
                                <td>70.100</td>
                                <td>75.000</td>
                                <td><button type="button" class="btn btn-primary">Редактировать</button></td>
								<td><button type="button" class="btn btn-danger">Удалить</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>свыше 90 кг</td>
                                <td>90.000</td>
                                <td>нет</td>
                                <td><button type="button" class="btn btn-primary">Редактировать</button></td>
								<td><button type="button" class="btn btn-danger">Удалить</button></td>
                            </tr>							
							-->
							
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