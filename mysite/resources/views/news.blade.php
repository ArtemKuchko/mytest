@extends('main')

@section ('content')

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Новости
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Главная</a>
                    </li>
                    <li class="{{ url('/news') }}">Новости</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-9">
				
				@if (count($news)>0)
					
					@foreach ($news->sortByDesc('created_at') as $one_news)
						
						<!-- Blog Post -->
						<h2>                    
							<a href="{{ url('/news/'. $one_news->id) }}">{{ $one_news -> name }}</a>					
						</h2>

						<p><i class="fa fa-clock-o"></i> Опубликовано {{ $one_news->created_at }}</p>
						<hr>
						<a href="{{ url('/news/'. $one_news->id) }}">				
							<img src="{{ asset('images/news/' . $one_news->image_path) }}" class="img-thumbnail" alt="" width="400">
						</a>
						<hr>
						<p>{{str_limit($one_news->description, 200)}}</p>
						<a class="btn btn-primary" href="{{ url('/news/'. $one_news->id) }}">Подробнее <i class="fa fa-angle-right"></i></a>

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
										<a href="{{ url('/news_'. $previous) }}">&laquo;</a>
									</li>	
								
									<li>
								@endif
										<a href="{{ url('/news') }}">1</a>
									</li>
								@for ($i=2; $i<=$num_pages; $i++)
										
									@if ($page == $i)
										<li class="active">
									@else
										<li>
									@endif
											<a href="{{ url('/news_'. $i) }}">{{ $i }}</a>
										</li>											
									
								@endfor
								
								@if ($page != $num_pages)
									<li>
										<a href="{{ url('/news_'. $next) }}">&raquo;</a>
									</li>
								@endif
																			
							</ul>
						</div>
					</div>
					<!-- /.row -->
			@else
					<p>Новоcтей пока еще нет :-(</p>
			
			@endif
			
            </div>
			
			@include('rightbar')

        </div>
        <!-- /.row -->

@endsection