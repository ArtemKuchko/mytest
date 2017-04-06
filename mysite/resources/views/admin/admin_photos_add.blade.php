@extends ('admin.admin_panel')

@section ('input')
	
	
	<script src="js/dropzone.js"></script>
	<link href="css/dropzone.css" rel="stylesheet">

	<h2>Добавление фотографий в альбом $album</h2>
	
	<a href="{{ url('/test_remove') }}">Удалить</a>
	
	<form action="{{ url('/file_upload') }}" method="post" class="dropzone" id="my-awesome-dropzone">
	
		{{ csrf_field() }}

		<!--<input name="file" type="file" /> это скрытый инпут который не надо отображать на странице-->

	</form>

@endsection

