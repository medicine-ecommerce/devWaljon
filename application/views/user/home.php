<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- head -->
    <meta charset="utf-8">
    <meta name="msapplication-tap-highlight" cont0ent="no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Basic usage demo">
    <meta name="author" content="David Deutsch">
    <title>
      Basic Demo | Owl Carousel | 2.3.4
    </title>

    <!-- Stylesheets -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url('assets/owlcarousel/docs.theme.min.css');?>">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url('assets/owlcarousel/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/owlcarousel/owl.theme.default.min.css');?>">
    <script src="<?php echo base_url('assets/owlcarousel/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/owlcarousel/owl.carousel.js');?>"></script>
  </head>
  <body>

   <style type="text/css">
    .container{
    width: 100%;
    height: 50%;
    }
.owl-nav button {
  position: absolute;
  top: 50%;
  background-color: #000;
  color: #fff;
  margin: 0;
  transition: all 0.3s ease-in-out;
}
.owl-nav button.owl-prev {
  left: 0;
}
.owl-nav button.owl-next {
  right: 0;
}

.owl-dots {
      position: absolute;
    bottom: 2%;
    width: 100%;
    text-align: center;
}
.owl-dots button.owl-dot {
  width: 15px;
  height: 15px;
  border-radius: 50%;
  display: inline-block;
  background: #ccc;
  margin: 0 3px;
}
.owl-dots button.owl-dot.active {
  background-color: #000;
}
.owl-dots button.owl-dot:focus {
  outline: none;
}
.owl-nav button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.38) !important;
}
span {
    font-size: 70px;    
    position: relative;
    top: -5px;
}
.owl-nav button:focus {
    outline: none;
}
.owl-stage-outer.owl-height{
  height: 300px!important;
}
.brand-heading{
  text-align: center;
  
}
.brand-slider{
  text-align: center;
  
}

.icon-slider{
  background-color: #adcedd;
}
.remove-owl-nav {
  display: none;
}

   </style>
<div class="container">
  <div class="owl-slider">
    <div id="carousel" class="owl-carousel">
      <div class="item">
        <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
      </div>
      <div class="item">
        <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
      </div>
      <div class="item">
        <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
      </div>
      <div class="item">
        <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
      </div>
        <div class="item">
        <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
      </div>
      <div class="item">
        <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
      </div>
      <div class="item">
        <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
      </div>
      <div class="item">
        <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
      </div>
        <div class="item">
        <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
      </div>
      <div class="item">
        <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
      </div>
    </div>
  </div>
  <div class="brand-heading">
    <h2>hello</h2>
  </div>
  <div class="owl-slider">
    <div id="carousel2" class="owl-carousel remove-nav">
      <div class="item">
        <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
      </div>
      <div class="item">
        <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
      </div>
      <div class="item">
        <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
      </div>
      <div class="item">
        <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
      </div>
        <div class="item">
        <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
      </div>
      <div class="item">
        <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
      </div>
    </div>
  </div>
  <div class="owl-slider">
    <div id="carousel3" class="owl-carousel">
      <div class="item">
        <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
      </div>
      <div class="item">
        <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
      </div>
      <div class="item">
        <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
      </div>
      <div class="item">
        <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
      </div>
        <div class="item">
        <img class="owl-lazy" data-src="https://i.pinimg.com/originals/84/67/26/846726299dc5abbeb5d60016f0fb32e9.jpg" alt="">
      </div>
      <div class="item">
        <img class="owl-lazy" data-src="http://desktop-backgrounds-org.s3.amazonaws.com/400x300/twitter-nature-high-definition.jpg" alt="">
      </div>
    </div>
  </div>
  
  
</div>  

    <script>
            jQuery("#carousel").owlCarousel({
            autoplay: true,
            lazyLoad: true,
            loop: true,
            margin: 20,
             /*
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            */
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 3000,
            smartSpeed: 800,
            nav: true,
            responsive: {
              0: {
                items: 1
              },

              600: {
                items: 3
              },

              1024: {
                items: 1
              },

              
            }
          });
            jQuery("#carousel2").owlCarousel({
            autoplay: true,
            lazyLoad: true,
            loop: true,
            margin: 20,
             /*
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            */
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 3000,
            smartSpeed: 800,
            nav: true,
            responsive: {
              0: {
                items: 1
              },

              600: {
                items: 3
              },

              1024: {
                items: 5
              },

              
            }
          });
            jQuery("#carousel3").owlCarousel({
            autoplay: true,
            lazyLoad: true,
            loop: true,
            margin: 20,
             /*
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            */
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 3000,
            smartSpeed: 800,
            nav: true,
            responsive: {
              0: {
                items: 1
              },

              600: {
                items: 3
              },

              1024: {
                items: 5
              },

              
            }
          });
            
            
          </script>
          
          
  </body>
</html>