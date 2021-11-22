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

    <title>visitor</title>
    <link rel="stylesheet" type="text/css" href=".\css\visitor_style_show.css">

  </head>

  <body background="./image/bg19.jpg">


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2:  Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


    <?php include("header.php") ?>

    <div class="heading">
      <h1> Visitors Details </h1>
    </div>

   <div class="row mt-4">
  <div class="col-4">
    <div class="card bg-light ml-6" style="width: 30rem; height:15rem">
      <div class="card-body">
        <h5 class="card-title">Visitor Information</h5><hr>
        <p class="card-text">When Guest Or Visitor Come to Meet Any Hosteller They Should be Enter they details.</p><br>
		<div class ="card-footer">
        <a href="visitor_information.php" class="btn btn-primary">Entry details</a>
      </div>
      </div>
    </div>
  </div>
  <div class="col-4">
   <div class="card bg-light ml-6" style="width: 30rem; height:15rem">
      <div class="card-body">
        <h5 class="card-title">Visitor Exit Details</h5><hr>
        <p class="card-text">When Guest Or Visitor Meet Them They Should be Enter they Exit Timing.</p><br>
		<div class ="card-footer">
        <a href="visitor_entry_show.php" class="btn btn-primary">Exit Details</a>
      </div>
    </div>
    </div>
  </div>
</div>

  </body>

  </html>