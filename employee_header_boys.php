<?php
session_start();
include("conn.php");
error_reporting(0);
$ID = $_SESSION['ID'];
$sql99="SELECT * from employee where ID='$ID'";
//echo $sql;
//exit;
$rs99=mysqli_query($conn, $sql99);
$rec99=mysqli_fetch_assoc($rs99);

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <link rel="stylesheet" type="text/css" href=".\css\employee_header_style.css">

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
   
  <ul class="nav justify-content-end bg-light">
  <li class="nav-item">
   <p>Welcome<b> <?php echo $rec99['e_name']; ?>(</b> <?php echo $rec99['emp_type']; ?> <b>)</b></p>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="logout.php" style="float:right">Logout</a>
  </li> 
</ul>
  <div class="header">
    <h1>
      <a href="index.php"><img src=".\image\logo2.jpg" alt="" width="250" height="60" class="d-inline-block align-text-top">
    </h1></a>
    <h2><b> MANEGEMENT SYSTEM
      </b></h2>
    <p><b>Enjoy, Stay, & Relax With Your Friends</b></p>
  </div>
  <!-- <p class = "namehead"style="float:right"><?php echo $rec100['Name']; ?></p>
   -->
  <form action="" method="POST">
    <div class="tab">

      <button class="tablinks"><img src=".\image\db.png" alt="" width="25" height="18"> <a href="employee_dashboard_boys.php">Dashboard</a></button>
      <button class="tablinks"><img src=".\image\db.png" alt="" width="25" height="18"> <a href="room_allocation_new_student_boys.php">Room Allocation</a></button>
      <button class="tablinks"><img src=".\image\db.png" alt="" width="25" height="18"> <a href="room_manage_boys.php">Room Manage</a></button>
      <button class="tablinks"><img src=".\image\group.png" alt="" width="25" height="18"> <a href="employee_student_boys.php">Student Manage</a></button>
      <button class="tablinks"><img src=".\image\meal.png" alt="" width="25" height="18"> <a href="meal_boys.php">Meal Manage</a></button>
      <button class="tablinks"><img src=".\image\meal.png" alt="" width="25" height="18"> <a href="timechart_boys.php">Time Manage</a></button>
      <button class="tablinks"><img src=".\image\vector.jpg" alt="" width="25" height="18"> <a href="boys_employee_visitor_show.php">Visitor Manage</a></button>
      <button class="tablinks"><img src=".\image\atten.png" alt="" width="25" height="18"> <a href="employee_hostel_bill_boys.php">Hostel Bill Manage</a></button>
      <button class="tablinks"><img src=".\image\atten.png" alt="" width="25" height="18"> <a href="employee_mess_bill_boys.php">Mess Bill Manage</a></button>
      <button class="tablinks"><img src=".\image\notice.jpg" alt="" width="25" height="18"> <a href="employee_notice_board_boys.php">Notice Board</a></button>
      <button class="tablinks"><img src=".\image\atten.png" alt="" width="25" height="18"> <a href="atten_manage_boys.php">Attendance</a></button>
      <button class="tablinks"><img src=".\image\db.png" alt="" width="25" height="18"> <a href="employee_feedback_boys.php">Feedback Manage</a></button>
      <button class="tablinks"><img src=".\image\setting.png" alt="" width="25" height="18"> <a href="employee_pass_boys.php">Change Password</a></button>
    </div>
  </form>

</body>

</html>