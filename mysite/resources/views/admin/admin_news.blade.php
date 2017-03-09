@extends ('admin.admin_panel')

@section ('input')

	<h2>Новости</h2>
	<p> Добавление, редактирование, удаление новостей</p>

	<form name="sentMessage" id="contactForm" novalidate>
		<div class="control-group form-group">
			<div class="controls">
				<label>Название:</label>
				<input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
				<p class="help-block"></p>
			</div>
		</div>
		<div class="control-group form-group">
			<div class="controls">
				<label>Загрузить фото:</label>
				<input type="file" class="form-control" id="phone" required>
			</div>
		</div>

		<div class="control-group form-group">
			<div class="controls">
				<label>Описание:</label>
				<textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
			</div>
		</div>
		<div id="success"></div>
		<!-- For success/fail messages -->
		<button type="submit" class="btn btn-primary">Send Message</button>
	</form>
				
@endsection