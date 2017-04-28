<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
		
		<div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url ('/')}}">											
				Мариупольская федерация Ушу				
			</a>        	
		</div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{url ('/about')}}">О нас</a>
                </li>
                <li>
                    <a href="{{url ('/news')}}">Новости</a>
                </li>
                <li>                  
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Галерея <b class="caret"></b></a>					
						<ul class="dropdown-menu">
							<li>
								<a href="{{url ('/photofolders')}}">Фотогалерея</a>
							</li>
							<li>
								<a href="{{url ('/videofolders')}}">Видеогалерея</a>
							</li>
						</ul>
                </li>
                <li>
                    <a href="{{url ('/contact')}}">Контакты</a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Ушу <b class="caret"></b></a>					
						<ul class="dropdown-menu">
							<li>
								<a href="{{url ('/sanda')}}">Саньда</a>
							</li>
							<li>
								<a href="{{url ('/taolu')}}">Таолу</a>
							</li>
						</ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>