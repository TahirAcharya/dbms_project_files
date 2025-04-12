<?php
session_start();
include 'connection.php';
  

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve data from the form
        $email = $_POST["email"];
        $password = $_POST["password"];

        // SQL query to check if the user exists
        $sql = "SELECT * FROM students WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION['userid'] = $_POST['email'];
            $_SESSION['username'] = $row['studentname'];
            // User found, redirect to dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            // User not found, redirect back to login with error message
            header("Location: index.php?error=invalid"); // error sent to index.php via GET method
            exit();
        }
    }

    // Close the database connection
    mysqli_close($conn);
?>
