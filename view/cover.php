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
	
	<link rel="stylesheet" href="public/css/main_stylesheet.css"/>
</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
	
	<section id="intro">
		<div id="logo"><img src="public/img/logo.png" width="120px" height="128px" alt="Yvan l'alternant"/></div>
		
		<h1>Yvan l'alternant</h1>
		<p class="subtitle">Et il le vend bien !</p>
		
		<div id="actions">
			<a href="#connexion" class="intro_actions btn transitions connexion_btn" onclick="connexionSection()">Se connecter</a>
			<a href="#register" class="intro_actions btn transitions" onclick="registerSection()">S'inscrire</a>
		</div>
	</section>
	
	<section id="connexion">
		<h2 class="connexion">Se connecter</h2>

		<p id="connexionErrorMsg">Le formulaire comporte des erreurs</p>
		
		<form action="index.php?action=login" method="post" name="connexionForm" onsubmit="return connexionErrorInput(this)">
			<input type="mail" name="mail_address" id="mail_address" placeholder="Adresse e-mail"/><br/>
			<input type="password" name="password" id="password" placeholder="Mot de passe"/><br/>
			
			<input type="submit" class="btn" onclick="connexionErrorInput()" value="Se connecter"/>
			<a href="#" class="intro_actions btn transitions">Haut de page</a>
		</form>
	</section>
	
	<section id="register">
		<h2 class="register">S'inscrire</h2>
		
		<h4>Vous êtes :</h4>
		
		<p id="registerErrorMsg">Le formulaire comporte des erreurs</p>
		<p id="passError">Le mot de passe doit contenir au moins une majuscule, un caractère spécial dont un chiffre, et 6 caractères !</p>
		<p id="validMsg">Votre compte a bien été créé !</p>
		
		<div class="studient_register">
			<form action="index.php?action=studientRegister" method="post" name="connexionForm" onsubmit="return studientErrorInput(this)">
				<p class="type">&Eacute;tudiant :</p>
				<input type="text" name="fname" id="fname" placeholder="Prénom"/><br/>
				<input type="text" name="lname" id="lname" placeholder="Nom"/><br/>
				<input type="mail" name="mail_address" id="register_mail" placeholder="Adresse e-mail"/><br/>
				<input type="password" name="password" id="register_password" placeholder="Mot de passe"/><br/>
			
				<input type="submit" class="intro_actions btn transitions" onclick="studientErrorInput()" value="Créer mon compte"/>
			</form>

			<form action="index.php?action=enterpriseRegister" method="post" name="enterpriseConnexionForm" onsubmit="return enterpriseErrorInput(this)">
				<p class="type">Entreprise :</p>
				<input type="text" name="siretnumber" id="siret" placeholder="Numéro de Siret"/><br/>
				<input type="text" name="enterprisename" id="enterprisename" placeholder="Nom de l'entreprise"/><br/>
				<input type="mail" name="mail_address" id="enterprisemail" placeholder="Adresse e-mail"/><br/>
				<input type="password" name="password" id="enterprisepass" placeholder="Mot de passe"/><br/>
				
				<input type="submit" class="intro_actions btn transitions" onclick="enterpriseErrorInput()" value="Créer mon compte"/>
			</form>
		</div>
		
		<a href="#" class="intro_actions btn transitions">Haut de page</a>
	</section>
	
	<script src="js/vendor/modernizr-3.6.0.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	
	<script type="text/javascript">

	</script>

	<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	<script>
		window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
		ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
	</script>
	<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>