<?php
include 'connection.php';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve data from the form
        $name = $_POST["Name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $usertype = $_POST["usertype"];
        
        $reg_date = date("Y-m-d H:i:s"); // Current date and time

        // SQL query to insert data into the student table
        $sql = "INSERT INTO students VALUES (NULL,'$name', '$email', '$password', '$reg_date',' $usertype')";

        if (mysqli_query($conn, $sql))  // either true or false    1 or zero
        {
            // Data inserted successfully, redirect to login.php
            header("Location: index.php?error=Signup success");


// <script>window.location = 'login.php';</script>


            // echo "";

            exit(); // Ensure that no further code is executed after the redirect
        } else {
            echo "<div class='alert alert-danger' role='alert'>
            Error: " . $sql . "<br>" . mysqli_error($conn) . "
          </div>";
        }
    }

    // Close the database connection
    mysqli_close($conn);
?>
