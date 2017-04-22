@extends ('main')

@section ('carousel')

	<!-- Header Carousel -->
	<header id="myCarousel" class="carousel slide">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		
			@foreach ($last_news as $news)
				
				@if ($loop->index == 0)
					<li data-target="#myCarousel" data-slide-to="{{ $loop->index }}" class="active"></li>
				@else
					<li data-target="#myCarousel" data-slide-to="{{ $loop->index }}"></li>
				@endif
			
			
			@endforeach
			
			<!--<li data-target="#myCarousel" data-slide-to="2"></li>-->
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			
			@foreach ($last_news as $news)
				
				@if ($loop->index == 0)
					<div class="item active">
				@else
					<div class="item">
				@endif
					<img class="img-responsive center-block" src="{{ 'images/news/'. $news->image_path }}" alt="...">
					<!--<div class="fill" style="background-image:url(  );"></div>-->
					<div class="carousel-caption">
						<h2>{{ $news->name }}</h2>
					</div>
				</div>
			@endforeach
			
		</div>

	</header>

@endsection

@section ('info')

	<!-- Marketing Icons Section -->
    <div class="row">
		
		</br></br>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>
                        <i class="fa fa-fw fa-calendar"></i> Ближайшее мероприятие
                    </h4>
                </div>
                <div class="panel-body fixed-panel">
                    <p>{{ str_limit($last_i['event']->name, 100) }}</p>
                    <a href="{{ url('/events') }}" class="btn btn-default">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-gift"></i> Поздравляем! </h4>
                </div>
                <div class="panel-body fixed-panel">
                    <p>{{ str_limit($last_i['congratulation']->name, 100) }}</p>
                    <a href="{{ url('/congrats') }}" class="btn btn-default">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-info"></i> Информация </h4>
                </div>
                <div class="panel-body fixed-panel">
                    <p>{{ str_limit($last_i['info']->name, 100)}}</p>
                    <a href="{{ url('/info') }}" class="btn btn-default">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection
