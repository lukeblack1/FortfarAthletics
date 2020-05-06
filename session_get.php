<!--
Luke Black 
Ec1405935@edinburghcollege.ac.uk
20th May 2019-->

<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Session Get</title>
</head>
<body>
<?php
if( isset( $_SESSION[ 'user' ] ) )
{
    $user = $_SESSION[ 'user' ] ;
    echo "<h1>Welcome $user !</h1><hr>";
    echo '<a href="session_data.php">View Session</a>' ;
}
else
{
    echo 'Please <a href="session_form.html">Log In</a>' ;
}
?>
</body>
</html>