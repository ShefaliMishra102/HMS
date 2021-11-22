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

  <title>hostel bill Manage</title>
  <link rel="stylesheet" type="text/css" href=".\css\admin_bill_style.css">

</head>

<body background="./image/bg22.jpg">


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2:  Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


  <?php include("admin_header.php") ?>

  <div class="heading">
    <h1> Bill Details</h1>
  </div>

  <div class="row ">
    <div class="col-sm-6">
      <div class="card bg-transparent">
        <div class="card-body">
          <h5 class="card-title">Girls Hostel Bills Details </h5>
          <hr>
          <p class="card-text">In this Girls Hostel, Hostel Rent Details .</p>
          <a href="admin_hostel_bill.php" class="btn btn-primary">Click Here For Details</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card bg-transparent">
        <div class="card-body">
          <h5 class="card-title">Boys Hostel Bills Details</h5>
          <hr>
          <p class="card-text">In this Boys Hostel, Hostel Rent Details.</p>
          <a href="admin_hostel_bill_boys.php" class="btn btn-primary">Click Here For Details</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="card bg-transparent">
        <div class="card-body">
          <h5 class="card-title">Girls Mess Bills Details</h5>
          <hr>
          <p class="card-text">In this Girls Hostel, Mess Rent Details.</p>
          <a href="admin_mess_bill_girls.php" class="btn btn-primary">Click Here For Details</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card bg-transparent">
        <div class="card-body">
          <h5 class="card-title">Boys Mess Bills Details</h5>
          <hr>
          <p class="card-text">In this Boys Hostel, Mess Rent Details..</p>
          <a href="admin_mess_bill_boys.php" class="btn btn-primary">Click Here For Details</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>