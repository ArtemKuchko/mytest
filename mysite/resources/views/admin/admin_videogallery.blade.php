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
					<td><a class="btn btn-success" href="{{ url('/admin_videos_add_'.$folder->id) }}" role="button">Видео / Редактирование <em class="fa fa-pencil"></a></td>					
                    <td><a class="btn btn-danger" role="button" data-toggle="modal" data-target="{{'#myModal'.$folder->id}}">Удалить <em class="fa fa-trash"></em></a></td>
					
					<!-- Modal window for album deleting -->
					<div class="modal fade" id="{{'myModal'.$folder->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Удаление видеоальбома "{{ $folder->name }}"</h4>
						  </div>
						  <div class="modal-body">
							Вы уверены что хотите удалить видеоальбом?
						  </div>
						  <div class="modal-footer">			
							<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
							<a href="{{ url('/admin_videofolder_delete_'.$folder->id)}}" class="btn btn-primary">Удалить</a>							
						  </div>
						</div>
					  </div>
					</div>
					
                </tr>
            @endforeach

            </tbody>
        </table>

    @endif

@endsection