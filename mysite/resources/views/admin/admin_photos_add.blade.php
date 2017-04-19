@extends ('admin.admin_panel')

@section ('input')
	
	
	<script src="js/dropzone.js"></script>
	<link href="css/dropzone.css" rel="stylesheet">

	<h2>Фотоальбом "{{$folder->name}}"</h2>
	
	<h3>Добавление фотографий</h3>
	
	<form action="{{ url('/file_upload') }}" method="post" class="dropzone" id="my-awesome-dropzone">
	
		{{ csrf_field() }}
		
		<button type="submit">Загрузить</button>
		
	</form>
	
	<h3> Список фотографий текущего альбома: </h3>
	
	@if (count($photos)>0)
		
		@foreach($photos as $photo)
			
			<img src="{{storage_path('app/myfiles/photos/'). $folder->id.'/'.$photo->image_path}}" alt="">
			{{--
			@if (($loop->index)%4 ==0)
				<div class="row">
			@endif
				
			<div class="col-md-3 img-portfolio">
				<a href="#" class="thumbnail">
					<img src="{{storage_path('app/myfiles/photos/'). $folder->id.'/'.$photo->image_path}}" alt="">					
				</a>
			</div>
			
			@if ((($loop->index)+1)%4 ==0)
				</div>
				<hr>
			@endif
			--}}
			
		@endforeach
		
	@else
		<p>В данном альбоме пока еще нет фотографий :-(</p>
		
	@endif
	
	
	<!--<div class="row">
		<div class="col-md-3 img-portfolio">
			<a href="portfolio-item.html">
				<img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
			</a>
		</div>
		<div class="col-md-3 img-portfolio">
			<a href="portfolio-item.html">
				<img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
			</a>
		</div>
		<div class="col-md-3 img-portfolio">
			<a href="portfolio-item.html">
				<img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
			</a>
		</div>
		<div class="col-md-3 img-portfolio">
			<a href="portfolio-item.html">
				<img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
			</a>
		</div>

	</div>
		
	<hr>
	
	<div class="row">
		<div class="col-md-3 img-portfolio">
			<a href="portfolio-item.html">
				<img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
			</a>
		</div>
		<div class="col-md-3 img-portfolio">
			<a href="portfolio-item.html">
				<img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
			</a>
		</div>
		<div class="col-md-3 img-portfolio">
			<a href="portfolio-item.html">
				<img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
			</a>
		</div>
		<div class="col-md-3 img-portfolio">
			<a href="portfolio-item.html">
				<img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
			</a>
		</div>
	</div>-->
	
	<script>
		
	Dropzone.options.myAwesomeDropzone = { // The camelized version of the ID of the form element

		  // The configuration we've talked about above
		  addRemoveLinks: true,
		  
		  autoProcessQueue: false,
		  uploadMultiple: true,
		  parallelUploads: 100,
		  maxFiles: 100,

		  // The setting up of the dropzone
		  init: function() {
			var myDropzone = this;

			// First change the button to actually tell Dropzone to process the queue.
			this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
			  // Make sure that the form isn't actually being sent.
			  e.preventDefault();
			  e.stopPropagation();
			  myDropzone.processQueue();
			});

			// Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
			// of the sending event because uploadMultiple is set to true.
			this.on("sendingmultiple", function() {
			  // Gets triggered when the form is actually being sent.
			  // Hide the success button or the complete form.
			});
			this.on("successmultiple", function(files, response) {
			  // Gets triggered when the files have successfully been sent.
			  // Redirect user or notify of success.
			  //location.href = 'http://stackoverflow.com';
			  location.reload();
			});
			this.on("errormultiple", function(files, response) {
			  // Gets triggered when there was an error sending the files.
			  // Maybe show form again, and notify user of error
			});
		
		}
	}
		
	</script>


@endsection

