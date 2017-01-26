@extends('layouts.head_coach.app_head_coach')

@section ('content')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Заявка команды - {{$team -> name}} </h1>
	</div>
	<!-- /.col-lg-12 -->
</div>

<div class="row">
		
	<div class="panel-body">
		<div class="table-responsive">
			
			@if ($chosen_profiles != 0)
				
			<table class="table table-striped">
				<thead>
					<tr>
						<th>№</th>
						<th>Ф.И.О.</th>
						<th>Дата</th>
						<th>Разряд</th>
						<!--<th>Команда</th>-->
						<!--<th>Тренер</th>-->
					</tr>
				</thead>
				<tbody>
				
					
						@foreach ($chosen_profiles as $profile)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $profile[0] -> name }} </td>
								<td>{{ $profile[0] -> birth_date }}</td>
								<td>{{ $profile[0] -> sport_level }}</td>
																
							</tr>
						@endforeach
					
				</tbody>
			</table>
			
			@else
				<p>Команда не подала заявку на участие</p>
			
			@endif
			
		</div>
		<!-- /.table-responsive -->
	</div>
	<!-- /.panel-body -->

</div>
		
	



@endsection