<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lecoffre Antoine portfolio</title> <!-- titre affiché sur l'onglet -->
	<link rel="stylesheet" href="styles/parallax_link.css"/> <!-- CSS pour le parallax -->
	<link rel="stylesheet" type="text/css" href="ressources/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles/parallax.css"> <!-- CSS des slides avec l'animation fade in -->
	<link rel="stylesheet" type="text/css" href="styles/flipcard.css">  
  	<link rel="stylesheet" type="text/css" href="styles/style.css"> <!-- CSS restant -->
</head>

<body> <!-- corps de la page -->

	<?php include("html-fragment/navbar.php") ?>

	<div id="slide1" class="slides"> <!-- Slide 1 -->
	
		<div class="slide_inside">
    		<h2 id="Presentation">Lecoffre Antoine</h2>
	
	        <img src="image/logo.jpg" id="monlogo">
	
	        <img src="image/0.png" id="pplinkedin">
    		
	        <img src="image/logo.png" id="logoecole">
        
    	    <p id="phraseIntro">Etudiant en 1ère année en bachelor informatique à Campus Academy Rennes</p>

        	<p id="Presentation">Présentation</p>

	        <p id="phraseBienvenue">Je vous souhaite la bienvenue sur mon site. Ceci est mon portfolio. </p> 
        
    	    <p id="phrasePresentation"> Je suis passionné d'informatique et de numérique depuis longtemps déjà et je tient à partager avec vous cette passion. <br> Tout le long du site, vous apprendre à découvrir qui je suis, mes compétences, mes passions et pleins d'autres choses !</p> 
        
	        <p id="objectifFuturs"> Mes objectifs post-études sont de travailler dans la cybersécurité ou le développement web.</p>

		</div>
	</div>

  	<div id="slide2" class="slides">
  	
  		<div class="slide_inside">
  			<h2 id="Compétences">Compétences</h2>
	 
			  <?php include("html-fragment/flipcard.php") ?>

	  </div>
	</div>

  <div id="slide3" class="slides"> <!-- Slide 3 -->
  	
  	<div class="slide_inside">
  		<h2 id="Hobbies">Hobbies</h2>
      
      <img id="natationpng" src="image/natation.png"> <!-- les images qui sont dans ma slide -->

      <img id="manga" src="image/manga.jpg">

      <img id="muscupng" src="image/muscu.png"> <br>
      
      <img id="f1png" src="image/f1.jpg">

      <img id="karatepng" src="image/karate.png">
      
      <img id="gamingpng" src="image/gaming.png">
  	</div>

  </div>

  <div id="slide4" class="slides"> <!-- Slide 4 -->
    
    <div class="slide_inside"> <!-- Pas encore de projets à présenté pour le moment donc on met en standby avec un coming soon -->
      <h2 id="Projets">Projets</h2>
      <?php include("html-fragment/projet.php") ?>
    </div>

  </div>

  <div id="slide5" class="slides"> <!-- Slide 5 -->
	    
	    <div class="slide_inside"> <!-- Aucune recommendations donc je laisse blanc -->
	      <h2 id="Recommandations">Recommandations</h2>
	    </div>

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Soumettre une recommandation</button>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

		 <?php include("html-fragment/recommendation.php") ?>
	
	</div>
  </div>

  <div id="slide6" class="slides"> <!-- Slide 6 -->
    
    <div class="slide_inside">
	  <h2 id="Contact">Contact</h2>
	  
      <div>
       <form method="POST" action=""> <!-- Le formulaire de contact -->
         <p class="infoFormulaire">NOM prénom</p>
      
         <p><input type="text" name="name" size="50"></p>
      
         <p class="infoFormulaire">Email :</p>
      
         <p><input type="email" name="email" size="50"></p>
      
         <p class="infoFormulaire">Message :</p>
      
		 <p><textarea name="message" rows="8" cols="80"></textarea></p>

		 <div class="form-group">
			<div class="form-check">
		      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
		      <label class="form-check-label" for="invalidCheck3">
		        Je reconnais avoir pris connaissance des <a href="#" data-toggle="modal" data-target="#staticBackdrop">Conditions Générales d'Utilisation</a> du site et je les accepte.

			  <?php include("html-fragment/CGU.php") ?>

		      </label>
		    <div class="invalid-feedback">
		</div>
	</div>
		 
		 <input type="submit" name="envoyer" class="btn btn-primary"></input>

<!-- <?php
    if (!empty($_POST["envoyer"])){
 
        ini_set( 'display_errors', 1 );
    
        error_reporting( E_ALL );
    
        $from = "neekeyo537@gmail.com";
    
        $to = "antoine.lecoffre@orange.fr";
    
        $subject = "Contact Site web de ".$_POST['name'];
    
        $message = $_POST['message']."\n\n\nAdresse mail du client: ".$_POST['email'];
    
        $headers = "From:" . $from;

        mail($to, utf8_decode($subject), utf8_decode($message), $headers);
	}?>
			</form>
</div> -->

      
      		<p id="phraseQuestionnaire">N'hésitez pas à répondre à <a href="#" data-toggle="modal" data-target="#bannerformmodal">ce questionnaire</a>  pour donner votre avis sur mon site, cela m'aiderai beaucoup !</p>

		<div class="modal fade bannerformmodal" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal" aria-hidden="true" id="bannerformmodal">

			<?php include("html-fragment/questionnaire.php"); ?>
		
		</div>
	</div>
</div>


<!-- tout le javascript qui sert à faire tourner la page -->

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> <!-- javascript parallax -->
	<script type="text/javascript" src="script/jquery.parallax-1.1.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/hover.js"></script>
    <!-- javascript bootstrap -->
    <script src="ressources/bootstrap/js/bootstrap.js"></script>

</body>
</html>