@extends ('admin.admin_panel')

@section ('input')

    <h2>Фотогалерея</h2>
    <p> Добавление, редактирование, удаление фотоальбомов</p>

    <a class="btn btn-primary" href="{{ url('/admin_photofolder_add') }}">Добавить фотоальбом<i class="fa fa-angle-right"></i></a>

    <p></p>

    @if (count($photofolders)>0)

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
				<th>Фотографии</th>
                <th>Редактировать</th>
                <th>Удаление</th>
            </tr>

            </thead>
            <tbody>
            @foreach($photofolders as $folder)
                <tr>
                    <td>{{ $loop->iteration }}</td>
					
					<td>{{ $folder->name }}</td>
					<td><a class="btn btn-success" href="{{ url('/admin_photos_add_'.$folder->id) }}" role="button">Фотографии</a></td>
                    <td><a class="btn btn-default" href="{{ url('admin_photofolder_edit_'. $folder->id) }}" role="button">Редактирование</a></td>
                    <td><a class="btn btn-danger" href="#" role="button">Удалить</a></td>
                </tr>
            @endforeach

            </tbody>
        </table>

    @endif

@endsection