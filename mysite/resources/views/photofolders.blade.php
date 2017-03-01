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
		
	@if (count($photofolders)>0)
		
		@foreach ($photofolders as $folder)
        <!-- Blog Post Row -->
        <div class="row">
            <div class="col-md-2 text-center">
                <p><i class="fa fa-camera fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div>
            <div class="col-md-6">
                <a href="{{ url('/photos_'. $folder->id) }}">
                    <img class="img-responsive img-hover" height="300px" width="500px"  src="{{'images/photofolders/' . $folder->image_path}}" alt="">
                </a>
            </div>
            <div class="col-md-4">
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
		
        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
				
                    
					
					@if ($page == 1)
					
						<li class="active">
					@else
						<li>
							<a href="{{ url('/photofolders_'. $previous) }}">&laquo;</a>
						</li>	
					
						<li>
					@endif
							<a href="{{ url('/photofolders') }}">1</a>
						</li>
					@for ($i=2; $i<=$num_pages; $i++)
							
						@if ($page == $i)
							<li class="active">
						@else
							<li>
						@endif
								<a href="{{ url('/photofolders_'. $i) }}">{{ $i }}</a>
							</li>											
					@endfor
					
					
					@if ($page != $num_pages)
						<li>
							<a href="{{ url('/photofolders_'. $next) }}">&raquo;</a>
						</li>
					@endif
					
                    
					
                </ul>
            </div>
        </div>
        <!-- /.row -->
		
	@endif

@endsection