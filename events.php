<!--
Luke Black 
Ec1405935@edinburghcollege.ac.uk
20th May 2019-->

<?php # DISPLAY COMPLETE LOGGED IN PAGE.



# Set page title and display header section.
$page_title = 'Events' ;
include ( 'includes/headerout1.php' ) ;
 
require ('private/connect_db.php');

# Retrieve items from 'products' database table.
$q = "SELECT * FROM event" ;
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) > 0 )
{
 # Display body section.
  echo '<div class="container">
		<h1 class="display-4 text-muted">Subscription Packages</h1>
			<div class="card-body">
				<div class="row">
				
			';
  while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
  {
    echo '<div class="col-md-3 col-sm-12">
			<div class="card w-100 text-white bg-dark mb-4"><img class="card-img-top" src='. $row['image'].'>
				<div class="card-body">
					<h6 class="card-title text-center"> <a href="added.php?id='.$row['user_id'].'"><button type="button" class="btn btn-link">' . $row['event'] .'</button></a>
					<h6 class="card-title text-center"> ' . $row['date'] . ' / ' . 
				</div>
			</div>
		 </div>';
			 }
  echo '</div></div>';
  
  # Close database connection.
  mysqli_close( $link ) ; 
}
# Or display message.
else { echo '<p>No subs available.</p>' ; }


?>
</body>
</html>