<?php

// include function files for this application
require_once("docs-assets/php/process/auth_fns.php");
require("docs-assets/multilangue/langue.php");
session_start();

//create short variable names
$username = $_POST['username'];
$passwd = $_POST['passwd'];

if ($username && $passwd) {
// they have just tried logging in
  try  {
    login($username, $passwd);
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $username;
   
    
  }
  catch(Exception $e)  {
    // unsuccessful login
    do_html_header('Problem:');
    echo 'You could not be logged in.
          You must be logged in to view this page.';
    do_html_url('signin.php', 'Login');
    do_html_footer();
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <? include("docs-assets/php/includes/content_style.php");?>
    <title>agence web liège / strategic digital agency / emarketing specialist, marketing interactif, online marketing / evoweb</title>
    <!--google analystic-->
    <?php include("docs-assets/php/includes/content_google_analystic.php");?>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="docs-assets/css/evoweb.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <!--La barre de Navigation-->
    <?php include("docs-assets/php/includes/content_navigation.php") ?>


    
    <?php 
        include("docs-assets/php/includes/content_carousel_slider_signin.php"); 
    ?>


      <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      

   <h3 style="text-align:center;">Télécharger notre Pack !  <?echo $username;?> !</h3>
    
        <?php 
        include("docs-assets/php/includes/content_block_about.php"); 
        ?>
        <!-- START FAST PHYLOSOPHY -->

            
    </div><!-- /.container -->
    <hr class="featurette-divider">
    
        <?php 
        include("docs-assets/php/includes/content_block_about_social.php"); 
        ?>
      <hr class="featurette-divider">
   <!--Footer-->
    <?php 
    include("docs-assets/php/includes/content_footer.php");
    ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="docs-assets/js/holder.js"></script>
    <script src="docs-assets/js/evo_functions.js"></script>
  </body>
</html>



