<!--
Luke Black 
Ec1405935@edinburghcollege.ac.uk
20th May 2019-->

<?php # DISPLAY ADDITIONS PAGE.

# Access session.
session_start() ;

# Set page title and display header section.
$page_title = 'Cart Addition' ;
include ( 'includes/headerout1.php' ) ;

# Get passed product id and assign it to a variable.
if ( isset( $_GET['price'] ) ) $id = $_GET['price'] ; 

# Open database connection.
require ( 'private/connect_db.php' ) ;

# Retrieve selective item data from 'movie' database table. 
$q = "SELECT * FROM Subscription WHERE price = $price" ;
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) == 1 )
{
  $row = mysqli_fetch_array( $r, MYSQLI_ASSOC );

  # Check if cart already contains one movie id.
  if ( isset( $_SESSION['cart'][$id] ) )
  { 
# Add one more of this product.
    $_SESSION['cart'][$id]['quantity']++; 
    echo '<div class="container">
			<div class="table-responsive">
				<table class="table">
				<thead class="thead-dark">
				<tr>
				<th scope="col">Subscription</th>
				<th scope="col">Sub</th>
				<th scope="col">Price</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>'. $row['price'].'</td>
					<td><a href="cart.php"> <button type="button" class="btn btn-secondary" role="button"> ' . $row['price'] . '</button></a>
					<a href="cart1.php"> <button type="button" class="btn btn-secondary" role="button">' . $row['price'] . '</button></a></td>
					<td> £ ' . $row['price'] . '</td>
				</tr>
				</tbody>
				</table>
					
			</div>
		  </div>';
  }
else
  {
    # Or add one of this product to the cart.
    $_SESSION['cart'][$id]= array ( 'quantity' => 1, 'price' => $row['price'] ) ;
 echo '<div class="container">
			<div class="table-responsive">
				<table class="table">
				<thead class="thead-dark">
				<tr>
				<th scope="col">Sub</th>
				<th scope="col">Sub</th>
				<th scope="col">Price</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>'. $row['price'].'</td>
					<td><a href="cart.php"> <button type="button" class="btn btn-secondary" role="button"> ' . $row['price'] . '</button></a>
					<a href="cart1.php"> <button type="button" class="btn btn-secondary" role="button">' . $row['price'] . '</button></a></td>
					<td> £ ' . $row['price'] . '</td>
				</tr>
				</tbody>
				</table>
					
			</div>
		  </div>';
  }
}

# Close database connection.
mysqli_close($link);
?>
  