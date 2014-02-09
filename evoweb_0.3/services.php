<?php
  require("docs-assets/multilangue/langue.php");
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Votre solution web adpaté à votre stratégie marketing, participez !.">
    <meta name="author" content="">
    <? include("docs-assets/php/includes/content_style.php");?>

    <title>agence web liège / marketing digital / stratégies web, online marketing,/ SEM, SEO, web 2.0 / liège</title>
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


   <!--The carousel-->
    <?php 
        include("docs-assets/php/includes/content_carousel_slider_services.php"); 
    ?>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

     <!--Services-->
     
    <?php 
        include("docs-assets/php/includes/content_block_services.php"); 
    ?>
    <!--Wordpress Services-->
    <?php 
        include("docs-assets/php/includes/content_block_wordpress_services.php"); 
    ?>
     
    
  
    </div>

         <div class="col-md-3">
          <h2>Efficace</h2>
          <p>Grâce à cette solution vous disposez d’une autonomie de gestion tant sur la forme que sur le fond.
Le système est développé en PHP et est basé sur l’utilisation de pages générées à partir d’une base de données MYSQL.

Cependant il ne nécessite aucune compétence particulière en informatique.
Aucun logiciel ne sera installé sur votre machine, l’accès à l’interface de gestion se fait via votre navigateur internet. </p>
     
         </div>   
    



   

    <?php
        include ("docs-assets/php/includes/content_block_social.php");
    ?>
     <hr class="featurette-divider">
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
