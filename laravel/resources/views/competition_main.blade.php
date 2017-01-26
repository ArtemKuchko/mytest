@extends('layouts.head_coach.app_head_coach')

@section ('content')

<!-- Таблица для редактирования основных данных соревнований -->
	
	<div class="col-lg-12">
		<h1 class="page-header">
        <a href="{{ route('CompetitionShow', ['id' => $competition-> id ]) }}"><button type="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-arrow-left"></i>
        </button></a>
            Основные данные о соревнованиях</h1>
	</div>

	<div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Проверьте основные данные:
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody>
                                        <tr>
                                            <td>Название</td>
                                            <td>{{ $competition -> name }}</td>  
                                        </tr>
										<tr>
                                            <td>Место проведения</td>
                                            <td>{{ $competition -> place }}</td>
											   
                                        </tr>
                                        <tr>
                                            <td>Дата начала</td>
                                            <td>{{ $competition -> date_start }}</td>
											   
                                            
                                        </tr>
                                        <tr>
                                            <td>Дата окончания</td>
                                            <td>{{ $competition -> date_end }}</td>
                                               
                                        </tr>
										<tr>
                                            <td>Срок подачи заявок</td>
                                            <td>{{ $competition -> dead_line }}</td>
                                               
                                        </tr>
										<tr>
                                            <td>Уровень соревнований</td>
											
											@if ($competition->level == 1)
												<td>Национальный</td>
											@elseif ($competition->level == 2)
												<td>Областной</td>
											@else
												<td>Городской</td>
											@endif
                                               
                                        </tr>

										<tr>
                                            <td>Описание</td>
                                            <td>{{ $competition -> description }}</td>
                                               
                                        </tr>
                                        <tr>
                                            <td>Файл положения</td>
                                            <td>protocol.doc</td>
                                        </tr>
                                    </tbody>
                                </table>
								
								
								
								
                                <a href="{{ url('/edit_competition') }}"><button type="submit" name="competition_number" class="btn btn-danger" value="">Редактировать </button></a>

                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
            </div>
            <!-- /.row -->
@endsection