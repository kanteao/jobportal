<!DOCTYPE html>
<html>
<head>
  <title>carousel</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <link href="css/bootstrap-social.css" rel="stylesheet">
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
  <style>
.carousel {
   
    overflow: hidden;
}
.carousel .item {
    -webkit-transition: opacity  5s ease-in;
    -moz-transition: opacity  5s ease-in;
    -ms-transition: opacity  5s ease-in;
    -o-transition: opacity  5s ease-in;
    transition: opacity  5s ease-in;
}

  </style>
</head>
<body>
<div class="container">
  <div class="row">
  <div id="myCarousel" class="carousel  slide">
  <!-- Dot Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Items -->
  <div class="carousel-inner">
    <div class="active item">  <img src="images/slide1.jpg" class="img-responsive"></div>
    <div class="item">  <img src="images/slide2.jpg" class="img-responsive"></div>
    <div class="item">  <img src="images/slide3.jpg" class="img-responsive"></div>
  </div>
  <!-- Navigation -->
   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
</div>
  </div>
</div>
<script>
$(document).ready(function() {
    $('.carousel').carousel({interval: 5000});
  });
</script>
</body>
</html>
