<?php
session_start();
include("conn.php");
error_reporting(0);
$ID = $_SESSION['ID'];
$sql100 = "SELECT * from admin where ID='$ID'";
//echo $sql;
//exit;
$rs100 = mysqli_query($conn, $sql100);
$rec100 = mysqli_fetch_assoc($rs100);

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <link rel="stylesheet" type="text/css" href=".\css\amin_header_style.css">

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
      <a href="index.php"> <img src=".\image\logo2.jpg" alt="" width="250" height="60" class="d-inline-block align-text-top"></a>

      <p class="namehead" style="float:right"><?php echo $rec100['Name']; ?> ( Admin )</p>
      <a href="logout.php" style="float:right">Logout</a>
    </div>
  </nav>
  <form action="" method="POST">
    <div class="tab">

      <button class="tablinks"><img src=".\image\db.png" alt="" width="25" height="18"> <a href="admin_dashboard.php">Dashboard</a></button>
      <button class="tablinks"><img src=".\image\group.png" alt="" width="25" height="18"> <a href="admin_student_boys.php">Boys Student Manage</a></button>
      <button class="tablinks"><img src=".\image\group.png" alt="" width="25" height="18"> <a href="admin_student.php">Girls Student Manage</a></button>
      <button class="tablinks"><img src=".\image\group.png" alt="" width="25" height="18"> <a href="admin_employee_manage.php">Employee Manage</a></button>
      <button class="tablinks"><img src=".\image\db.png" alt="" width="25" height="18"> <a href="admin_room_manage.php">Room Manage</a></button>
      <button class="tablinks"><img src=".\image\db.png" alt="" width="25" height="18"> <a href="admin_visitor_show.php">Visitor Manage</a></button>
      <button class="tablinks"><img src=".\image\meal.png" alt="" width="25" height="18"> <a href="admin_meal.php">Meal Manage</a></button>
      <button class="tablinks"><img src=".\image\meal.png" alt="" width="25" height="18"> <a href="admin_timechart.php">Time Manage</a></button>
      <button class="tablinks"><img src=".\image\cost.jpg" alt="" width="25" height="18"> <a href="admin_cost_manage.php">Cost Manage</a></button>
      <button class="tablinks"><img src=".\image\atten.png" alt="" width="25" height="18"> <a href="admin_bill_manage.php">Bill Manage</a></button>
      <button class="tablinks"><img src=".\image\notice.jpg" alt="" width="25" height="18"> <a href="notice_board.php">Notice Board</a></button>
      <button class="tablinks"><img src=".\image\atten.png" alt="" width="25" height="18"> <a href="admin_atten_manage.php">Attendance</a></button>
      <button class="tablinks"><img src=".\image\db.png" alt="" width="25" height="18"> <a href="admin_feedback.php">Feedback Manage</a></button>
      <button class="tablinks"><img src=".\image\db.png" alt="" width="25" height="18"> <a href="a_contect_mang.php">Contect Us Manage</a></button>
      <button class="tablinks"><img src=".\image\setting.png" alt="" width="25" height="18"> <a href="admin_password.php">Change Password</a></button>
    </div>
  </form>

</body>

</html>