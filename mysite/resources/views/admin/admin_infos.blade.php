@extends ('admin.admin_panel')

@section ('input')

    <h2>{{ $title }}</h2>
    <p> Добавление, редактирование, удаление</p>
	
    <a class="btn btn-primary" href="{{ url('/admin_'.$folder.'_add') }}">Добавить<i class="fa fa-angle-right"></i></a>
										<!--('/admin_congrat_add')
										('/admin_info_add')-->
										

    <p></p>

    @if (count($temps)>0)

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
            @foreach($temps as $temp)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $temp->name }}</td>
                    <td><a class="btn btn-success" href="{{ url('admin_info_edit_'. $temp->id) }}" role="button">Редактирование</a></td>
                    <td><a class="btn btn-danger" href="#" role="button">Удалить</a></td>
                </tr>
            @endforeach

            </tbody>
        </table>

    @endif

@endsection