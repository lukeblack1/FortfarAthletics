<!DOCTYPE html>
<html>
    
   
<head>


<?php 

include ( 'includes/headerout.php' ) ;
include ( 'css/stylesheetresults2.css' ) ;
  

?>

</head>

<body>
    
    
    <center><h1>Game fixtures and League and Cup updates</h1></center>
<center>
<table style="table width:50%">
  <tr>
    <th>Team</th>
      <th><center></center></th>
      <th></th>
      <th>Team</th>
      <th></th>
      
      <th><center>League</center></th>
          
      <th></th>
      
	
	    
    
  </tr>
  <tr>
   <?php # DISPLAY COMPLETE LOGGED IN PAGE.



# Set page title and display header section.
$page_title = 'Home' ;

 
require ('private/connect_db.php');

# Retrieve items from 'products' database table.
$q = "SELECT * FROM League ORDER BY Date" ;
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) > 0 )
{
 # Display body section.
  echo '<div class="container">
		<h1 class="display-4 text-muted"> </h1>
			<div class="card-body">
				<div class="row">
				
			';
			
  while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
  {
	  
		
            
		  echo "<tr><td>" . $row["Team"]. "</td><td>" . $row["Result"]. "</td>
          
          <td>".$row["Oppenent"]. "</td><td>" . $row["Opponent"]."</td><td>".$row["Date"]."</td><td>".$row["League"]."</td><td>";


      
      

			 }
  echo '</table>';
    
    
  # Close database connection.
  mysqli_close( $link ) ; 
}
# Or display message.
else { echo '<p>There are currently no results.</p>' ; }

?>
  </tr>
</table>
    </center>
    

<table style="float:right">
 
  <tr>
      
    <th>Name</th>
	  <th>Won</th>
		<th>Lost</th>
	  <th></th>
	    <th>Drawn</th>
		<th>Against</th>
	  <th>Goal Difference</th>
      <th>Points</th>
	  <th>Points</th>
	
	    
    
  </tr>
  <tr>
   <?php # DISPLAY COMPLETE LOGGED IN PAGE.



# Set page title and display header section.
$page_title = 'Home' ;

 
require ('private/connect_db.php');

# Retrieve items from 'products' database table.
$q = "SELECT * FROM results" ;
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) > 0 )
{
 # Display body section.
  echo '<div class="container">
		<h1 class="display-4 text-muted"> </h1>
			<div class="card-body">
				<div class="row">
				
			';
			
  while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
  {
	  
		
            
		  echo "<tr><td>" . $row["team"]. "</td><td>" . $row["won"] . "</td><td>". $row["lost"]. "</td><td>" . $row["played"]. "</td><td>" .$row["Drawn"] . "</td><td>" .$row["Against"] . "</td><td>" .$row["Goaldifference"]. "</td><td>" . $row["Points"]."</td><td>";


      
      

			 }
  echo '</table>';
  
  # Close database connection.
  mysqli_close( $link ) ; 
}
# Or display message.
else { echo '<p>There are currently no movies showing at this cinema.</p>' ; }

?>
  </tr>

    </table>
    
    <table style="margin-top:-50px; margin-left:50px;">
  <tr>
    <th></th>
      <th><center>Score</center></th>
      <th></th>
      <th></th>
      <th></th>
      
	
	    
    
  </tr>
  <tr>
   <?php # DISPLAY COMPLETE LOGGED IN PAGE.



# Set page title and display header section.
$page_title = 'Home' ;

 
require ('private/connect_db.php');

# Retrieve items from 'products' database table.
$q = "SELECT * FROM fixture ORDER BY date" ;
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) > 0 )
{
 # Display body section.
  echo '<div class="container">
		<h1 class="display-4 text-muted"> </h1>
			<div class="card-body">
				<div class="row">
				
			';
			
  while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
  {
	  
		
            
		  echo "<tr><td>" . $row["team"]. "</td><td>" . $row["result"]. "</td>
          
          <td>".$row["team1"]. "</td><td>" . $row["date"]."</td><td>";


      
      

			 }
  echo '</table>';
    
    
  # Close database connection.
  mysqli_close( $link ) ; 
}
# Or display message.
else { echo '<p>There are currently no results.</p>' ; }

?>
  </tr>
</table>
    
    
    
</body>

    
    <?php
include ( 'includes/footer.php' ) ;
?>
    
</html>

