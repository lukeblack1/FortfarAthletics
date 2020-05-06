<?php # DISPLAY COMPLETE LOGGED IN PAGE.
# Access session.
session_start() ; 
# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

?>
<!doctype html>
<html lang="en">
  <head>
  
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/stylesheet.css">
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </head>
 <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html">ECinema</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
       
      </li>
      <li class="nav-item">
      
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Logout
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       
          <div class="dropdown-divider"></div>
      
		  <a class="nav-link active" href="logout.php">Logout</a>
        </div>
      </li>
      <li class="nav-item">
      
      </li>
    </ul>
    
  </div>
</nav>
  
  
 <ul class="nav">
	  <li class="nav-item">
		<a class="nav-link active" href="whatson.php ">Whats On</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="comingsoon.php">Coming Soon</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="drinksandsnacks.php">Drinks and Snacks</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="login.php">Book Now</a>
	  </li>
  <li class="nav-item">
		<a class="nav-link" href="review.php">Review</a>
	  </li>
</ul>