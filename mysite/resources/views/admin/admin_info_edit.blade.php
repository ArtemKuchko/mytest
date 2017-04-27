@extends ('admin.admin_panel')

@section ('input')

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

	<h2> Редактировать "{{$info->name}}"</h2>	
	
	<form action="{{ url('/admin_info_update_'.$info->id) }}" method="post" enctype="multipart/form-data">
	
		{{ csrf_field() }}
		
		<div class="form-group">
			<div class="controls">
				<label for="name" class="control-label">Название:</label>									
				<input name="name" value="{{$info->name}}" required class="form-control" id="name" required>											
			</div>
		</div>
		
		<div class="form-group">
			<div class="controls">
				<label for="file" class="control-label">Обложка:</label>				
				<img class="img-responsive img-hover" src="{{'images/infos/' . $info->image_path}}" alt="">
				<span class="btn btn-default btn-file">
				Изменить <i class="fa fa-upload" aria-hidden="true"></i>
				<input type="file" name="file">									
				</span>				
			</div>
		</div>
		
		<div class="form-group">
			<div class="controls">
				<label for="description" class="control-label">Описание:</label>							
				<textarea rows="10" required name="description" cols="100" class="form-control" id="message" required maxlength="9999" style="resize:none">{{$info->description}}</textarea>				
			</div>
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-success">Сохранить</button>
		</div>	
		
	</form>	

@endsection