

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    
    <?php
       
      //  ctrl + i
           // Type 1 connection

      // $servername = "localhost";
      // $username = "root";
      // $password = "";
      

      // // Create connection
      // $conn = new mysqli($servername, $username, $password);

      // // Check connection
      // if ($conn->connect_error) {
      //   echo "<div class='alert alert-danger' role='alert'>
      //   Connection failed: " . $conn->connect_error . "
      // </div>";
      // } else {
      //   echo "<div class='alert alert-success' role='alert'>
      //   Connected successfully
      // </div>";
      // }




      // Type 2 connection

      $servername = "localhost";
      $username = "root";
      $password = "";
      $database_name = "project";
      

      // Create connection
      $conn = mysqli_connect ($servername, $username, $password,$database_name);

      // Check connection
      if (!$conn) 
      {    //    !0  !false == true       !1 == !true => false
        echo "<div class='alert alert-danger' role='alert'>
        Connection failed: 
      </div>";
      } else 
      {
        echo "<div class='alert alert-success' role='alert'>
        Connected successfully
      </div>";
      }

    ?>







  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Project Name</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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


<div class="row justify-content-center py-2">

  <div class=" col-md-4 vh-100 px-5 border">
    <h1>LOGIN</h1>
    <form action="login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="col-md-4">
</div>

<div class=" col-md-4 py-5 px-5 border">
<h1>SIGNUP</h1>
    <form action="signup.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    
</div>
    
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>