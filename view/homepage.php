<?php 
	session_start();
	
	function getName() {
		if (!empty($_SESSION['fname']))
			return $_SESSION['fname'].' '.$_SESSION['lname'];
		else 
			return $_SESSION['enterprisename'];
	}
?>

<!DOCTYPE HTML>

<html class="no-js" lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Yvan l'alternant</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="manifest" href="site.webmanifest">
	<link rel="apple-touch-icon" href="icon.png">
	<link rel="icon" href="logo.ico" />

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">

	<link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo|Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="public/css/homepage_stylesheet.css"/>
</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
	
	<!-- Navbar -->
	<nav>
		<div class="logo"><a href="index.php?action=homepage"><img src="public/img/logo.png" width="47px" height="50px" alt="Yvan l'alternant"/></a></div>
		
		<form action="#" method="post">
			<input type="search" name="q" placeholder="Rechercher.."/>
		</form>
		
		<ul class="actions">
			<li class="navbar_gateway background_transitions xlarge"><a href="#" class="navbar_link"><i class="fa fa-home"></i></a></li>
			<li class="navbar_gateway background_transitions xlarge"><a href="#" class="navbar_link"><i class="fa fa-address-book"></i></a></li>
			<li class="navbar_gateway background_transitions xlarge"><a href="#" class="navbar_link"><i class="fa fa-envelope"></i></a></li>
			<li class="navbar_gateway background_transitions menu xlarge"><i class="fa fa-chevron-circle-down"></i></li>
		</ul>
	</nav>
	
	<div id="dropdown_menu">
		<ul class="dropdown">
			<li class="profile_gateway"><p class="username"><a href="#" class="show_profile transitions"><?= getName(); ?></a></p><p class="job">Etudiant chez CESI Alternance</p></li>
			<a href="index.php?action=logout" class="dropdown_actions"><li class="dropdown_gateway background_transitions">&Agrave; propos</li></a>
			<a href="index.php?action=logout" class="dropdown_actions"><li class="dropdown_gateway background_transitions">Mentions légales</li></a>
			<a href="index.php?action=logout" class="dropdown_actions"><li class="dropdown_gateway background_transitions">Déconnexion</li></a>
		</ul>
	</div>
	
	<!-- Body -->
	<div style="margin-top:75px; text-align:center;">
		<h1>Bonjour <?= getName(); ?></h1>
	
		<p>Heureux de vous revoir <?= getName(); ?>.<br/>Comment allez-vous ?</p>
	</div>
	
	<script src="js/vendor/modernizr-3.6.0.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	
	<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	<script>
		window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
		ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
	</script>
	<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
