@extends('main')

@section('content')

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ $one_info->name }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Главная</a>
                </li>
				
                <li>				
					<a href="{{ url('/'.$myurl) }}">{{$title}}</a>               				
				</li>
                
				<li class="active">{{ $one_info->name }}</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-12">

            <!-- Date/Time -->
            <p><i class="fa fa-clock-o"></i> Опубликовано {{$one_info->created_at}}</p>
			
			</br>

            <!-- Preview Image -->            
			<img class="img-responsive center-block" src="{{ asset('images/infos/' . $one_info->image_path) }}" alt="">
			</br>

            <!-- Post Content -->
            {{ $one_info->description }}

        </div>

    </div>
    <!-- /.row -->

@endsection