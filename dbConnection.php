<?php
$db_host = "localhost:3307";
$db_user = "root";
$db_password = "";
$db_name = "elearning";

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
} 
// else {
//  echo"connected";
// }
?>