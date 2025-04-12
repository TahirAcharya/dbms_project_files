<?php
 // Database connection details
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database_name = "project";

 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $database_name);

 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
?>