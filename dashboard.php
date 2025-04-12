

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
      if ($conn) 
      {   
       

       
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
        <p>    </p>
    </div>
  </div>
</nav>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>