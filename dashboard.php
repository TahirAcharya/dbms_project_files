<?php
session_start();
include 'connection.php';

if(!$_SESSION['userid'])
{
    header("Location: index.php");
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
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
 
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

<a href="logout.php" class="btn btn-link">Logout</a>

<p>  <?php echo "Welcome, ".$_SESSION['username'];  ?> </p>

<h2>Student Data</h2>
<table class="table">
  <tr> 
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Registration Date</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM students");

 if(mysqli_num_rows($result) > 0)
    while($row = mysqli_fetch_array($result))
    {
        echo "<tr> <td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td> </tr>";
    }

?>

</table>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>

<?php

    }
?>
