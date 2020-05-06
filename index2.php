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

<?php 
include ( 'includes/headerout.php' ) ;

include ( 'css/stylesheetindex2.css' ) ;

   
?>

<!DOCTYPE html>
<html>
    
    

 




   
<body>

<div class="bg-image img1"></div>
<div class="bg-image img2"></div>
<div class="bg-image img3"></div>
<div class="bg-image img4"></div>
<div class="bg-image img5"></div>
<div class="bg-image img6"></div>




    <form method="get" action="paypal.php">
        <button type="submit"><div class="bg-text">Subscribe</div></button>
</form>
    </div>
    </body>
</html>



