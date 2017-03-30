@extends('layouts.app')

@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="{{ url('/admin_news') }}" class="list-group-item">Новости</a>
                    <a href="{{ url('/admin_photogallery') }}" class="list-group-item">Фотогалерея</a>
                    <a href="{{ url('/admin_videogallery') }}" class="list-group-item">Видеогалерея</a>
                    <a href="{{ url('/admin_events') }}" class="list-group-item">События</a>
                    <a href="{{ url('/admin_congrats') }}" class="list-group-item">Поздравления</a>
					<a href="{{ url('/admin_infos') }}" class="list-group-item">Информация</a>

                </div>
            </div>
            <!-- Content Column -->			
            <div class="col-md-9">
			
			@section('input')
			
                <h2>Панель управления администратора</h2>
                <p> Добавление, редактирование, удаление информации</p>
				
			@show	
			
            </div>			
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Admin</p>
                </div>
            </div>
        </footer>
		
		<iframe data-reactroot="" id="launcher" class="zEWidget-launcher zEWidget-launcher--active" style="border: none; background: transparent; z-index: 999998; transform: translateZ(0px); position: fixed; opacity: 1; right: 0px; bottom: 0px; width: 159px; height: 47px; margin: 10px 20px; transition-property: all; transition-timing-function: ease-out; transition-duration: 300ms;"></iframe>

    </div>
    <!-- /.container -->

@endsection