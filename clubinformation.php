<!--
Luke Black 
Ec1405935@edinburghcollege.ac.uk
20th May 2019-->

<?php
include ( 'includes/headerout.php' ) ;
?>

<!DOCTYPE html>
<html lang="en">
<p5><a class="nav-link active" href="newsletter.php">Subscribe to News Letter </a></p5>
<head>
   
    
    <style>
    
   p5 {
    position:absolute;
    top:20%;
    left:80%;
    font-size: 30px;  
}
        
    
   p2 {
    position:absolute;
    top:25%;
    left:25%;
    font-size: 20px;
} 
    
    
    </style>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
     
    <p>
    
    <iframe width="300" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJIRRUEJpjhkgRqYJeINrDuzs&key=AIzaSyAYu-raI5D-yNp5dQuW1JQsOptA52M0BaA" allowfullscreen></iframe>
        
        

</p>
    
    <p2>
    <b>
       <br> Station Park Carseview Road <br> Forfar <br> DD8 3BT
    </b>

</p2>

<div class="container">
  <h2>Gallery</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/pic1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/pic2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/pic3.jpg" alt="New york" style="width:100%;">
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
    
     <?php
include ( 'includes/footer.php' ) ;
?> 
</html>