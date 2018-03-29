<?php
  session_start();

  include "checkreset.php";
  include 'connectdb.php' ;

  if (!isset($_SESSION["login"]) OR !isset($_SESSION["type"]) OR ($_SESSION["type"]!="etudiant" && $_SESSION["type"]!="admin"))
  {
    header('Location: index.php');
    exit;
  }
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

          if ($_SESSION["type"]=="admin")
          {
            include "edit_messages.php";
          }
          include "show_messages.php";
        ?>

          <div>
              <a href="depot.php"><p>Voir la Liste des Fichiers dans le Dépot</p></a>
          </div>
          <div>
              <a href="liste_projet.php"><p>Voir la liste Liste des Projets</p></a>
          </div>

          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/script_perso.js"></script>

      </body>
</html>
