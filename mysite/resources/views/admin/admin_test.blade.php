@extends ('admin.admin_panel')

@section ('input')

	<form action="{{url('/test_upload_one')}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="file" name="myfile">
		<button type="submit">отправить</button>
	</form>
	
@endsection

