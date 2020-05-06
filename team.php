<!--
Luke Black 
Ec1405935@edinburghcollege.ac.uk
20th May 2019-->

<?php # DISPLAY COMPLETE LOGGED IN PAGE.
# Access session.
session_start() ; 
# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

?>
<!DOCTYPE html>
<html>
    <body>
        
    


<?php # DISPLAY COMPLETE LOGGED IN PAGE.



# Set page title and display header section.
$page_title = 'Team' ;
include ( 'includes/headerout.php' ) ;
        include ( 'includes/headerteam.php' ) ;
 
require ('private/connect_db.php');

# Retrieve items from 'products' database table.
$q = "SELECT * FROM FootballPlayers" ;
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
    echo '<div class="col-md-3 col-sm-12">
			<div class="card w-100 text-white bg-dark mb-4"><img class="card-img-top" src='. $row['Image'].'>
				<div class="card-body">
					<h6 class="card-title text-center"> <a href="https://www.forfarathletic.co.uk/players"?id='.$row['Position'].'"><button type="button" class="btn btn-link">' . $row['Player Name'] .'</button></a>
					<h6 class="card-title text-center">Position: ' . $row['Position'] . ' / ' . $row ['Date of Birth'] . '</h2>
				</div>
			</div>
		 </div>';
			 }
  echo '</div></div>';
  
  # Close database connection.
  mysqli_close( $link ) ; 
}
# Or display message.
else { echo '<p>Error not working try index dot php </p>' ; }


?>
        </body>
    
    <?php
include ( 'includes/footer.php' ) ;
?>
    
</html>