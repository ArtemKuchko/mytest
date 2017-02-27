@extends ('main')

@section ('content')


    <!-- Page Content -->
    <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Фотогалерея</h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Главная</a>
                </li>
                <li class="active">Фотогалерея</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

        
		{{--@foreach ($photofolders as $folder)
		<!-- Project One -->
        
		<div class="row">			
			<div class="col-md-7">
				<a href="portfolio-item.html">
					<img class="img-responsive img-hover" width="500px" height="200px" src="{{'images/photofolders/' . $folder->image_path}}" alt="">
				</a>
			</div>
			<div class="col-md-5">
				<h3>{{ $folder -> name }}</h3>
				<!--<h4>Subheading</h4>-->
				<p>{{ str_limit($folder->description, 300) }}</p>
				<a class="btn btn-primary" href="{{ url('/photos_'. $folder->id) }}">Просмотр</i></a>
			</div>       
		</div>
        <!-- /.row -->
		
		<hr>
		
		@endforeach --}}
		
		@foreach ($photofolders as $folder)
        <!-- Blog Post Row -->
        <div class="row">
            <div class="col-md-1 text-center">
                <p><i class="fa fa-camera fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div>
            <div class="col-md-5">
                <a href="{{ url('/photos_'. $folder->id) }}">
                    <img class="img-responsive img-hover" height="300px" width="500px"  src="{{'images/photofolders/' . $folder->image_path}}" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3><a href="{{ url('/photos_'. $folder->id) }}">{{ $folder -> name }}</a>
                </h3>

                </p>
                <p>{{ str_limit($folder->description, 300) }}</p>
                <a class="btn btn-primary" href="{{ url('/photos_'. $folder->id) }}">Просмотр <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- /.row -->
		<hr>
		
		@endforeach
		

        <hr>

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