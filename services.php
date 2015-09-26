<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Welcome | Zaraza Design</title>
	<meta name="description" content="This is the website of Houston-based interior designer Juliana Zaraza">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<link rel="stylesheet" href="<?php autoVer('/css/style.css'); ?>"/>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

</head>
<body>

<header>
	<div class="container">
		<div class="seven columns" id="logo">
			<a href="/">
				<img src="/img/logo/logo.png" alt="Zaraza Design">
			</a>
		</div>
		<nav class="nine columns">
	        <ul id="navlist" class="lavalamp">
	            <li><a href="/">Home</a></li>
	            <li><a href="/gallery.html">Gallery</a></li>
	            <li class="active"><a href="/services.html">Services</a></li>
	            <li><a href="/contact.html">Contact</a></li>
	        </ul>
		</nav>
	</div>
</header>

<main class="container">
	<div class="services-container">
		<div class="sixteen columns">
		    <div class="services-header">
				<h1>Services</h1>
			</div>
		</div>
		<div class="sixteen columns">
				<div class="services-text">
					<p>Zaraza Design provides a variety of interior design services for its residential and commercial design clients.
			        <br /><br />
			        Working through a collaborative process with its clients, Zaraza Design provides personalized services to guide clients through each step of the interior design process.
			        <br /><br />
			        This design process includes :<br />
					- Initial style and design consultation.<br />
					- Selection of finishes, fabrics and furnishings.<br />
					- Remodeling and layout consultation.<br />
					- Project Management.<br />
					- Installation.
					<br /><br />
					Throughout the interior design process, Zaraza Design works closely with its clients to assist them in refining and realizing their interior design vision.</p>
				</div>
		</div>
	</div>
</main>


<div class="footer-content-height">
<footer>
	<div class="container">
		<div id="sharing" class="four columns">
			<ul>
				<li><a href="http://www.pinterest.com/JulianaZaraza/zaraza-design/" target="blank"><img src="/img/footer/social/pinterest.png"></a></li>
				<li><a href="https://twitter.com/JulianaZaraza" target="blank"><img src="/img/footer/social/twitter.png"></a></li>
			</ul>
		</div>
		<div id="copyright" class="four columns offset-by-eight">
			<p>&copy; Zaraza Design 2014</p>
		</div>
	</div>
</footer>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery/1-11-3/jquery-min.js"><\/script>')</script>
<script src="<?php autoVer('/js/nav-min.js'); ?>"></script>
</body>
</html>