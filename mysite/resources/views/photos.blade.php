@extends ('main')

@section ('head')
	
	@parent
	
	<style>
		.hide-bullets {
			list-style:none;
			margin-left: -40px;
			margin-top:20px;
		}

		.thumbnail {
			padding: 0;
		}

		.carousel-inner>.item>img, .carousel-inner>.item>a>img {
			width: 100%;
		}
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
					<li><a href="{{ url('/photofolders') }}">Фотогалерея</a>
					</li>
					<li class="active">{{ $folder->name }}
					</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->
		
	@if(count($photos) > 0)
		<div id="main_area">
			<!-- Slider -->
			<div class="row">
				<div class="col-sm-6" id="slider-thumbs">
					<!-- Bottom switcher of slider -->
					<ul class="hide-bullets">
						
						@foreach ($photos as $photo)
							<li class="col-sm-3">
								<a class="thumbnail" id="{{ 'carousel-selector-'. $loop->index}}"><img src="{{'images/photos/' . $folder->id. '/' .$photos[$loop->index]->image_path}}"></a>
							</li>
						@endforeach

					</ul>
				</div>
				<div class="col-sm-6">
					<div class="col-xs-12" id="slider">
						<!-- Top part of the slider -->
						<div class="row">
							<div class="col-sm-12" id="carousel-bounding-box">
								<div class="carousel slide" id="myCarousel">
									<!-- Carousel items -->
									<div class="carousel-inner">
										
											
										@for($i=0; $i < count($photos); $i++)
											
											@if ($i == 0)
												<div class="active item" data-slide-number="{{ $i }}">
											@else
												<div class="item" data-slide-number="{{ $i }}">
											@endif
												
												<img src="{{'images/photos/' . $folder->id. '/' .$photos[$i]->image_path}}">
											</div>
									
										@endfor
		
											
									</div>
									<!-- Carousel nav -->
									<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
									</a>
									<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/Slider-->
			</div>

		</div>
	@else
		<p> В данном альбоме пока нет фотографий :-( </p>
	
	@endif

@endsection
		
@section ('scripts')

	@parent
	
	<script>
		  jQuery(document).ready(function($) {
		 
				$('#myCarousel').carousel({
						interval: 5000
				});
		 
				//Handles the carousel thumbnails
				$('[id^=carousel-selector-]').click(function () {
				var id_selector = $(this).attr("id");
				try {
					var id = /-(\d+)$/.exec(id_selector)[1];
					console.log(id_selector, id);
					jQuery('#myCarousel').carousel(parseInt(id));
				} catch (e) {
					console.log('Regex failed!', e);
				}
			});
				// When the carousel slides, auto update the text
				$('#myCarousel').on('slid.bs.carousel', function (e) {
						 var id = $('.item.active').data('slide-number');
						$('#carousel-text').html($('#slide-content-'+id).html());
				});
		});		
	</script>

@endsection
		
		
		
		
		