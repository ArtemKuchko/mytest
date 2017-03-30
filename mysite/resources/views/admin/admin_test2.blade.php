@extends ('admin.admin_panel')

@section ('input')

	<form method="post" action="{{ url('/file_check') }}" enctype="multipart/form-data">
		
		{{ csrf_field()}}

		<input type="file" name="myfile">
		
		<br>
		
		<button type="submit">Отправить</button>

	</form>


@endsection