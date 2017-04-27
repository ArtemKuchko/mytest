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

		
	@if(count($folder->videos) > 0)

	<div class="row">

	@foreach ($folder->videos->sortByDesc('created_at') as $video)
		<!-- Blog Post -->
		<div class="col-md-6 img-portfolio">			
			<video height="300" width="500" controls>
			  <source src="{{ asset('videos/'. $folder->id.'/'.$video->video_path) }}">	  
			</video>
			
			<h3>{{ $video -> name }}</h3>
		
		</div>
		@endforeach
		
	@else		
	<p> В данном альбоме пока нет видео :-( </p>
	
	@endif
	</div>

@endsection

		
		
		
		
		