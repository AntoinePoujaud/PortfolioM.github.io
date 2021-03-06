<?php
	if ($_POST['message-form']) {
		mail("antoinepoujaud@gmail.com", "test test prout", $_POST["message-form"] . "From: " $_POST["mail-form"]);
	}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<!-- -->

		<!-- Balises Meta -->
		<meta charset="utf-8">
		<meta name="author" content="Antoine POUJAUD">
		<meta name="copyright" content="Antoine POUJAUD"/>
		<meta name="description" content="Bonjour et bienvenue sur mon portfolio, j'y montre l'ensemble de mes projets, aboutis ou non, n'hésitez pas à me contacter si mon travail vous intéresse."> <!-- A FAIRE VALIDER PAR MARION -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

		<title>Contactez moi</title>

		<!-- Liaison de Bootstrap 
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css"> -->


		<!-- Liaison de mon fichier .css -->
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		
		<script  src="js/index.js"></script>
	</head>

	<body>
		<header>
<!-- Gestion des icônes et liens réseaux sociaux -->
			<div id="network-nav-container">				
				<!--
					<div id="social-network" class="header">
						<a href="https://www.instagram.com/naokyart/" id="instagram" class="social-network-element"><img src="img/instagram.PNG"></a>
						<a href="https://twitter.com/NaoArt4" id="twitter" class="social-network-element"><img src="img/twitter.PNG"></a>
						<a href="https://www.artstation.com/lnaoky" target="_blank" id="artstation"  class="social-network-element"><img src="img/artstation.png"></a>
					</div>
				-->

	<!-- Gestion du menu de navigation -->

				<nav id="main-menu" class="header">
					<a href="./gallery.html" id="gallery-nav" class="main-menu-element">GALLERY </a>
					<a href="./about.html" id="about-nav" class="main-menu-element">ABOUT </a>
					<a href="./contact.html" id="contact-nav" class="main-menu-element">CONTACT </a>
				</nav>
			</div>
			<div class="clear"></div>

<!-- Gestion du gros titre et de son sous-titre -->
			<div id="main-title">
				<div id="index-nav">
					<h1 id="main-title-text" class="main-title-element"> <a href="./index.html">MARION CORTESI</a> </h1>
					<h2 id="main-subtitle-text" class="main-title-element"><a href="./index.html">CG ARTIST</a></h2>
				</div>
			</div>		
		</header>



		<form method="post" action="contactform.php" id="contact-form">
			<fieldset>
				<label for="name-form"><span>*</span>Votre nom : </label><br>
				<input required type="text" name="name-form" id="name-form" class="little-form-input"><br><br>
				<label for="mail-form"><span>*</span>Votre email : </label><br>
				<input required type="text" name="mail-form" id="mail-form" class="little-form-input"><br><br>
				<label for="message-form"><span>*</span>Votre message : </label><br>
				<textarea required maxlength="1500" cols="100" rows="10" name="message-form" id="message-form"></textarea><br>
				<div id="footer-form">
					<p>* Obligatoire </p>
					<div id="submit-div">
						<input type="submit" name="submit-form" id="submit-form" value="Envoyer">
					</div>
				</div>
			</fieldset>

		</form>
		

		<div class="clear"></div>

		<footer>
			<div id="footer-container">
				<div id="footer-network" class="footer">
					<a href="https://www.instagram.com/naokyart/" target="_blank" id="instagram" class="footer-network-element"><img src="img/instagram.PNG"></a>
					<a href="https://www.artstation.com/lnaoky" target="_blank" id="artstation" class="footer-network-element"><img src="img/artstation.png"></a><a href="https://twitter.com/NaoArt4" target="_blank" id="twitter" class="footer-network-element"><img src="img/twitter.PNG"></a>
					
				</div>

				<div id="footer-mail" class="footer">
					<p>m.cortesi@student.isartdigital.com</p>
				</div>
			</div>
			
		</footer>




		<!-- Liaison de JQuery 
		<script src="js/jquery/jquery-3.5.1.js"></script> -->
		<!-- Liaison de Popper.js 
		<script src="https://unpkg.com/@popperjs/core@2"></script> -->
		<!-- Liaison de Bootstrap.js 
		<script src="js/bootstrap/bootstrap.js"></script> -->
		
	</body>
</html>