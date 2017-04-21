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
		<a href="{{url('/admin_photogallery')}}" class="btn btn-default btn-circle btn-lg">			
			<i class="fa fa-long-arrow-left "></i>
			Назад
		</a>
		
		Фотоальбом "{{$folder->name}}"		
		<a class="btn btn-default" role="button" data-toggle="collapse" href="#mainData" aria-expanded="false" aria-controls="collapseExample">								
			<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
			
		</a>
	</h2>
	
	<div class="row">
		
		<div class="col-lg-12">	
		
		<div class="collapse" id="mainData">
		  <div class="well">
			
				<form class="form-horizontal" action="{{ url('/admin_photofolder_update') }}" method="post" id="contactForm" novalidate>

					{{ csrf_field() }}
					
					<div class="form-group">
						<div class="controls">
							<label for="name" class="col-sm-2 control-label">Название:</label>
							<div class="col-sm-10">							
								<input name="name" value="{{$folder->name}}" required class="form-control" id="name" required data-validation-required-message="Please enter your name.">
							</div>							
						</div>
					</div>
					<div class="form-group">
						<div class="controls">							
							<div class="col-xs-6 col-md-3">
								<label>Обложка фотоальбома:</label>
								<a href="" class="thumbnail">
								  <img src="{{'images/photofolders/'. $folder->image_path}}" alt="">					
								</a>
							</div>
							<input type="file" name="file">
							<br>
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls">
							<label>Описание:</label>
							<textarea rows="3" required name="description" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none">{{$folder->description}}</textarea>
						</div>
					</div>
					<div id="success"></div>
					<!-- For success/fail messages -->
					<button type="submit" class="btn btn-success">Сохранить</button>
				</form>
		  </div>
		</div>
		
		</br>

				<form action="{{ url('/admin_photo_upload') }}" method="post" class="dropzone" id="my-awesome-dropzone">
				
					{{ csrf_field() }}
					
					<button type="submit" class="btn btn-success">Загрузить</button>		
					
				</form>
			
				</br>
				
				@if (count($photos)>0)
					
					@foreach($photos as $photo)
						
						@if (($loop->index)%4 ==0)
							<div class="row">
						@endif
							
						<div class="col-md-3 img-portfolio">			
							<a href="#" class="thumbnail">
								<img src="{{'images/photos/'. $folder->id.'/'.$photo->image_path}}" alt="">					
							</a>
							
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
		  

		</div>
	</div>
		
	
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

