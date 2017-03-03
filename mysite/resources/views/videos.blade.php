@extends ('main')

@section ('head')
	
	@parent

	<style>
		/*
		.video {
			height: 0;
			position: relative;
			padding-bottom: 56.25%; /* Если видео 16/9, то 9/16*100 = 56.25%. Также и с 4/3 - 3/4*100 = 75% */
		}
		.video iframe {
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
		}*/

	</style>

@endsection

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
		
		
		<div class="row">
            <div class="col-md-8 text-center">
				<embed src="videos/1/1.mp4" height="360" width="640">
			</div>
			<div class="col-md-4">
				<h3>{{ $videos[0]-> name }}</h3>
					<p>{{ $folder->description }}</p>
					<h3>Project Details</h3>
					<ul>
						<li>Lorem Ipsum</li>
						<li>Dolor Sit Amet</li>
						<li>Consectetur</li>
						<li>Adipiscing Elit</li>
					</ul>
			</div>
		</div>
		
		<hr>
		
        <!-- Projects Row -->
		<div class="row">
			
			
				@foreach ($videos as $video)
				<div class="col-lg-3">
					<a href="#" class="thumbnail" >
					  <img width="250px" src="{{ 'images/videos/' . $folder->id . '/' . $loop->iteration . '.jpg' }}" alt="...">
					</a>
				</div>
				@endforeach
									
			
		</div>
			
		<!--<div class="col-md-6 img-portfolio">
			<p>Iframe:</p>
			<iframe width="420" height="315" src="videos/1/1.mp4"> </iframe>
		</div>
		
		<div class="col-md-6 img-portfolio">
			<p>Object:</p>
			<object width="420" height="315" data="videos/1/1.mp4"></object>

		</div>
		
		<div class="col-md-6 img-portfolio">
			<p>Embed:</p>
			<embed src="videos/1/1.mp4" autostart="false" height="300" width="500" type="audio/mpeg/">

		</div>-->
        <!-- /.row -->

        

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
		
@endsection
