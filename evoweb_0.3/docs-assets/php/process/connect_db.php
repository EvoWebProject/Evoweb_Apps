<?php
function db_connect() {
   $result = new mysqli('localhost', 'root', 'root', 'evo_db');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}

?>

