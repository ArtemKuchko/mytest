@extends ('main')

@section('content')

		<!-- Page Heading/Breadcrumbs -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Контакты</h1>
				<ol class="breadcrumb">
					<li><a href="{{url('/')}}">Главная</a>
					</li>
					<li class="active">Контакты</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->


        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
				<iframe  width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1357.682293464918!2d37.521450658227!3d47.11152599478872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e6e38e2a555231%3A0xea4ea72dc53f8e7d!2s50+rokiv+SRSR+St!5e0!3m2!1sen!2sus!4v1488358701702"></iframe>
			</div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Наши контакты</h3>
                <p>
                    ул. 50 лет СССР, 56<br>Школа № 27<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone"></abbr>: (067) 768 58 95</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email"></abbr>: <a href="mailto:name@example.com">osipov-rv@mail.ru</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours"></abbr>: Понедельник - Суббота: с 8:00 до 19:00</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a target="_blank" href="https://vk.com/wushu_mariupol"><i class="fa fa-vk fa-2x"></i></a>
                    </li>
					<li>
                        <a target="_blank" href="#"><i class="fa fa-facebook fa-2x"></i></a>
                    </li>
                    <li>
                        <a target="_blank" href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                    </li>                    
                    <li>
                        <a target="_blank" href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row" id="message">
            <div class="col-md-8">
                <h3>Оставить сообщение</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Ваше Имя:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Контактный телефон:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>E-mail:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Сообщение:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

@endsection