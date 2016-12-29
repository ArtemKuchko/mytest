@extends('layouts.head_coach.app_head_coach')

@section ('content')

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Заявки команд на участие в соревнованиях </h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	
	<!--<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>Команды</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/application_teams') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Перейти</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>Категории</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Перейти</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
	</div>
-->	
<div class="row">
		
	<a href="{{ url('/application_teams') }}"><button type="button" class="btn btn-primary btn-lg btn-block"> Группирование заявок по командам </button></a>
	<br>
	<a href="{{ url('/application_teams') }}"><button type="button" class="btn btn-success btn-lg btn-block"> Группирование заявок по категориям </button></a>
	<br>
</div>
	
	
	
@endsection



