@extends('layouts.head_coach.app_head_coach')

@section ('content')

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Добавление новых соревнований</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Заполните основные данные о новых соревнованиях:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="{{url('add_competition')}}" method="post" role="form">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label>Название соревнований:</label>
                                            <input class="form-control" name="name" placeholder="Например, Чемпионат Украины по ушу-саньда">
                                        </div>

                                        <div class="form-group">
                                            <label>Место проведения соревнований:</label>
                                            <input class="form-control" name="place" placeholder="Например, Винница">
                                        </div>

										<div class="form-group">
                                            <label>Дата начала соревнований:</label>
                                            <input type="date" name="date_start" class="form-control" placeholder="">
                                        </div>
										<div class="form-group">
                                            <label>Дата окончания соревнований:</label>
                                            <input type="date" name="date_end" class="form-control" placeholder="">
                                        </div>
                                        
										<div class="form-group">
                                            <label>Срок подачи заявок:</label>
                                            <input type="date" name="dead_line" class="form-control" placeholder="">
                                        </div>
																				
										<div class="form-group">
											<label>Выберите уровень соревнований:</label>
											<select class="form-control" name="level">
													<option value="Национальный">Национальный</option>
													<option value="Областной">Областной</option>
													<option value="Городской">Городской</option>
											</select>
										</div>
										
                                        <div class="form-group">
                                            <label>Загрузить положение</label>
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Описание</label>
                                            <textarea name="description" class="form-control" rows="3"></textarea>
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-default">Добавить</button>
                                        
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