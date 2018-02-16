<?php
  session_start();

  include "checkreset.php";
  include 'connectdb.php' ;

  $sql = "SELECT id, nomUE, descriptionUE FROM unite_enseignement";
  $result = mysqli_query($conn, $sql);

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


    <?php
      $cpt=0;
      if (mysqli_num_rows($result) > 0)
    	{
        while($row = mysqli_fetch_assoc($result))
        {
          if ($cpt%2 == 0)
          {
            echo "
                <div class='content-bleu row'>
                  <div class='col-md-6 textecontent'>
                    <h3 class='underline'>".$row["nomUE"]."</h3><br/>
                    <p>".$row["descriptionUE"]."</p><br/>
                    <a href=ueparticulier.php?id=".$row["id"]." class='underline'>Découvrir cette UE </a>
                  </div>
                  <div class='col-md-5 col-sm-12 col-xs-12 content-img'>
                    <img src='images/lpmi.png' alt='LPMI' class='img-responsive'>
                  </div>
                </div>
        		";
          }
          else
          {
            echo "
            <div class='row content'>
              <div class='col-md-5 content-img'>
                <img src='images/ue.png' alt='LPMI' class='img-responsive'>
              </div>
              <div class='col-md-6 textecontent'>
                <h3 class='underline'>".$row["nomUE"]."</h3><br/>
                <p>".$row["descriptionUE"]."</p><br/>
                <a href=ueparticulier.php?id=".$row["id"]." class='bleu underline'>Découvrir cette UE </a>
              </div>
            </div>
        		";
          }
          $cpt++;
        }
    	}
      else
    	{
        header('Location: unite_enseignement_liste.php');
        exit;
    	}
    ?>

	</body>
</html>
