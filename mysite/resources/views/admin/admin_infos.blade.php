@extends ('admin.admin_panel')

@section ('input')
	
    <h2>
		{{ $title }}		
		<a class="btn btn-primary" href="{{ url('/admin_'.$myurl.'_add') }}">
			<i class="fa fa-plus"></i>
			Добавить
		</a>	
	</h2>
    
	</br>
	
    @if (count($temps)>0)

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Изменить</th>
                <th>Удаление</th>
            </tr>

            </thead>
            <tbody>
            @foreach($temps as $temp)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $temp->name }}</td>					
                    <td><a class="btn btn-success" href="{{ url('admin_'.$myurl.'_edit_'. $temp->id) }}" role="button">Просмотр/Редактирование <em class="fa fa-pencil"></a></td>                    
					<td><a class="btn btn-danger" role="button" data-toggle="modal" data-target="{{'#myModal'.$temp->id}}">Удалить <em class="fa fa-trash"></em></a></td>
					
					<!-- Modal window for album deleting -->
					<div class="modal fade" id="{{'myModal'.$temp->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Удаление "{{ $temp->name }}"</h4>
						  </div>
						  <div class="modal-body">
							Вы уверены что хотите удалить?
						  </div>
						  <div class="modal-footer">			
							<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
							<a href="{{ url('/admin_info_delete_'.$temp->id)}}" class="btn btn-primary">Удалить</a>							
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