<?php # DISPLAY COMPLETE LOGGED IN PAGE.
# Access session.
session_start() ; 
# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }
include ( 'includes/headerin.html' ) ;
?>
