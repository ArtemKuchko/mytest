@extends('layouts.head_coach.app_head_coach')

@section ('content')
	
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Выберите соревнование или воспользуйтесь поиском</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>


		<br>
		
		<div class="col-lg-10">
                    <!--<div class="panel panel-default">-->
                        <!--<div class="panel-heading">
                            Текущие соревнования
                        </div>-->
                        <!-- /.panel-heading -->
						<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Поиск...">
							<span class="input-group-btn">
							<button class="btn btn-default" type="button">
							<i class="fa fa-search"></i>
							</button>
							</span>
						</div>
						
						
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Название</th>
											<th>Дата проведения</th>
                                            <th>Перейти</th>
											<th>Удалить</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									
								
									@foreach ($competitions as $competition)
                                        <tr>
                                            <td>{{ $loop -> iteration }}</td>
                                            <td>{{ $competition -> name }}</td>
											<td>{{ $competition -> date_start .' - '. $competition -> date_end }}</td>
                                            <td>
																						
													<a  class="btn btn-default" href="{{ route('CompetitionShow', ['id' => $competition->id ]) }}" >Перейти 
													<i class="fa fa-long-arrow-right"></i></a>
												
											</td>
											<td><a href=""><button type="button" class="btn btn-danger">Delete</button></a></td>
                                        </tr>
                                    @endforeach    
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    <!--</div>-->
                    <!-- /.panel -->
		</div>

@endsection