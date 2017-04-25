@extends ('main')

@section('content')

		<!-- Page Heading/Breadcrumbs -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">{{ $folder->name }}
				</h1>
				<ol class="breadcrumb">
					<li><a href="{{ url('/') }}">Главная</a>
					</li>
					<li><a href="{{ url('/videofolders') }}">Видеогалерея</a>
					</li>
					<li class="active">{{ $folder->name }}
					</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->

		
	@if(count($videos) > 0)

	<div class="row">

	@foreach ($videos->sortByDesc('created_at') as $video)
		<!-- Blog Post -->
		<div class="col-md-6 img-portfolio">			
			<video height="300" width="500" controls>
			  <source src="{{'videos/'. $folder->id.'/'.$video->video_path}}">	  
			</video>
			
			<h3>{{ $video -> name }}</h3>
		
			<hr>
		</div>
		@endforeach
		
		<?php
		
			$start = 0;			
			$range = 2; //кол-во новостей на 1 стр			
			
			for ($i=0, $pages = intval(count($videos)/$range); $i < $pages; $i++)
			{
				$end = $start + $range;
				echo 'Страница номер -'.$i.': </br>';
				for ($j=$start; $j<$end; $j++)
				{
					echo $videos[$j]->name.'</br>';
				}
				$start = $end;
				
			}
		?>
		
		<div class="col-lg-12">
			<ul class="pagination">
				<li>
					<a href="#">«</a>
				</li>
				
				@for ($i=0; $i<$pages; $i++)
				
				<!--<li class="active">-->
				<li>
					<a href="{{ url('/videos_'.$folder->id.'/'.$i)}}">{{$i}}</a>
				</li>
				
				@endfor

				<li>
					<a href="#">»</a>
				</li>
			</ul>
		</div>
		
	@else		
	<p> В данном альбоме пока нет видео :-( </p>
	
	@endif
	</div>

@endsection

		
		
		
		
		