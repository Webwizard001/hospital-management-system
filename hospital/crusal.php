<!DOCTYPE html>
<html lang="en">
<head>
  <title>sliders</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php //header("location:index.php");  ?>
<body>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="udus1.jpg" alt="library" style="width:200%;">
        <div class="carousel-caption">
          <h3>staff</h3>
        </div>
      </div>

      <div class="item">
        <img src="img/doc1.jpg" alt="Chicago" style="width:100%;" style="height:100%;">
        <div class="carousel-caption">
          <h3>UDUS-LIBRARY</h3>
        </div>
      </div>
    
      <div class="item">
        <img src="img/doc2.jpg" alt="New York" style="width:100%;" style="height:100%;">
        <div class="carousel-caption">
          <p>We love our staff!</p>
        </div>
      </div>

      <div class="item">
        <img src="img/doc3.jpg" alt="Chicago" style="width:100%;" style="height:100%;">
        <div class="carousel-caption">
          <h3>UDUS-LIBRARY</h3>
        </div>
      </div>

      <div class="item">
        <img src="img/doc4.jpg" alt="Chicago" style="width:100%;" style="height:100%;">
        <div class="carousel-caption">
          <h3>UDUS-LIBRARY</h3>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>