<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>Contact | Zaraza Design</title>
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
	            <li><a href="/">Home</a></li>
	            <li><a href="/gallery/">Gallery</a></li>
	            <li><a href="/services">Services</a></li>
	            <li class="active"><a href="/contact">Contact</a></li>
	        </ul>
		</nav>
	</div>
</header>


<main class="container">
	<div class="contact-container">
		<div class="sixteen columns">
				<div class="contact-header">
    				<h1>Zaraza Design, LLC</h1>
    			</div>
		</div>
		<div class="nine columns">
			<div class="contact-text">
				<p>
    			Juliana Zaraza<br />
		        988 Patterson Street<br />
		        Houston, Texas 77007<br />
		        P: 281-250-0244<br />
		        F: 713-589-7962<br />
		        jzaraza@zarazadesign.com
    			</p>
				<img src="/img/contact/juliana.png" class="profile" height="200" width="200">
			</div>		
		</div>
		<div class="seven columns">
			<div class="twitter-widget">
				<a class="twitter-timeline" width="300" height="450" href="https://twitter.com/JulianaZaraza" data-widget-id="464068821817376768">Tweets by @JulianaZaraza</a>
			</div>
		</div>
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
			<p id="studio-n"><a href="http://studioncreations.com/" target="blank">A <span>Studio N</span> Creation</a></p>
		</div>
	</div>
</footer>




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery/1-11-3/jquery-min.js"><\/script>')</script>
<script src="<?php autoVer('/js/nav-min.js'); ?>"></script>
<!-- TWITTER API -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body>
</html>