<?php
  session_start();

  include "checkreset.php";
  include 'connectdb.php' ;
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Domine:400,700" rel="stylesheet">
      <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
			<!-- Font awesome-->
	     <link href="css/font-awesome.min.css" rel="stylesheet">
			<!-- Ma feuille de style perso-->
	<link href="css/style.css" rel="stylesheet">

			  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <!-- Hotjar Tracking Code -->


  </head>
      <body>

        <?php
          include "all.php" ;
          include "entete_page.php";
        ?>

        <div class="content-bleu row">
          <div class="col-md-6 textecontent">
            <h3 class="underline">La Formation</h3>
           At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et. </br>qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestia </p>
           <a href="lpmi.php" class="underline">Découvrir la formation </a>
          </div>
          <div class="col-md-5 col-sm-12 col-xs-12 content-img">
            <img src="images/lpmi.png" alt="LPMI" class="img-responsive">
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 content-img">
            <img src="images/ue.png" alt="LPMI" class="img-responsive">
          </div>
          <div class="col-md-6 textecontent">
            <h3 class="underline">Unité d'enseignement</h3>
           At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et. </br>qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestia </p>
            <a href="ue.php" class="bleu underline">Parcourir les unités d'enseignements </a>
          </div>
        </div>

        <div class="row content-bleu ">
          <div class="col-md-6 textecontent">
            <h3 class="underline">Projets étudiants</h3>
           At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et. </br>qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestia </p>
            <a href="" class="underline">Visionner les projets  </a>
          </div>
          <div class="col-md-5 content-img">
            <img src="images/projet.png" alt="LPMI" class="img-responsive ">
          </div>
        </div>

        <div class="content row">
          <div class="col-md-5 content-img">
            <img src="images/candidater.png" alt="LPMI" class="img-responsive">
          </div>
          <div class="col-md-6 textecontent">
            <h3 class="underline">S'inscrire</h3>
           At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et. </br>qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestia </p>
            <a href="" class="bleu underline">Candidater  </a>
          </div>
        </div>

          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
      </body>
</html>
