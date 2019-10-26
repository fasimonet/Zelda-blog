<!DOCTYPE html>
<html>

<!-- Programme : accueil.html
Auteur : Sinan DAROUKH et Fabien SIMONET 
Date : 08/09/2016
Finalité : Site web concernant le jeu Zelda-->

<!-- PAGE D'ACCUEIL -->

	<head>
	
	 	<meta charset="utf-8">
		<!--<link href="presentation.css" rel="stylesheet" type="text/css"/>-->
		<link rel="stylesheet" href="presentation.css" /> <!-- Pour tout le monde -->

        <link rel="stylesheet" media="all and (max-width: 800px)" href="presentation_mini.css" />
	 	<title>La Gazette d'Hyrule</title>
		<style type ="text/css"> 
		body {
			background-image : url("./Images/Background/background10.jpg");
			}
		@media all and (max-width: 800px) {
			body {
				background-image : url("./Images/Background/backgroundmini1.jpg");
				}
		}
		</style>
	 
	</head>
	
	<body>
	
		<header class="boite"> 
			<img id="imageGazette" src="./Images/anim_marrante.gif"/><br/> 
			<h1>La Gazette d&apos;Hyrule</h1>
		</header>
		
		<div class="menu">
			<ul id="menuDeroulant">
				<li><a href="accueil.html">Accueil</a></li>
				<li><a href="#">Articles</a>
					<ul>
						<li><a href="partie1Articles.html">Saga The Legend of Zelda</a></li>
						<li><a href="partie2Articles.html">Le monde de Zelda</a></li>
					</ul>
				</li>
				<li><a href="#">M&eacute;dias</a>
					<ul>
						<li><a href="gallerieImages.html">Photos</a></li>
						<li><a href="videos.html">Vid&eacute;os</a></li>
					</ul>
				</li>
				<li><a href="#">Contact</a>
					<ul>
						<li><a href="nouscontacter.html">Nous contacter</a></li>
						<li><a href="reseauxSociaux.html">R&eacute;seaux sociaux</a></li>
					</ul>
				</li>
			</ul>
		</div>
		
		<div class="blocCentral">
			<h2>Nous Contacter</h2>
			
			<?php
				// On défini les variables nécessaires à la vérification
				$nom = $email = $message = "";
				$verif = $pverif = "";
			
				// On vérifie le champ 'Nom du Visiteur'
				  if (empty($_GET["nom"])) {
					$nom = "Le champ 'Nom du Visiteur' est requis !";
				  } else {
					$nom = $_GET["nom"];
					$verif = $verif + 1;
					}
				
				// On vérifie le champ 'Courriel'
				  if (empty($_GET["email"])) {
					$email = "Le champ 'Courriel' est requis !";
				  } else {
						$email = $_GET["email"];
						if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					  	$email = "L'e-mail est invalide !";
						} else {
							$verif = $verif + 1;
						}
					}

				// On vérifie le champ 'Message'
				  if (empty($_GET["message"])) {
					$message = "Le champ 'Message' est requis !";
				  } else {
					$message = $_GET["message"];
					$verif = $verif + 1;
					  }
				// On affecte un message à la variable $pverif
				  if ($verif == 3) {
					  $pverif = "Votre demande sera prise en compte !";
				  } else {
					  $pverif = "Votre demande ne sera prise en compte, car un ou plusieurs champs requis sont vides !";
				  }

			?>

			<h3>Récapitulatif</h3>
		
			<p>
				Nom du Visiteur : <?php echo $nom; ?><br/><br/>
				Courriel : <?php echo $email; ?><br/><br/>
				Téléphone : <?php echo $_GET["tel"]; ?><br/><br/>
				Objet d'envoi : <?php echo $_GET["demande"]; ?><br/><br/>
				Avez-vous déjà fréquenté ce site ? : <?php echo $_GET["visite"]; ?><br/><br/>
				Message : <?php echo $message; ?><br/><br/>
				<?php echo $pverif; ?>	
			</p>

		
		</div> <br/> <br/> 	

		<div id="conteneurReseauxSociaux">
			<div class="sousconteneur">
				<a href="https://fr-fr.facebook.com/LegendofZeldaFrance/"> 
					<img class="logoReseauxSociaux" src="./Images/facebook.png"/>
					<img class="logoReseauxSociauxEntier" src="./Images/facebookentier.jpg" />
				</a>
			</div> 

			<div class="sousconteneur">
				<a href="https://twitter.com/zeldauniverse?lang=fr">
					<img class="logoReseauxSociaux" src="./Images/twitter.png"/>
					<img class="logoReseauxSociauxEntier" src="./Images/twitterentier.PNG" />
				</a>
			</div>
			<div class="sousconteneur">
				<a href="https://www.youtube.com/user/Nintendo">
					<img class="logoReseauxSociaux" src="./Images/youtube.png"/>
					<img class="logoReseauxSociauxEntier" src="./Images/youtubeentier.jpg" />
				</a>
			</div>
			<div class="sousconteneur">
				<a href="https://plus.google.com/communities/113066832372633650130">
					<img class="logoReseauxSociaux" src="./Images/googleplus.jpg"/>		
					<img class="logoReseauxSociauxEntier" src="./Images/googleplusentier.jpg" />				
				</a>
			</div>
		</div>
		
		<footer>
			<img class="imageFooter" src="./Images/footer/linkFooter5.png" />
			Site web r&eacute;alis&eacute; par Sinan DAROUKH et Fabien SIMONET : Groupe 3.
			<img class="imageFooter" src="./Images/footer/princesseFooter.png" />
		</footer><br/><br/>
		
	</body>
	
</html>
