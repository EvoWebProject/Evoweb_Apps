 <!-- Index Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="docs-assets/img/black.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><? echo $slider_welcome1 ?></h1>
              <h3><? echo $slider_welcome_slogan1 ?></h3>
             <a href="https://twitter.com/Evoweb_Team" class="twitter-follow-button" data-show-count="false" data-lang="fr" data-size="large">Suivre @Evoweb_Team</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="docs-assets/img/black.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><? echo $slider_welcome1 ?></h1>
              <h3><? echo $slider_welcome_slogan1 ?></h3>
              <p><a class="btn btn-lg btn-primary" href="contact.php" role="button"><? echo $btn_contact ?></a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <!--<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide">-->
          <img src="docs-assets/img/black.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><? echo $slider_welcome1 ?></h1>
              <h3><? echo $slider_welcome_slogan1 ?></h3>
              <p><a class="btn btn-lg btn-primary" href="contact.php" role="button"><? echo $btn_contact ?></a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->