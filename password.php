<!--
Luke Black 
Ec1405935@edinburghcollege.ac.uk
20th May 2019-->

<?php include ( 'includes/headerout.php' ) ;
include ( 'css/useraccount.css' ) ;

?>

<?php
# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Password' ;



# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('private/connect_db.php'); 
  
  # Initialize an error array.
  $errors = array();
  # Check for an email address:
  if ( empty( $_POST[ 'email' ] ) )
  { $errors[] =  'Enter your email address.'; }
  else
  { $e = mysqli_real_escape_string( $link, trim( $_POST[ 'email' ] ) ) ; }
  # Check for a password and matching input passwords.
  if ( !empty($_POST[ 'pass' ] ) )
  {
    if ( $_POST[ 'pass' ] != $_POST[ 'pass2' ] )
    { $errors[] = 'Passwords do not match.' ; }
    else
    { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'pass' ] ) ) ; }
  }
  else { $errors[] = 'Enter your password.' ; }
  
  # Check if email address already registered.
  if ( empty( $errors ) )
  {
    $q = "SELECT * FROM users WHERE email='$e'" ;
    $r = @mysqli_query ( $link, $q ) ;
    
  }
  
  # On success new password into 'users' database table.
  if ( empty( $errors ) ) 
  {
    $q = "UPDATE users SET pass= SHA1('$p') WHERE email='$e'";
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    { echo '<div class="container"><div class="alert alert-dark alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
	</h1><strong>Success!</strong></h1><p>Password changed</p>'; }
  
    # Close database connection.
    mysqli_close($link); 
    exit();
  }
  # Or report errors.
  else 
  {  
    echo ' <div class="container"><div class="alert alert-dark alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
	<h1><strong>Error!</strong></h1><p>The following error(s) occurred:<br>' ;
    foreach ( $errors as $msg )
    { echo " - $msg<br>" ; }
    echo 'Please try again.</div></div>';
    # Close database connection.
    mysqli_close( $link );
  }  
}

?>

<!-- Display body section. -->

<div class="container py-5">
  <div class="row">
    <div class="col-md-12">
        <h2 class="text-center text-white mb-4">Change Password</h2>
        <div class="row">
          <div class="col-md-6 mx-auto">
            <!-- form change password -->
            <div class="card rounded-0">
              <div class="card-header bg-dark text-light">
			   <h3 class="mb-0">Change Password</h3>
              </div>
			 
			<div class="card-body">
			 <form class="form" role="form" autocomplete="off" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="post">	
			 
			  <div class="form-group">
			<label for="email">Email</label>
				<hr>
				<input type="text" 
				class="form-control form-control-lg " 
				placeholder="Confirm Email" 
				name="email" 
				size="20" 
				value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required>
				<hr>
	</div>
				<div class="form-group">
				 <label for="pass">New Password</label>
				 <hr>
					<input type="password" 
						class="form-control form-control-lg" 
						placeholder="New Password" 
						name="pass" 
						required size="20" 
						value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>" required>
				 <hr>
				</div>
				<div class="form-group ">		
					<label for="password">Confirm Password</label>
					<input type="password" 
					class="form-control form-control-lg" 
					placeholder="Confirm Password" 
					name="pass2" 
					required size="20" 
					value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>" required>
		<hr>	
	</div>
			</div>
		
		<div class="card-footer">		
		  <div class="row">
			<div class="col-lg-12 col-md-12 mb-12">
			  <div class="form-group">
				<input class="btn btn-info btn-lg btn-block" type="submit" value="Change Password">
			  </div>
			</div>
		  </form>
		  <hr>
	</div>	
		</form>

</body>
</html>

