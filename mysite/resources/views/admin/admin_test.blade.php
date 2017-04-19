@extends ('admin.admin_panel')

@section ('input')
	
	<h2>Test for multiple file upload</h2>
	
	<form action="{{ url('/admin_test') }}" method="post" enctype="multipart/form-data">
	
		{{ csrf_field() }}
		
		<input name="file[]" type="file" multiple />
		<br>
		<button type="submit">send</button>

	</form>
	
@endsection

