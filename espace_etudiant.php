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
          include "uploadfiles.php";
        ?>

        <form method="post" action="#" enctype="multipart/form-data">
          <?php
            $sql = "SELECT M.id ,nomM, nomP FROM matiere M, professeur P WHERE M.id_prof=P.id";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0)
            {
              echo  "Matiere : <select name='mat'>";
              while($row = mysqli_fetch_assoc($result))
              {
                echo "<option value='". $row["id"]."'>".$row["nomM"]." -- ".$row["nomP"]."</option>";
              }
              echo "</select><br/>";
            }
          ?>
          <label for="fichier">Fichier (5 Mo max) :</label><br />
          <input type="hidden" name="MAX_FILE_SIZE" value="5000000"/>
          <input type="file" name="fichier[]" id="image" multiple="multiple"/><br/>
          <input type="submit" name="submit" value="Envoyer" />
        </form>

        <?php
          include "listfiles.php";
        ?>

          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/script_perso.js"></script>

      </body>
</html>
