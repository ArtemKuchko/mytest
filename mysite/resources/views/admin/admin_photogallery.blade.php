@extends ('admin.admin_panel')

@section ('input')

    <h2>
		Фотогалерея
		<a class="btn btn-primary" href="{{ url('/admin_photofolder_add') }}">
			<i class="fa fa-plus"></i>		
			Добавить фотоальбом
		</a>
	</h2>
    
    </br>
	
    @if (count($photofolders)>0)

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
				
                <th>Редактировать</th>
                <th>Удаление</th>
            </tr>

            </thead>
            <tbody>
            @foreach($photofolders as $folder)
                <tr>
                    <td>{{ $loop->iteration }}</td>
					
					<td>{{ $folder->name }}</td>
					<td><a class="btn btn-success" href="{{ url('/admin_photos_add_'.$folder->id) }}" role="button">Фотографии/Редактирование <em class="fa fa-pencil"></a></td>				
                    <td><a class="btn btn-danger" href="#" role="button">Удалить <em class="fa fa-trash"></em></a></td>
                </tr>
            @endforeach

            </tbody>
        </table>

    @endif

@endsection