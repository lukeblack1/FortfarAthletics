<!--
Luke Black 
Ec1405935@edinburghcollege.ac.uk
20th May 2019-->

<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Session Set</title>
</head>
<body>
<?php
function reject( $entry )
{
    echo "Invalid $entry <br>" ;
    echo 'Please <a href="session_form.html">Log In</a>' ;
    exit() ;
}
if( isset( $_POST[ 'user' ] ) )
{
  $user = trim( $_POST[ 'user' ] ) ;
  if( !ctype_alpha( $user ) ) { reject( 'User Name' ) ; }
  if( isset( $_POST[ 'pass' ] ) )
  {
    $pass = trim( $_POST[ 'pass' ] ) ;
    if( !preg_match( '/^[A-Za-z0-9._]{8,}$/' , $pass ) ) { reject( 'Password' ) ; }
    else
    {
      $_SESSION[ 'user' ] = $user ;
      $_SESSION[ 'pass' ] = $pass ;
      header('Location: session_get.php') ;
    }
  }
}
else { header('Location: session_form.html') ; }
?>
</body>
</html>