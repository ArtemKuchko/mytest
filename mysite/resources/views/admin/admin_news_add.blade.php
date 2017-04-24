@extends ('admin.admin_panel')

@section ('input')

	<h2>Добавление новости</h2>
	
	<form action="{{ url('/admin_news_add') }}" method="post" id="contactForm" enctype="multipart/form-data">
	
	{{ csrf_field() }}
	
		<div class="control-group form-group">
			<div class="controls">
				<label>Название:</label>
				<input name="name" required class="form-control" id="name" required data-validation-required-message="Please enter your name.">
				<p class="help-block"></p>
			</div>
		</div>
		<div class="control-group form-group">
			<div class="controls">
				<label>Загрузить фото:</label>
				<input name="myfile" type="file" class="form-control" accept="image/*" id="phone" required>
			</div>
		</div>

		<div class="control-group form-group">
			<div class="controls">
				<label>Описание:</label>
				<textarea rows="10" required name="description" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
			</div>
		</div>
		<div id="success"></div>
		<!-- For success/fail messages -->
		<button type="submit" class="btn btn-success">Добавить</button>
	</form>

@endsection