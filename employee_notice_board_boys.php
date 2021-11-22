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

  <title>Notice Board</title>
  <link rel="stylesheet" type="text/css" href=".\css\notice_board.css">

</head>

<body background="./image/bg2.jpg">


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2:  Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

  <?php include("employee_header_boys.php") ?>

  <div style="text-align:center" class="title_reg">
    <h1>Notice Board</h1>
    <img src=".\image\border1.png" class="borderimg"></img>
  </div>
  <form action="notice_details_employee.php" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <th width="200px" font="30px">Notice Title</th>
        <td><select id="notice_title" name="notice_title" placeholder="Please Select......" required>
            <option selected disabled value="">Please Select......</option>
            <option value="Important">Important</option>
            <option value="Function/Event">Function/Event</option>
            <option value="Holiday">Holiday</option>
            <option value="Other">Other</option>
          </select>

        </td>
      </tr>
      <br>
      <tr>
        <th width="200px">Notice Description</th>
        <td><textarea name="notice_description" row=50 col=50 placeholder="Write Notice Important details here....."></textarea></td>
      </tr>
      <tr>
        <th width="200px">Notice Photo</th>
        <td><input type="file"></td>
      </tr>
    </table>
    <center>

      <input type="submit" class="registerbtn" name="submit" value="Upload">
      <input type="reset" class="registerbtn1" name="reset" value="Clear">
      <br><br>
  </form>
  </center>


</body>

</html>