@extends('main')

@section('content')

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ $folder->name }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Главная</a>
                </li>
                <li><a href="{{ url('/photofolders') }}">Фотогалерея</a>
                </li>
                <li class="active">{{ $folder->name }}
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
	
	@if(count($photos) > 0)
    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    {{--<ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        
						@for($i=1; $i<count($photos); $i++)
							<li data-target="#carousel-example-generic" data-slide-to="{{$i}}"></li>
						@endfor
                        
                    </ol>--}}

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        
						<div class="item active">
							<img class="img-responsive" src="{{'images/photos/' . $folder->id. '/' .$photos[0]->image_path}}" alt="">
						</div>
						@for($i=1; $i<count($photos); $i++)
							<div class="item">
								<img class="img-responsive" src="{{'images/photos/' . $folder->id. '/' .$photos[$i]->image_path}}" alt="">
							</div>
						@endfor
						
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
		
        <div class="col-md-4">
            <h3>{{ $folder -> name }}</h3>
            <p>{{ $folder -> description }}</p>

        </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <div class="row">

        <div class="col-lg-12">
            <h3 class="page-header">Фотографии альбома</h3>
        </div>
		
		
		
		@for ($i=1; $i<5; $i++)
			
			<div class="col-sm-3 col-xs-6">
				<a href="#">
					<img class="img-responsive img-hover img-related" width="200px" src="{{'images/photos/' . $folder->id. '/' .$photos[$i]->image_path}}" alt="">
				</a>
			</div>
			
		@endfor
		
		<hr>
				

    </div>
    <!-- /.row -->
	
	@else
		<div class="row">
			<div class="col-lg-12">
				<p>В данном альбоме пока нет фотографий</p>
			</div>
		</div>
	
	
	@endif
@endsection