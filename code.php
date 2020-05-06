<!--
Luke Black 
Ec1405935@edinburghcollege.ac.uk
20th May 2019-->

<?php
session_start();


$connection = mysql_connect('private/connect_db.php');

if(isset($_POST['registerbtn']))
{
	$username= $_POST['username'];
	$email= $_POST['email'];
	$password= $_POST['password'];
	$cpassword= $_POST['confirmpassword'];
	
if($password === $cpassword))
{
		
	
	$query = "INSERT INTO register (username,email,password) VALUES('$username','$email', $password' )";
	$query_run= mysqli_query($connection, $query);

	
	
	if ($query_run)
	{
		//echo " saved";
		$_Session['success'] = "Admin Profile Added";
		header('Location: register.php');
		
	}
	else
	{
		
	//echo "not saved";
		$_Session['status'] = "Admin Profile NOT Added";
		header("Location: register.php");
	}
}
else
	{
	$_Session['status'] = "Password and confirm password does not match";
		header("Location: register.php");
	}
}
	
?>

