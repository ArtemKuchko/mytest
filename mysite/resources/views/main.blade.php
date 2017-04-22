<!DOCTYPE html>
<html lang="en">

@section ('head')
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Мариуполь - УШУ</title>
		<link rel="shortcut icon" href="images/small_logo.ico" />

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/modern-business.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
@show

<body>

@section ('navbar')
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

@show

@yield ('carousel')

<!-- Page Content -->
<div class="container">

@section('content')

@yield ('info')
    
    <!-- Features Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Присоединяйтесь к нам</h2>
        </div>
        <div class="col-md-6">
            
			<br>
			<p>Мариупольская федерация УШУ ведет набор в группы по следующим направлениям УШУ:</p>
				
			<p>УШУ-САНЬДА – это вид противоборства, заключающийся в том, что, два соперника, используя руки, ноги, броски, падения и прочие технические действия,
			в соответствии с определенными правилами, проводят рукопашную схватку. А также в программе обучения общефизическая подготовка, акробатические, дыхательные
			и медитативные упражнения.</p>
			
			<p>УШУ – ТАОЛУ – это спортивные выступления без оружия и с классическим оружием, демонстрация традиционных видов ушу без оружия и с оружием. Также в 
			программе обучения общефизическая подготовка, акробатические, дыхательные и медитативные упражнения. Тренировки подходят как для мальчиков, так и для девочек. </p>
			
			<p>В нашей школе все воспитанники разделены по возрастным группам. Группа юных спортсменов 6-7 лет, группы среднего и старшего возрастов. Занятия проходят в 
			соответствии с физическими и психологическими особенностями каждой возрастной группы.</p>
		
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="images/monk.jpg" alt="">
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="well">
        <div class="row">
            <div class="col-md-8">
                <p>Если у Вас возникли какие-либо вопросы, Вы всегда можете связаться с нами</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-primary btn-block" href="{{ url('/contact#message') }}">Оставить сообщение</a>
            </div>
        </div>
    </div>

@show

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Wushu &copy; Artem Kuchko 2017</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->


@section ('scripts')
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>
@show

</body>

</html>
