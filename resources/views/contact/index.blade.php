@extends('layouts.contact')

@section('content')
    <!-- contact-info start -->
    <div class="col-md-6 col-sm-12 col-xs-12">
		<div class="contact-info">
			<h3>Інформація про контакти</h3>
			<ul>
				<li>
					<i class="fa fa-map-marker"></i> <strong>Aдреса</strong>
					м. Ірпінь
				</li>
				<li>
					<i class="fa fa-envelope"></i> <strong>Телефон</strong>
					+3 8(063)-645-31-50
				</li>
				<li>
					<i class="fa fa-mobile"></i> <strong>Ел. пошта</strong>
					<a href="#">i.spizhenko@gmail.com</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- contact-info end -->
	<div class="col-md-6 col-sm-12 col-xs-12">
		<div class="contact-form">
			<h3><i class="fa fa-envelope-o"></i> Залишити повідомлення</h3>
			<div class="row">
				<form action="mail.php" method="POST">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input name="name" type="text" placeholder="Імя (обовязково)" />
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input name="email" type="email" placeholder="Email (обовязково)" />
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<input name="subject" type="text" placeholder="Subject" />
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<textarea name="message" id="message" cols="30" rows="10" placeholder="Повідомлення"></textarea>
						<input type="submit" value="Відправити" />
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection