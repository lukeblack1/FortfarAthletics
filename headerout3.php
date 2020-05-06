<!DOCTYPE html>
<html>
<head>
    
  
 
  <!-- Required meta tags -->
	
   

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="navbar">
    <img src="img/fort.png">
  <a class="nav-link active" href="logout.php">Logout</a>
 <a class="nav-link active" href="index2.php">Home</a>
     <a class="nav-link active" href="team.php">Player Details for the team</a>
    <a class="nav-link active" href="leagueandcupdetailstest.php">Game fixtures and League and cup updates</a>
    
    <a class="nav-link active" href="gamefixtures.php">Match Report</a>
    
		  <a class="nav-link active" href="clubinformation.php">Weekly news Letter with current club information</a>
		  <a class="nav-link active" href="event.php">List of cooperate events</a>
  
   
  </div>
  </div> 
</div>



<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
</body>
</html>