<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_details";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email=$_POST["email_add"];

if(isset($_POST['btn-save'])) { 
	$sql = "select name from registration_process where email ='$email'";
	if ($conn->query($sql) === TRUE) {
		echo file_get_contents("message.html");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>