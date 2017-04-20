@extends ('admin.admin_panel')

@section ('input')
	
	
	<script src="js/dropzone.js"></script>
	<link href="css/dropzone.css" rel="stylesheet">
	
	<style>
	.thumbnail{        
    //width: 30px; 
    // or you could use percentage values for responsive layout
     width : 100%;
    height: 150px;
    overflow: auto;
	}

	.thumbnail img{
		// your styles for the image
		width: 100%;
		height: auto;
		display: block;
	}
	
	</style>
	
	<h2>
		<a href="{{url('/admin_photogallery')}}" class="btn btn-default btn-lg">		
		  Назад
		</a>
		
		Фотоальбом "{{$folder->name}}"
	</h2>
	
	<h3>Добавление фотографий</h3>
	
	<form action="{{ url('/file_upload') }}" method="post" class="dropzone" id="my-awesome-dropzone">
	
		{{ csrf_field() }}
		
		<button type="submit" class="btn btn-success">Загрузить</button>		
		
	</form>
	
	<h3> Список фотографий текущего альбома: </h3>
	
	@if (count($photos)>0)
		
		@foreach($photos as $photo)
			
			@if (($loop->index)%4 ==0)
				<div class="row">
			@endif
				
			<div class="col-md-3 img-portfolio">			
				<a href="#" class="thumbnail">
					<img src="{{'images/photos/'. $folder->id.'/'.$photo->image_path}}" alt="">					
				</a>
				<a href="#" class="btn btn-primary">Описание</a>
				<a href="{{ url('/admin_photo_delete_'.$photo->id) }}" class="btn btn-danger">Удалить</a>
			</div>
			
			@if ((($loop->index)+1)%4 ==0)
				</div>
				
				@if(($loop->index) != (($loop->count)-1))
				<hr>
				@endif
			@endif
			
		@endforeach
		
	@else
		<p>В данном альбоме пока еще нет фотографий :-(</p>
		
	@endif
	
	<script>
		
	Dropzone.options.myAwesomeDropzone = { // The camelized version of the ID of the form element

		  // The configuration we've talked about above
		  addRemoveLinks: true,
		  
		  autoProcessQueue: false,
		  uploadMultiple: true,
		  parallelUploads: 100,
		  maxFiles: 100,
		  acceptedFiles: ".jpeg,.jpg,.png,.gif",

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

