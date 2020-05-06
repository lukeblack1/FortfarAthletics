<!--
Luke Black 
Ec1405935@edinburghcollege.ac.uk
20th May 2019-->

<!DOCTYPE html>
<html>
<head>


<?php 

include ( 'includes/headerout.php' ) ;
include ( 'css/stylesheetresults.css' ) ;

   
?>

</head>

<body>
<center>
<table style="width:50%">
  <tr>
    <th>Name</th>
	  <th>Won</th>
		<th>Lost</th>
	  <th></th>
	    <th>Drawn</th>
		<th>Against</th>
	  <th>Goal Difference</th>
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
	  
		
            
		  echo "<tr><td>" . $row["team"]. "</td><td>" . $row["won"] . "</td><td>". $row["lost"]. "</td><td>" . $row["played"]. "</td><td>" .$row["Drawn"] . "</td><td>" .$row["Against"] . "</td><td>" .$row["Goaldifference"]. "</td><td>" . $row["Points"]."</td><td>". "</td><td>";


      
      

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
    </center>
</body>
    
    <?php
include ( 'includes/footer.php' ) ;
?>

</html>