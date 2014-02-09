<?php
//on vérifie si tout les champs sont remplis
function filled_out($form_vars) {
  // test that each variable has a value
  foreach ($form_vars as $key => $value) {
     if ((!isset($key)) || ($value == '')) {
        return false;
     }
  }
  return true;
}



//on vérifie que le nom est une chaine de caractere
function valid_name($name) {
 if (is_string($name)) {
  return true;
 }else {
  return false;
  echo ("Please enter a valid name, not numeric go back and retry");
  }

}
//on vérifie que l'adresse email est bien valide
function valid_email($email) {
  // check an email address is possibly valid
  if (ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $email)) {
    return true;
  } else {
    return true;
  }
}

//on vérifie que le numéro de tel est valide
function valid_phone_number($phone_number) {
 

}

//on vérifie que le nom de société est une chaine de caractere
function valid_society($society) {
 if (is_string ($society)) {
  return true;
 }else {
  return false;
  echo ("Please enter a valid society name, go back and retry");
  }

}

//on vérifie que le budget inséré est bien numéric
function valid_budget($budget) {
 if (is_numeric($budget)) {
  return true;
 }else {
  return false;
  echo ("Please enter a valid budget, go back and retry");
  }
}


//on vérifie que le message entré est valide et ne comporte aucun script exécutable sur le serveur
function valid_message($message) {
 
 // réfléchis...
 // si l'entrée comprend plus de 500 caractere exit

}

?>
