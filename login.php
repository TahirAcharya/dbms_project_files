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

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve data from the form
        $email = $_POST["email"];
        $password = $_POST["password"];

        // SQL query to check if the user exists
        $sql = "SELECT * FROM students WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
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
