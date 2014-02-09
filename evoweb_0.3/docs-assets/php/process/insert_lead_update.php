<?php
//require('docs-assets/php/process/connect_db.php');
require('leads_fns.php');
?>
<html>
<head>
  <title>Evoweb</title>
</head>
<body>
<h1>Thanks !</h1>
<?php
 

    
  


// define variables and set to empty values
$name = $email = $phone_number = $society = $budget = $message "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  // creation des variables

  $select_action=$_POST['select_action'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone_number=$_POST['phone_number'];
  $society=$_POST['society'];
  $budget=$_POST['budget'];
  $message=$_POST['message'];


}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

  if (empty($_POST["name"]))
    {$nameErr = "";}
  else
    {$name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name))
      {
      $nameErr = "Only letters and white space allowed"; 
      }}

  if (empty($_POST["email"]))
    {$emailErr = "";}
  else
    {  $email = test_input($_POST["email"]);
    // check if e-mail address syntax is valid
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
      {
      $emailErr = "Invalid email format"; 
      }}

  if (empty($_POST["phone_number"]))
    {$phone_numberErr = "";}
  else
    {$phone_number = test_input($_POST["phone_number"]);}

  if (empty($_POST["society"]))
    {$societyErr = "";}
  else
    {$society = test_input($_POST["society"]);}

  if (empty($_POST["budget"]))
    {$budgetErr = "";}
  else
    {$budget = test_input($_POST["budget"]);}

  if (empty($_POST["message"]))
  {$message = "";}
  else
    {$message = test_input($_POST["message"]);}

  if (empty($_POST["message"]))
    {$messageErr = "Message is required";}
  else
    {$message = test_input($_POST["message"]);}
}

function verif_name($name)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


 // Appeler les fonctions de vérification des champs inséré
 // si c'est ok on injecte, sinon envois ballader...



  if (!get_magic_quotes_gpc()) {
    $select_action = addslashes($select_action);
    $name = addslashes($name);
    $email = addslashes($email);
    $phone_number = addslashes($phone_number);
    $society = addslashes($society);
    $budget = addslashes($budget);
    $message = addslashes($message);


  }
//sécurité empéchant l'injection
  $name = mysql_real_escape_string($name);
  $email = mysql_real_escape_string($email);
  $society = mysql_real_escape_string($society);
  $budget = intval($budget);
  $message = mysql_real_escape_string($message);
 

 
  $query = "INSERT INTO leads (action,name,email,phone_number,society,budget,message) 
  VALUES ('".$select_action."','".$name."', '".$email."', '".$phone_number."','".$society."','".$budget."','".$message."' )"; 
  

  $result = $db->query($query) or die ('Erreur Sql !'.$query.mysql_error());
   
            
  mysql_close();
?>
</body>
</html>





