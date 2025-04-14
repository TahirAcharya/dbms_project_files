<?php
session_start();


if(isset($_SESSION['username']))
{
    header("Location: dashboard.php");
    exit();
}
else
{

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .shadow_card {
        border-radius: var(--bs-border-radius) !important;
        border-top-left-radius: 1px;
        border-top-right-radius: 1px;
        border-bottom-right-radius: 1px;
        border-bottom-left-radius: 1px;
    }


    /*.container {*/
    /*    max-width: 800px;*/
    /*    margin: 50px auto;*/
    /*    background-color: #fff;*/
    /*    padding: 20px;*/
    /*    border-radius: 8px;*/
    /*    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);*/
    /*}*/

    .container {
        max-width: 42%;
        margin-left: 72px;
        float: left;
        padding-left: 100px;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    #result {
        margin-top: 20px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Project Name</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>


    <div class="container ">
        <div class="row justify-content-center py-2 ">

        <div class="alert-dismissible fade show pt-4" role="alert">
                        <?php 
    if(isset($_GET['error']))
    {
      echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>".$_GET['error']."</div>";
    }
   ?>
                    </div>
            <div class=" col-md-10   ">
                <h1>LOGIN</h1>

                <form action="login.php" method="post">

                    <!-- email   -->
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>

                        <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <!-- password -->
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <!-- submit button -->
                    <button type="submit" class="btn btn-primary">Submit</button>

                    
                </form>
            </div>
        </div>
    </div>
    <!-- login screen ended -->



    <!-- signup screen started -->
    <div class="container ">
        <div class="row justify-content-center py-2 ">
        <div class="alert-dismissible fade show pt-4" role="alert">
                        <?php 
    if(isset($_GET['error_signup']))
    {
      echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>".$_GET['error_signup']."</div>";
    }
   ?>
                    </div>

            <div class=" col-md-10   ">
                <h1>SIGNUP</h1>

                <form action="signup.php" method="post">
                    <!-- Send data via form (POST) method OR  Send data via URL(GET) method -->
                    <!-- Name  -->
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>

                        <input type="name" class="form-control" id="exampleInputName" name="Name"
                            aria-describedby="NameHelp" required>

                        <div id="NameHelp" class="form-text">Enter a full name</div>
                    </div>

                    <!-- Email   -->
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>

                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                            aria-describedby="emailHelp" required>

                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
                    </div>

                    <!-- Select faculty or student -->
                    <div class="form-group mb-3">

                        <label for="inputGroupSelect01" class="form-label">User Type</label>
                        <select class="form-control" id="inputGroupSelect01" name="usertype" required>

                            <option selected>Select Type of User</option>
                            <option value="admin">Admin</option>
                            <option value="student">Student</option>
                            <option value="faculty">Faculty</option>
                        </select>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">Agree to terms and conditions</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Account</button>
                    
                </form>
            </div>
        </div>
    </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</body>

</html>




<?php
}
?>