<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Bootstrap Page</title>
	<?= Asset::styles() ?>
</head>
<body>
	<div class="container">
		<h1>Using Bootstrap with Laravel</h1>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#welcome" data-toggle="tab">Welcome</a></li>
			<li><a href="#about" data-toggle="tab">About Us</a></li>
			<li><a href="#contact" data-toggle="tab">Contact</a></li>
		</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="welcome">
					<h4>Welcome to our site</h4>
					<p>Here's a list of Superheroes:</p>
					<ul>
						<?php foreach($superheroes as $hero): ?>
						<li class="badge badge-info"><?= $hero ?></li>
						<?php endforeach ?>
					</ul>
				</div>
				<div class="tab-pane" id="about">
					<h4>About Us</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, aliquam, vero corporis dignissimos adipisci minima aliquid expedita soluta tenetur optio? Assumenda ratione vero atque fuga. Pariatur, aliquid corrupti labore dolor.</p>
				</div>
				<div class="tab-pane" id="contact">
					<h3>Contact Form</h3>
					<?= Form::open('boot', 'POST') ?>
						<?= Form::label('name', 'Your Name') ?>
						<?= Form::text('name') ?>
						<?= Form::label('email', 'Your Email') ?>
						<?= Form::text('email') ?>
						<br>
						<?= Form::button('Send', array('class' =>'btn btn-primary')) ?>

					<?= Form::close() ?>
				</div>
			</div>
	</div>
	<?= Assett::scripts() ?>
</body>
</html>