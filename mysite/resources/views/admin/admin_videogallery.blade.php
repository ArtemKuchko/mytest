@extends('admin.admin_panel')

@section ('input')

    <h2>
		Видеогалерея
		<a class="btn btn-primary" href="{{ url('/admin_videofolder_add') }}">
			<i class="fa fa-plus"></i>
			Добавить видеоальбом		
		</a>	
	</h2>
    
	</br>
    
	@if (count($videofolders)>0)

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
				<th>Видео</th>                
                <th>Удаление</th>
            </tr>

            </thead>
            <tbody>
            @foreach($videofolders as $folder)
                <tr>
                    <td>{{ $loop->iteration }}</td>
					
					<td>{{ $folder->name }}</td>
					<td><a class="btn btn-success" href="{{ url('/admin_videos_add_'.$folder->id) }}" role="button">Видео/Редактирование</a></td>
					{{--<td><a class="btn btn-default" href="{{ url('admin_videofolder_edit_'. $folder->id) }}" role="button">Редактирование</a></td>--}}
                    <td><a class="btn btn-danger" href="#" role="button">Удалить</a></td>
                </tr>
            @endforeach

            </tbody>
        </table>

    @endif

@endsection