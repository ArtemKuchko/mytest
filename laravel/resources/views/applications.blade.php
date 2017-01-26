@extends('layouts.head_coach.app_head_coach')

@section ('content')

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
			<a href="{{ route('CompetitionShow', ['id' => session('id') ]) }}"><button type="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-arrow-left"></i>
			</button></a>
			Заявки команд на участие в соревнованиях </h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	

<div class="row">

	<div class="col-lg-6">
		
		<a href="{{ url('/application_teams') }}"><button type="button" class="btn btn-primary btn-lg btn-block">
				Группирование заявок по командам </button></a>
		<br>
		<a href="{{ url('/application_groups') }}"><button type="button" class="btn btn-success btn-lg btn-block">
				Группирование заявок по категориям </button></a>

	</div>
	
</div>
	
	
	
@endsection



