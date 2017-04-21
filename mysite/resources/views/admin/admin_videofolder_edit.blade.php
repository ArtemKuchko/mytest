@extends ('admin.admin_panel')

@section ('input')

    <h2>Редактирование видеоальбома</h2>

    <form action="{{ url('/admin_videofolder_update') }}" method="post" id="contactForm" novalidate>

        {{ csrf_field() }}

        <div class="control-group form-group">
            <div class="controls">
                <label>Название:</label>
                <input name="name" value="{{$folder->name}}" required class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
            </div>
        </div>
        <div class="control-group form-group">
            <div class="controls">
                <label>Обложка видеоальбома:</label>
                <input type="file" class="form-control">
            </div>
        </div>

        <div class="control-group form-group">
            <div class="controls">
                <label>Описание:</label>
                <textarea rows="10" required name="description" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none">{{$folder->description}}</textarea>
            </div>
        </div>
        <div id="success"></div>
        <!-- For success/fail messages -->
        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>

@endsection