  <div class="navbar-wrapper" id="start">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!--<a class="navbar-brand" href="#"><img src="docs-assets/img/evoweb_logo.png"></a>-->
               <a class="brand" href="index.php" style="float:left; margin-right:10px; margin-top:10px;"><img src="docs-assets/img/logo_evoweb.png" alt="EvoWeb Logo" title="EvoWeb Logo"></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="about.php"><? echo $nav_str_about?></a></li>
                
                <li><a href="services.php#"><? echo $nav_str_services?></a></li>
                <li><a href="register.php#">Download</a></li>
                <li><a href="contact.php#"><? echo $nav_str_contact?></a></li>
                 <li><a href="#"><? echo $username?></a></li>
                

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><? echo $nav_str_languages?><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="?lang=en"><? echo $nav_str_English ?></a></li>
                    <li><a href="?lang=fr"><? echo $nav_str_French ?></a></li>
                    
                  </ul>
                </li>
              </ul>
            
         
          
          


              </div>

            </div>

          </div>

        </div>
<?php include("docs-assets/php/includes/content_social_links.php");?>
      </div>

    </div>
 

