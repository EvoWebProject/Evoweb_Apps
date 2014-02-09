<?php
require('connect_db.php');
require('leads_fns.php');
?>
<html>
<head>
  <title>Evoweb</title>
</head>
<body>
<h1>Thanks !</h1>
<p>We will contact you soon</p>
<?php
  // creation des variables

  $select_action=$_POST['select_action'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone_number=$_POST['phone_number'];
  $society=$_POST['society'];
  $budget=$_POST['budget'];
  $message=$_POST['message'];

    
  
  if (!get_magic_quotes_gpc()) {
    $select_action = addslashes($select_action);
    $name = addslashes($name);
    $email = addslashes($email);
    $phone_number = addslashes($phone_number);
    $society = addslashes($society);
    $budget = addslashes($budget);
    $message = addslashes($message);


  }
  


 // Verify field please
 // Ont injecte

  echo("Eveything is ok");

 

 
  
  
  $query = "INSERT INTO leads (action,name,email,phone_number,society,budget,message) VALUES ('$select_action','$name', '$email', '$phone_number','$society','$budget','$message' )";
  $result = $db->query($query) or die ('Erreur Sql !'.$query.mysql_error());


  
  
            

?>
</body>
</html>





