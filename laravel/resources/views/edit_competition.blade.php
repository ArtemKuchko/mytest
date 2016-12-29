@extends('layouts.head_coach.app_head_coach')

@section ('content')

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Редактирование соревнований</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Основные данные о соревнованиях:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="{{ url('/update_competition') }}" method="post" role="form">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label>Название соревнований:</label>
                                            <input class="form-control" name="name" placeholder="Например, Чемпионат Украины по ушу-саньда" value="{{$competition -> name}}">
                                        </div>

                                        <div class="form-group">
                                            <label>Место проведения соревнований:</label>
                                            <input class="form-control" name="place" placeholder="Например, Винница" value="{{$competition -> place}}">
                                        </div>

										<div class="form-group">
                                            <label>Дата начала соревнований:</label>
                                            <input type="date" name="date_start" class="form-control" placeholder="" value="{{$competition -> date_start}}">
                                        </div>
										<div class="form-group">
                                            <label>Дата окончания соревнований:</label>
                                            <input type="date" name="date_end" class="form-control" placeholder="" value="{{$competition -> date_end}}">
                                        </div>
                                        
										<div class="form-group">
                                            <label>Срок подачи заявок:</label>
                                            <input type="date" name="dead_line" class="form-control" placeholder="" value="{{$competition -> dead_line}}">
                                        </div>
										
										<div class="form-group">
											<label>Выберите уровень соревнований:</label>
											<select class="form-control" name="level">
											
													@if ($competition -> level == "Национальный")													
														<option selected value="Национальный">Национальный</option>
														<option value="Областной">Областной</option>
														<option value="Городской">Городской</option>													
													@elseif ($competition -> level == "Областной")														
														<option selected value="Областной">Областной</option>
														<option value="Национальный">Национальный</option>
														<option value="Городской">Городской</option>
													@else
														<option selected value="Городской">Городской</option>
														<option value="Национальный">Национальный</option>
														<option value="Областной">Областной</option>												
													@endif
													
											</select>
										</div>
										
                                        <div class="form-group">
                                            <label>Загрузить положение</label>
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Описание</label>
                                            <textarea name="description" class="form-control" rows="3">{{$competition -> description}}</textarea>
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-default">Сохранить</button>
                                        <!--<button type="reset" class="btn btn-default">Сбросить</button>-->
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
								                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



@endsection