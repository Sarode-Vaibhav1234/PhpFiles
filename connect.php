<?php
$host = 'localhost';        
$username = 'root'; 
$password = ""; 
$dbname = 'AttendanceDB';  

// Create a connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{

    echo"success";
}
?>
