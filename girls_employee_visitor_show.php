<?php
session_start();
include("conn.php");
error_reporting(0);

$sql = "SELECT * from visitors";

$rs = mysqli_query($conn, $sql);
$total = mysqli_num_rows($rs);
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
    <link rel="stylesheet" type="text/css" href=".\css\a_contect_mang.css">

  </head>

  <body background="./image/bg5.jpg">


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2:  Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


    <?php include("girls_employee_header.php") ?>

    <div class="heading">
      <h1> Visitors Details </h1>
    </div>
<br>
    <div class="cantainer">
      <form action="" method="POST">
        <table callspacing="30px" border="6" callpadding="30px" style="width:80%">

          <tr height="60px" font="20px">
            <th>S.N.</th>
            <th>Visitor Name</th>
            <th>Visitor Email</th>
            <th>Visitor Contact Number</th>
            <th>Student Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Entry Date</th>
            <th>Entry Timing</th>
            <th>Exit Date</th>
            <th>Exit Timing</th>
            </tr>
          <?php
		  if ($total != 0) {

          while ($rec = mysqli_fetch_assoc($rs)) {
          ?>
            <tr>
              <td ><?php echo $rec['ID']; ?>
              </td>
              <td ><?php echo $rec['name']; ?>
              </td>
              <td ><?php echo $rec['email_id']; ?>
              </td>
			  <td ><?php echo $rec['contact']; ?>
              </td>
              <td ><?php echo $rec['s_name']; ?>
              </td>
              <td ><?php echo $rec['gender']; ?>
              </td>
              <td ><?php echo $rec['address']; ?>
              </td>
              <td ><?php echo $rec['entry_date']; ?>
              </td>
              <td ><?php echo $rec['entry_timing']; ?>
              </td>
			  <td ><?php echo $rec['exit_date']; ?>
              </td>
              <td ><?php echo $rec['exit_timing']; ?>
              </td>
			 </tr>
        <?php
          }
        }
        ?>

        </table>
      </form>
    </div>
    </div>
    </div>


    </div>

    </header>
  </body>

  </html>