@extends('layouts.head_coach.app_head_coach')

@section ('content')

<div class="row">
                <div class="col-lg-12">

                    <h1 class="page-header">
						<a href="{{ url('/applications') }}"><button type="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-arrow-left"></i>
						</button></a>
						Заявки по командам </h1>
                </div>
                <!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-6">
		
		<form action="{{ url('/application_teams') }}" method="post">
			
			{{ csrf_field() }}
			
			<label>Выберите команду:</label>
			<select name="team_id" aria-controls="dataTables-example" class="form-control input-sm">
				
				@foreach ($teams as $team)

					@if (($team -> id) == ($team_t -> id))
						{
							<option selected value="{{ $team -> id }}">{{ $team -> name}}</option>
						}
					@else
						{
							<option	value="{{ $team -> id }}">{{ $team -> name}}</option>
						}
					@endif

				@endforeach
			</select>
			
			<br>
			
			<button type="submit" class="btn btn-success"><i class="fa fa-search"></i> найти участников </button>
			
			
		</form>
	
	
	</div>
	
</div>

<br>
<div class="row">
		
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped">
			
			@if ($chosen_profiles != 0)
				
			<p>Команда - {{ $team_t -> name}}</p>
		
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
									<td>{{ $profile[0] -> surname ." ". $profile[0] -> name ." ". $profile[0] -> last_name}} </td>
									<td>{{ $profile[0] -> birth_date }}</td>
									
									@if ($profile[0] -> sport_level == "CMS")
										<td>КМС</td>
									@elseif ($profile[0] -> sport_level == "MS")
										<td>МС</td>
									@elseif($profile[0] -> sport_level == "IMS")
										<td>МСМК</td>
									@elseif ($profile[0] -> sport_level == "HMS")
										<td>ЗМС</td>
									@else
										<td>{{$profile[0] -> sport_level}}</td>
									@endif

								</tr>
							@endforeach
						
					</tbody>
			</table>
	
			
	
			@endif
				
		</div>
		<!-- /.table-responsive -->
	</div>
	<!-- /.panel-body -->

</div>
		
	



@endsection