<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sitelpmi";


  		$conn = mysqli_connect($servername, $username, $password, $dbname);
      mysqli_set_charset($conn, "utf8");
  		if (!$conn)
  		{
  				die("Connection failed: " . mysqli_connect_error());
  		}

?>
