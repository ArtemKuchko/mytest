@extends('main')

@section('content')

	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<div class="col-lg-8">
			<h1 class="page-header">{{$title}}
				
			</h1>
			<ol class="breadcrumb">
				<li><a href="#">Главная</a>
				</li>
				<li class="active">{{$title}}</li>
			</ol>
		</div>
	</div>
	<!-- /.row -->
		
		
	<div class="row">
		<div class="col-md-8">
	
		@if (count($temps) > 0)
			
			@foreach ($temps as $temp)
		
				<h2>
					<a href="#">{{ $temp-> name}}</a>
				</h2>
				
				<p><i class="fa fa-clock-o"></i> Опубликовано {{ $temp ->created_at }}</p>
				<hr>
				<a href="blog-post.html">
					<img class="img-responsive img-hover" src="http://placehold.it/900x300" alt="">
				</a>
				<hr>
				<p>{{ str_limit($temp->description, 100) }}</p>
				<a class="btn btn-primary" href="#">Подробнее <i class="fa fa-angle-right"></i></a>
				
				<br>
				
			@endforeach
		
		@else
			<p>Событий пока еще нет :-( </p>
		@endif
		</div>
	
	</div>


@endsection