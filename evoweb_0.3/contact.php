<?php
  require("docs-assets/multilangue/langue.php");
  //require("docs-assets/php/process/insert_lead.php");
  //require('docsprocess/leads_fns.php');
 // define variables and set to empty values


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Un devis dans le domaine du marketing digitale et stratégique ? contactez Evoweb pour des conseils SEO et stratégies médias.">
    <meta name="author" content="">
    <? include("docs-assets/php/includes/content_style.php");?>

    <title>Contact</title>

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
<!--The carousel-->
    <?php 
        include("docs-assets/php/includes/content_carousel_slider_contact.php"); 
    ?>
  

     <div class="container">
     <div class="row">
     <!--Colonne gauche-->
        <?php 
        include("docs-assets/php/includes/content_left_column_contact.php"); 
        ?>

        <!--Colonne central-->
        <div class="col-md-6">
        <?php
        include ("docs-assets/php/includes/content_form_contact_opt.php");
        ?>
        </div>

         <!--Colonne droite-->
        <?php 
        include("docs-assets/php/includes/content_right_column_contact.php"); 
        ?>

      </div> <!-- /container -->
      </div>
   
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
