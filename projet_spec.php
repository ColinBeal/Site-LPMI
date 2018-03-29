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


          $files1 = scandir("projet",1);

          for ($i=0; $i < count($files1)-2; $i++)
          {

          }
        ?>

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
      </body>
</html>
