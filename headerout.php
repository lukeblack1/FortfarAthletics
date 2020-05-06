
<?php # DISPLAY COMPLETE LOGGED IN PAGE.
# Access session.
session_start() ; 
# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ]  ) ) { require ( 'login_tools.php' ) ; load() ; }

echo "<p>You are now logged in as: {$_SESSION['first_name']} {$_SESSION['last_name']} You have: {$_SESSION['subscribed']} </p>";
?>

<!DOCTYPE html>
<html>



  

<?php 

include ( 'includes/headerout3.php' ) ;
    include ( 'includes/footer.php' ) ;
    include ( 'css/headeroutstyle.css' ) ;


   
?>
    
    


  
  

