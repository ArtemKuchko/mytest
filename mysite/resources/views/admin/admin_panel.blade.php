@extends('layouts.app')

@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
				    
					<?php
						//для вывода активного navbar
						$temp_news = null;
						$temp_photo = null;
						$temp_video = null;
						$temp_event = null;
						$temp_congrat = null;
						$temp_info = null;
						
						if (substr_count(Route::current()->uri, 'news') > 0)
						{
							$temp_news = 'active';
						}
						if (substr_count(Route::current()->uri, 'photo') > 0)
						{
							$temp_photo = 'active';
						}
						if (substr_count(Route::current()->uri, 'video') > 0)
						{
							$temp_video = 'active';
						}
						if (substr_count(Route::current()->uri, 'event') > 0)
						{
							$temp_event = 'active';
						}
						if (substr_count(Route::current()->uri, 'congrat') > 0)
						{
							$temp_congrat = 'active';
						}
						if (substr_count(Route::current()->uri, 'info') > 0)
						{
							$temp_info = 'active';
						}						
					?>
					
                    <a href="{{ url('/admin_news') }}" class="{{'list-group-item '.$temp_news}}">Новости</a>
                    <a href="{{ url('/admin_photogallery') }}" class="{{'list-group-item '.$temp_photo}}">Фотогалерея</a>
                    <a href="{{ url('/admin_videogallery') }}" class="{{'list-group-item '.$temp_video}}">Видеогалерея</a>
                    <a href="{{ url('/admin_events') }}" class="{{'list-group-item '.$temp_event}}">События</a>
                    <a href="{{ url('/admin_congrats') }}" class="{{'list-group-item '.$temp_congrat}}">Поздравления</a>
					<a href="{{ url('/admin_infos') }}" class="{{'list-group-item '.$temp_info}}">Информация</a>

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