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
	
	.btn-file {
    position: relative;
    overflow: hidden;
	}
	
	.btn-file input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		min-width: 100%;
		min-height: 100%;
		font-size: 100px;
		text-align: right;
		filter: alpha(opacity=0);
		opacity: 0;
		outline: none;
		background: white;
		cursor: inherit;
		display: block;
	}
	
	</style>
	
	<h2>
		Видеоальбом "{{$folder->name}}"		
		<a class="btn btn-default" role="button" data-toggle="collapse" href="#mainData" aria-expanded="false" aria-controls="collapseExample">								
			<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
			
		</a>
	</h2>
	
	<div class="row">
		
		<div class="col-lg-12">	
		
		<div class="collapse" id="mainData">
		  <div class="well">
			
				<form class="form-horizontal" action="{{ url('/admin_videofolder_update_'.$folder->id) }}" method="post" enctype="multipart/form-data">

					{{ csrf_field() }}
					
					<div class="form-group">
						<div class="controls">
							<label for="name" class="col-sm-2 control-label">Название:</label>
							<div class="col-sm-8">							
								<input name="name" value="{{$folder->name}}" required class="form-control" id="name" required>
							</div>							
						</div>
					</div>
								
					<div class="form-group">
						<div class="controls">
							<label for="description" class="col-sm-2 control-label">Описание:</label>
							<div class="col-sm-8">							
								<textarea rows="3" required name="description" cols="100" class="form-control" id="message" required maxlength="999" style="resize:none">{{$folder->description}}</textarea>
							</div>							
						</div>
					</div>
					
					<div class="form-group">
						<div class="controls">
							<label for="file" class="col-sm-2 control-label">Обложка:</label>
							<div class="col-sm-8">
								<img class="img-responsive img-hover" src="{{'images/videofolders/' . $folder->image_path}}" alt="">
								<span class="btn btn-default btn-file">
									Изменить <i class="fa fa-upload" aria-hidden="true"></i>
									<input type="file" name="file" accept="image/*">									
								</span>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-lg center-block">Сохранить</button>
					</div>
				</form>
		  </div>
		</div>
		
		</br>

				<form action="{{ url('/admin_video_upload') }}" method="post" class="dropzone" id="my-awesome-dropzone">
				
					{{ csrf_field() }}
					
					<button type="submit" class="btn btn-success center-block">Загрузить на сервер</button>
					
				</form>
			
				</br>
				
				@if (count($videos)>0)
					
					@foreach($videos as $video)
						
						@if (($loop->index)%4 ==0)
							<div class="row">
						@endif
							
						<div class="col-md-3 img-portfolio text-center">			
							<!--<a class="thumbnail">-->							
							<video width="200" controls>
							  <source src="{{'videos/'. $folder->id.'/'.$video->video_path}}">	  
							</video>
							<!--</a>-->
							<a href="{{ url('/admin_video_delete_'.$video->id) }}" class="btn btn-danger btn-sm">
								Удалить <em class="fa fa-trash"></em>
							</a>							
						</div>
						
						@if ((($loop->index)+1)%4 ==0)
							</div>
							
							@if(($loop->index) != (($loop->count)-1))
							<hr>
							@endif
						@endif
						
					@endforeach
					
				@else
					<p>В данном альбоме пока еще нет видео :-(</p>
					
				@endif
		  

		</div>
	</div>
		
	
	<script>
		
	Dropzone.options.myAwesomeDropzone = { // The camelized version of the ID of the form element
		  // The configuration we've talked about above
		  maxFilesize: 500,
		  addRemoveLinks: true,		  
		  autoProcessQueue: false,
		  uploadMultiple: true,
		  parallelUploads: 100,
		  maxFiles: 100,		  
		  acceptedFiles: ".mp4,.mkv,.avi",
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

