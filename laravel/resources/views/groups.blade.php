@extends('layouts.head_coach.app_head_coach')

@section ('content')

<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Добавление возрастных групп </h1>
                </div>
                <!-- /.col-lg-12 -->
</div>

<div class="row">
    <p><a href="{{url('/add_group')}}"><button type="button" class="btn btn-primary btn-lg">Добавить возрастную группу <i class="fa fa-plus-circle"></i></button></a>
	&nbsp;&nbsp;&nbsp;
    <a href="{{ url('/get_back') }}"><button type="button" class="btn btn-warning btn-lg">Назад</button></a>
	
	</p>
	
</div>

<div class="row">
<!--<div class="col-lg-6">-->
                    <!--<div class="panel panel-default">-->
                        <!--<div class="panel-heading">
                            Возрастные группы
                        </div>-->
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Название</th>
                                            <th>Пол</th>                                            
                                        </tr>
                                    </thead>
									
                                    <tbody>
									
										@foreach ($groups->sortBy('name') as $group)
																				
                                        <tr>
                                            <td> {{$i++}} </td>
                                            <td> {{ $group -> name }} </td>
                                            <td> 
											@if ($group -> gender == "M")
												Мужской
											
											@else
												Женский
											@endif
											</td>
                                            <td><a href="{{ route('categoryGroup', ['id' => $group->id])}}"><button type="button" class="btn btn-success">Категории <i class="fa fa-arrow-right"></i></button></a></td>
                                            <td><a href="{{ route('editGroup', ['id' => $group->id] ) }}"><button type="button" class="btn btn-primary" value="" >Редактировать</button></a></td>
											<td>
												<form action=" {{ route('groupDelete', ['group'=> $group->id] ) }}" method="post">
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
                                            <td>Юниоры 16-17 лет</td>
                                            <td>Мужчины</td>
                                            <td><button type="button" class="btn btn-success">Категории <i class="fa fa-arrow-right"></i></button></td>
                                            <td><button type="button" class="btn btn-primary">Редактировать</button></td>
											<td><button type="button" class="btn btn-danger">Удалить</button></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Взрослые 18+ лет</td>
                                            <td>Мужчины</td>
                                            <td><button type="button" class="btn btn-success">Категории <i class="fa fa-arrow-right"></i></button></td>
                                            <td><button type="button" class="btn btn-primary">Редактировать</button></td>
											<td><button type="button" class="btn btn-danger">Удалить</button></td>
                                        </tr>-->
										
									
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    <!--</div>-->
                    <!-- /.panel -->
<!--</div>-->
</div>

@endsection