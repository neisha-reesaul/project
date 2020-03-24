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
$pass=$_POST["password"];

if(isset($_POST['sign-in-btn'])) { 

        $result = $conn->query("SELECT email FROM personal_details WHERE email = '$email'");
        if($result->num_rows == 0) {
             echo file_get_contents("form-registration.html");
        } else {
            echo file_get_contents("homepage.html");
        }
}

$conn->close();
?>