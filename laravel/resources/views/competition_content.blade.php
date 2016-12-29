@extends('layouts.head_coach.app_head_coach')

@section ('content')

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{ $competition->name .' (г. '. $competition->place.')' }} </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Основные данные
                        </div>
                        <div class="panel-body">
                            <p>Просмотр и редактирование основных данных</p>
							
                        </div>
                        <a href="{{url('/competition')}}"><div class="panel-footer">
                            Подробнее <i class="fa fa-long-arrow-right"></i>
                        </div></a>
                    </div>
                </div>
				
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Весовые категории
                        </div>
                        <div class="panel-body">
                            <p>Добавление весовых категорий.</p>
                        </div>
                        <a href="{{url('/groups')}}"><div class="panel-footer">
                            Подробнее <i class="fa fa-long-arrow-right"></i>
                        </div></a>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Заявки
                        </div>
                        <div class="panel-body">
                            <p>Заявки участников</p>
                        </div>
                        <a href="{{url('/applications')}}"><div class="panel-footer">
                            Подробнее <i class="fa fa-long-arrow-right"></i>
                        </div></a>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Взвешивание
                        </div>
                        <div class="panel-body">
                            <p>Взвешивание участников соревнований</p>
                        </div>
                        <a href="#"><div class="panel-footer">
                            Подробнее <i class="fa fa-long-arrow-right"></i>
                        </div></a>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            Жеребьевка
                        </div>
                        <div class="panel-body">
                            <p>Жеребьевка и сетка участников</p>
                        </div>
                        <a href="#"><div class="panel-footer">
                            Подробнее <i class="fa fa-long-arrow-right"></i>
                        </div></a>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            Списки боев
                        </div>
                        <div class="panel-body">
                            <p>Списки боев всех дней</p>
                        </div>
                        <a href="#"><div class="panel-footer">
                            Подробнее <i class="fa fa-long-arrow-right"></i>
                        </div></a>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Командные места
                        </div>
                        <div class="panel-body">
                            <p>Статистика для определения командных мест</p>
                        </div>
                        <a href="#"><div class="panel-footer">
                            Подробнее <i class="fa fa-long-arrow-right"></i>
                        </div></a>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Статистика
                        </div>
                        <div class="panel-body">
                            <p>Прочие статистические данные</p>
                        </div>
                        <a href="#"><div class="panel-footer">
                            Подробнее <i class="fa fa-long-arrow-right"></i>
                        </div></a>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Запасная панель
                        </div>
                        <div class="panel-body">
                            <p>Запасная панель</p>
                        </div>
                        <a href="#"><div class="panel-footer">
                            Подробнее <i class="fa fa-long-arrow-right"></i>
                        </div></a>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
            </div>
            <!-- /.row -->
           
@endsection