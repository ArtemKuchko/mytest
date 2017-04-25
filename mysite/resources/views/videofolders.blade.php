@extends ('main')

@section ('content')

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Видеогалерея</h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Главная</a>
                </li>
                <li class="active">Видеогалерея</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
		
	@if (count($videofolders)>0)
		
		@foreach ($videofolders as $folder)
        <!-- Blog Post Row -->
        <div class="row">
            <div class="col-md-2 text-center">
                <p><i class="fa fa-film fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div>
            <div class="col-md-6 text-center">
                <a href="{{ url('/videos_'. $folder->id) }}">                    
					<img src="{{'images/videofolders/' . $folder->image_path}}" class="img-thumbnail" alt="" width="400" height="500">
                </a>
            </div>
            <div class="col-md-4">
                <h3><a href="{{ url('/videos_'. $folder->id) }}">{{ $folder -> name }}</a>
                </h3>

                </p>
                <p>{{ str_limit($folder->description, 300) }}</p>
                <a class="btn btn-primary" href="{{ url('/video_'. $folder->id) }}">Просмотр <i class="fa fa-angle-right"></i></a>
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
							<a href="{{ url('/videofolders_'. $previous) }}">&laquo;</a>
						</li>	
					
						<li>
					@endif
							<a href="{{ url('/videofolders') }}">1</a>
						</li>
					@for ($i=2; $i<=$num_pages; $i++)
							
						@if ($page == $i)
							<li class="active">
						@else
							<li>
						@endif
								<a href="{{ url('/videofolders_'. $i) }}">{{ $i }}</a>
							</li>											
					@endfor
					
					
					@if ($page != $num_pages)
						<li>
							<a href="{{ url('/videofolders_'. $next) }}">&raquo;</a>
						</li>
					@endif
					
                    
					
                </ul>
            </div>
        </div>
        <!-- /.row -->
		
	@endif

@endsection