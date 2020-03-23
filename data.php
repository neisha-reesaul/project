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

$name= $_POST["fullname"];
$address= $_POST["address"];
$email=$_POST["email"];
$price =filter_var($_POST["price"], FILTER_SANITIZE_NUMBER_INT); // remove $dollar sign

if(isset($_POST['btn-save'])) { 
	$sql = "INSERT INTO personal_details (name, address, email,price)
	VALUES ('$name' ,'$address' , '$email' , '$price')";

	if ($conn->query($sql) === TRUE) {
		echo "Details have been registered successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>