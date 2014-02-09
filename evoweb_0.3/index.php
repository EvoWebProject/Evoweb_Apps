<?php
  require("docs-assets/multilangue/langue.php");
  // include function files for this application
  require_once('docs-assets/php/process/auth_fns.php');
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
    do_html_url('../../../signin.php', 'Login');
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
    <meta name="description" content="Une agence de digital marketing, stratégie web digitale à la portée de tous,consultance au centre de Liège.">
    <? include("docs-assets/php/includes/content_style.php");?>

    <title>evoweb agence web liège / online marketing /strategic online agency /Consulting</title>
      <!--google analystic-->
    <?php include("docs-assets/php/includes/content_google_analystic.php");?>
    
  
 
  </head>
<!-- NAVBAR
================================================== -->
  <body>
  <?php include("docs-assets/php/includes/content_navigation.php") ?>


  <?php include("docs-assets/php/includes/content_carousel_slider_index.php") ?> 



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

    
    <?php 
    include("docs-assets/php/includes/content_block_fast_phylosophy.php");
    ?>

  

    

    <!-- START MORE PHYLOSOPHY -->  
    <?php 
    include("docs-assets/php/includes/content_block_more_phylosophy.php");
    ?>

     

    <!-- START BLOCK SOCIAL --> 
    <?php 
    include("docs-assets/php/includes/content_block_social.php");
    ?>
        
     <hr class="featurette-divider">
  

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
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
