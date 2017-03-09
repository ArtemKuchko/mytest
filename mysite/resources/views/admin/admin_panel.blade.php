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
                    <a href="#" class="list-group-item">Фотогалерея</a>
                    <a href="#" class="list-group-item">Видеогалерея</a>
                    <a href="#" class="list-group-item">Контакты</a>
                    <a href="#" class="list-group-item">О нас</a>
					<a href="#" class="list-group-item">Саньда</a>
                    <a href="#" class="list-group-item">Таолу</a>
                    
                    
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

    </div>
    <!-- /.container -->

@endsection