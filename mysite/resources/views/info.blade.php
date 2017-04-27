@extends('main')

@section('content')

	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">{{$title}}
				
			</h1>
			<ol class="breadcrumb">
				<li><a href="{{url('/')}}">Главная</a>
				</li>
				<li class="active">{{$title}}</li>
			</ol>
		</div>
	</div>
	<!-- /.row -->
				
	<div class="row">
		<div class="col-md-9">
	
		@if (count($temps) > 0)
			
			@foreach ($temps->sortBydesc('created_at') as $temp)
		
				<h2>
					<a href="{{ url('/'.$myurl.'/'.$temp->id) }}">{{ $temp-> name}}</a>
				</h2>
				
				<p><i class="fa fa-clock-o"></i> Опубликовано {{ $temp ->created_at }}</p>
				<hr>
				<a href="{{ url('/'.$myurl.'/'.$temp->id) }}">
					<img class="img-responsive img-hover" src="{{asset('images/infos/'. $temp->image_path)}}" alt="">
				</a>
				<hr>
				<p>{{ str_limit($temp->description, 100) }}</p>
				<a class="btn btn-primary" href="{{ url('/'.$myurl.'/'.$temp->id) }}">Подробнее <i class="fa fa-angle-right"></i></a>
				
				<hr>
				
			@endforeach
			
			<!-- Pagination -->
				<?php
					$previous = $page-1;		
					$next = $page+1;
					$num_pages = intval($amount/$one_page+0.5);				
				?>
			
			<div class="row text-center">
				<div class="col-lg-12">
					<ul class="pagination">
					
						@if ($page == 1)							
							<li class="active">
						@else
							<li>
								<a href="{{ url('/'.$myurl.'s_'. $previous) }}">&laquo;</a>
							</li>	
						
							<li>
						@endif
								<a href="{{ url('/'.$myurl.'s') }}">1</a>
							</li>
						@for ($i=2; $i<=$num_pages; $i++)
								
							@if ($page == $i)
								<li class="active">
							@else
								<li>
							@endif
									<a href="{{ url('/'.$myurl.'s_'. $i) }}">{{ $i }}</a>
								</li>											
							
						@endfor
						
						@if ($page != $num_pages)
							<li>
								<a href="{{ url('/'.$myurl.'s_'. $next) }}">&raquo;</a>
							</li>
						@endif
																	
					</ul>
				</div>
			</div>
				<!-- /.row -->
			
			
		@else
			<p>Событий пока еще нет :-( </p>
		@endif
		</div>
		
		@include('rightbar')

	</div>

@endsection