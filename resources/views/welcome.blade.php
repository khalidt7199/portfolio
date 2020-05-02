<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="stylesheet" href="owl/css/docs.theme.min.css">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="owl/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owlcarousel/assets/owl.theme.default.min.css">

   
    <script src="owl/vendors/jquery.min.js"></script>
    <script src="owl/owlcarousel/owl.carousel.js"></script>
  </head>
  <body>

  
    <!--  Demos -->
    <section id="demos">
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <h4>1</h4>
            </div>
            <div class="item">
              <h4>2</h4>
            </div>
            <div class="item">
              <h4>3</h4>
            </div>
            <div class="item">
              <h4>4</h4>
            </div>
            <div class="item">
              <h4>5</h4>
            </div>
          </div>
          <a class="button secondary play">Play</a> 
          <a class="button secondary stop">Stop</a> 
          <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true
              });
              $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
              })
              $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
            })
          </script>
        </div>
      </div>
    </section>
    <!-- vendors -->
    <script src="owl/vendors/highlight.js"></script>
    <script src="owl/js/app.js"></script>
  </body>
</html>