<?php
  session_start();

  include "checkreset.php";
  include 'connectdb.php' ;
?>

<!DOCTYPE html>
<html lang="fr">
  <?php
    include 'head.php';
  ?>
  
      <body>
        <div id="login" class="row content-bleu">
          <?php
            include "all.php";
          ?>
        </div>
        <?php
          include "entete_page.php";
        ?>

        <?php
          if (isset($_FILES['image']['name']))
          {
            $total = count($_FILES['image']['name']);
            for ($i=0; $i < $total ; $i++)
            {
              $extensions_valides = array( 'jpg' , 'jpeg' , 'png' );
              $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'][$i], '.')  ,1)  );

              $path = "projet\projet_".$_POST['projet_num'];
              if (!file_exists($path))
              {
                mkdir( $path, 0777, true);
              }

              $nom = "C:\Program Files (x86)\EasyPHP-Devserver-17\\eds-www\GitHub\Site-LPMI\\projet\\projet_".$_POST['projet_num']."\\".$i.".png";

              if ($_FILES['image']['error'][$i] == 0 && in_array($extension_upload,$extensions_valides)==true && $_FILES['image']['size'][$i] <= $_POST['MAX_FILE_SIZE'])
              {
                $resultat = move_uploaded_file($_FILES['image']['tmp_name'][$i],$nom);
                if ($resultat)
                  echo "Transfert réussi<br/>";
                else
                  echo "echec..<br/>";
              }
            }
          }
        ?>

        <form method="post" action="#" enctype="multipart/form-data">
            <p>Projet n°:<input type="number" name="projet_num" value="1" min=0></p>
             <label for="image">Image (max 3 fichiers et 1Mo chacun) :</label><br />
             <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
             <input type="file" name="image[]" id="image" multiple="multiple"/><br />
             <input type="submit" name="submit" value="Envoyer" />
        </form>

        <?php
          $files1 = scandir("projet",1);

          for ($i=0; $i < count($files1)-2; $i++)
          {
            echo "

            <div id='carouselExampleIndicators".$i."' class='carousel slide' data-ride='carousel'>
              <ol class='carousel-indicators'>
                <li data-target='#carouselExampleIndicators".$i."' data-slide-to='0' class='active'></li>
                <li data-target='#carouselExampleIndicators".$i."' data-slide-to='1'></li>
                <li data-target='#carouselExampleIndicators".$i."' data-slide-to='2'></li>
              </ol>
              <div class='carousel-inner'>
                <div class='item active'>
                  <img class='d-block w-100' src='projet\\".$files1[$i]."\\0.png' alt='First slide'>
                </div>
                <div class='item'>
                  <img class='d-block w-100' src='projet\\".$files1[$i]."\\1.png' alt='Second slide'>
                </div>
                <div class='item'>
                  <img class='d-block w-100' src='projet\\".$files1[$i]."\\2.png' alt='Third slide'>
                </div>
              </div>
              <a class='carousel-control-prev' href='#carouselExampleIndicators".$i."' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='sr-only'>Previous</span>
              </a>
              <a class='carousel-control-next' href=''#carouselExampleIndicators".$i."' role='button' data-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='sr-only'>Next</span>
              </a>
            </div>

            ";
          }
         ?>


          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/script_perso.js"></script>

      </body>
</html>
