@extends ('admin.admin_panel')

@section ('input')

	<h2>
		Новости
		<a class="btn btn-primary" href="{{ url('/admin_news_add') }}">
			<i class="fa fa-plus"></i>
			Добавить новость	
		</a>
	</h2>
	
	</br>
	
	@if (count($news)>0)
		
		<table class="table table-bordered table-striped"> 
			<thead> 
				<tr> 
					<th>#</th> 
					<th>Название</th>
					<th>Просмотр</th>
					<th>Редактирование</th>
					<th>Удаление</th>
				</tr>
				
			</thead> 
			<tbody>
				@foreach($news as $one)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{ $one->name }}</td>
					<td><a class="btn btn-success" href="#" role="button">Просмотр</a></td>
					<td><a class="btn btn-default" href="#" role="button">Редактировать</a></td>
					<td><a class="btn btn-danger" href="#" role="button">Удалить</a></td>
				</tr>
				@endforeach
				
			</tbody> 
		</table>
		
	@endif
				
@endsection