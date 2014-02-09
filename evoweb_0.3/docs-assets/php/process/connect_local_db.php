<?php
//Tentative de connexion à la db
  @$db = new mysqli('localhost', 'root', 'root','evo_db'); 

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }

?>

