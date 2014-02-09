<!-- About Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="docs-assets/img/black.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><? echo $slider_welcome1 ?></h1>
              <h3><? echo $slider_welcome_slogan1 ?></h3>
                   <p><a class="btn btn-lg btn-primary" href="contact.php" role="button"><? echo $btn_contact ?></a></p>
            </div>
          </div>
        </div>
        <div class="item">

          <img src="docs-assets/img/black.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><? echo $slider_welcome1 ?></h1>
              <h3><? echo  $slider_welcome_slogan1 ?></h3>
              <p><a class="btn btn-lg btn-primary" href="contact.php" role="button"><? echo $btn_contact ?></a></p>
            </div>
          </div>
        </div>
        
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

   