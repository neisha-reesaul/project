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

        $result = $conn->query("SELECT email FROM registration_process WHERE email = '$email'");
        $username=$conn->query("select name from registration_process where email= '$email'");
        if($result->num_rows == 0) {
             echo file_get_contents("form-registration.html");
        } else {
            if($username==true){
                echo file_get_contents("homepage.html");
            }
        }
}

$conn->close();
?>