@extends ('admin.admin_panel')

@section ('input')

	<h2>Новости</h2>
	<p> Добавление, редактирование, удаление новостей</p>
	
	<a class="btn btn-primary" href="{{ url('/admin_news_add') }}">Добавить новость<i class="fa fa-angle-right"></i></a>

	<p></p>
	
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