<!--
Luke Black 
Ec1405935@edinburghcollege.ac.uk
20th May 2019-->
<?php





// Create connection
$conn = new mysqli('localhost','HNDSOFTS2A26','nnBp8bDHqL','HNDSOFTS2A26'); 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users SET subscribed= 'subscribed';"

if ($conn->query($sql) === TRUE) {
    echo " ";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 