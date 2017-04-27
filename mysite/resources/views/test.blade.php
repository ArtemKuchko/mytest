@extends ('main')

@section ('head')
	
	@parent	
	<style>
		.hide-bullets {
			list-style:none;
			margin-left: -40px;
			margin-top:20px;
		}

		.carousel-inner>.item>img, .carousel-inner>.item>a>img {
			width: 100%;
		}
		
		.thumbnail{
		
		width : 100%;
		//height: 100px;
		overflow: auto;
		}

		.thumbnail img{
		// your styles for the image
		width: 100%;
		height: auto;
		display: block;
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
					<li><a href="{{ url('/videofolders') }}">Видеогалерея</a>
					</li>
					<li class="active">{{ $folder->name }}
					</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->
		
	@if(count($folder->videos) > 0)
		<div id="main_area">
			<!-- Slider -->
			<div class="row">
				
				<!--<button class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>-->
				<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">

							 <!-- Carousel items -->
							<div class="carousel-inner">
								
								@for($i=0; $i < count($folder->videos); $i++)
									
									@if ($i == 0)
										<div class="active item" data-slide-number="{{ $i }}">
									@else
										<div class="item" data-slide-number="{{ $i }}">
									@endif
										
										<video width="320" height="240" controls>
											<source="{{asset('videos/' . $folder->id. '/' .$folder->videos[$i]->video_path)}}">
										</video>
									</div>
							
								@endfor

								</div>

								<!-- Controls -->
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
				
				
				<div class="col-lg-12">	
					
					@foreach($folder->videos as $video)
						
						@if (($loop->index)%4 ==0)
							<div class="row">
						@endif
							
						<div class="col-md-3 img-portfolio">			
							<!--<a href="#" id="{{'carousel-selector-'.$loop->index}}" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg">-->								
								{{--<video controls id="{{'carousel-selector-'.$loop->index}}" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg">
									<source="{{asset('videos/' . $folder->id. '/' .$video->video_path)}}">
								</video>--}}
								<iframe id="{{'carousel-selector-'.$loop->index}}" class="thumbnail" data-toggle="modal" data-target=".bs-example-modal-lg" src="//www.youtube.com/embed/YE7VzlLtp-4" frameborder="0" allowfullscreen></iframe>
							<!--</a>-->

						</div>
						
						@if ((($loop->index)+1)%4 ==0)
							</div>
							
						@endif
						
					@endforeach
	
				</div>
		</div>
	@else
		
	<p> В данном альбоме пока нет видео :-( </p>
	
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
		
		
		
		
		