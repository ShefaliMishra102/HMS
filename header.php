<?php
session_start();
include("conn.php");
error_reporting(0);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>HMS</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2:  Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <img src=".\image\logo2.jpg" alt="" width="300" height="80" class="d-inline-block align-text-top">

      <div class="nav justify-content-end id=" navbarNav">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="student_reg.php">Book Hostel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="show_notice.php">Notice Board</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact us.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="visitior.php">Visitors Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="login.php">Login</a>
          </li>
		  

        </ul>
      </div>
    </div>
  </nav>
</body>

</html>