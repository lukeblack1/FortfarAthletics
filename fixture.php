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
<table style="table width:50%">
  <tr>
    <th></th>
      <th><center>Score</center></th>
      <th></th>
      <th></th>
		
	
	    
    
  </tr>
  <tr>
   <?php # DISPLAY COMPLETE LOGGED IN PAGE.



# Set page title and display header section.
$page_title = 'Home' ;

 
require ('private/connect_db.php');

# Retrieve items from 'products' database table.
$q = "SELECT * FROM fixture" ;
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
          
          <td>".$row["team1"]. "</td><td>" ;


      
      

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
</body>

    
    <?php
include ( 'includes/footer.php' ) ;
?>
    
</html>

