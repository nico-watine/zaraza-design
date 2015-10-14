<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome | Zaraza Design</title>
	<meta name="description" content="This is the website of Houston-based interior designer Juliana Zaraza">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="author" href="/humans.txt">
	
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
	            <li class="active"><a href="/">Home</a></li>
	            <li><a href="/gallery/">Gallery</a></li>
	            <li><a href="/services">Services</a></li>
	            <li><a href="/contact">Contact</a></li>
	        </ul>
		</nav>
	</div>
</header>

<main id="index" class="container">
	<div id="slide-show" class="sixteen columns no-margin">
		<div class="cycle-slideshow" data-cycle-speed="600">
			<img src="/img/index/ss/1.jpg" alt="Zaraza Design" title="Zaraza Design" class="scale-with-grid">
			<img src="/img/index/ss/2.jpg" alt="Zaraza Design" title="Zaraza Design" class="scale-with-grid">
			<img src="/img/index/ss/3.jpg" alt="Zaraza Design" title="Zaraza Design" class="scale-with-grid">
			<img src="/img/index/ss/4.jpg" alt="Zaraza Design" title="Zaraza Design" class="scale-with-grid">
			<img src="/img/index/ss/5.jpg" alt="Zaraza Design" title="Zaraza Design" class="scale-with-grid">
		</div>
	</div>
	<div id="welcome-text" class="sixteen columns">
		<div id="text-container">
        	<h1>Zaraza Design</h1>
        	<p>Personalized Interior Design Services to Help Shape, Refine &amp; Realize Your Own Design Vision</p>
    	</div>
    </div>		
	<div id="project-widget" class="eight columns no-margin">
		<a href="/gallery/featured-project"><img src="/img/index/links/project-rectangle.jpg" class="scale-with-grid"></a>
	</div>
	<div id="services-widget" class="eight columns no-margin">
		<a href="/services"><img src="/img/index/links/design-rectangle.jpg" class="scale-with-grid"></a>
	</div>
</main>

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







<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery/1-11-3/jquery-min.js"><\/script>')</script>
<script src="<?php autoVer('/js/nav-min.js'); ?>"></script>
<script src="<?php autoVer('/js/index-min.js'); ?>"></script>
</body>
</html>