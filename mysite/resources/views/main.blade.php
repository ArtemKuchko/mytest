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
		
		<link rel="shortcut icon" href="{{asset('images/small_logo.ico')}}" />

		<!-- Bootstrap Core CSS -->
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
@show

<body>

@include ('navbar2')

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
				
			<p><b>УШУ-САНЬДА</b> – это вид противоборства, заключающийся в том, что, два соперника, используя руки, ноги, броски, падения и прочие технические действия,
			в соответствии с определенными правилами, проводят рукопашную схватку. А также в программе обучения общефизическая подготовка, акробатические, дыхательные
			и медитативные упражнения.</p>
			
			<p><b>УШУ – ТАОЛУ</b> – это спортивные выступления без оружия и с классическим оружием, демонстрация традиционных видов ушу без оружия и с оружием. Также в 
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
<script src="{{asset('js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>
@show

</body>

</html>
