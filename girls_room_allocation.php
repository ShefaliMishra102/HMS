<?php
session_start();
include("conn.php");
error_reporting(0);
$id = $_GET['id'];
$sql = "SELECT * from student where ID='$id'";
//echo $sql;
$rs = mysqli_query($conn, $sql);
$rec = mysqli_fetch_assoc($rs);

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Room Allocation</title>
  <link rel="stylesheet" type="text/css" href=".\css\room_style.css">

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
    <h1> Room Allocation Form</h1>
  </div>

  <div class="column middle">
    <form action="girls_room.php" method="POST">

      <div class="container">

        <div class="row">
          <div class="col-4">
            Student ID<br>
            <input type="text" name="stud_id" value="<?php echo $rec['ID']; ?>"></p>
          </div>
          <div class="col-4">
            Student Name<br>
            <input type="text" name="stud_name" value="<?php echo $rec['name']; ?>"></p>
          </div>
          <div class="col-4">
            Student Father Name<br>
            <input type="text" name="stud_f_name" value="<?php echo $rec['f_name']; ?>"></p>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            Student Contact Number<br>
            <input type="text" name="stud_contact" value="<?php echo $rec['mobile']; ?>"></p>
          </div>
          <div class="col-4">
            Student Email Id<br>
            <input type="email" name="email_id" value="<?php echo $rec['email_id']; ?>"></p>
          </div>
		   <div class="col-4">
            Hostel Name<br>
            <input type="text" name="hostel_name" value="<?php echo $rec['hos']; ?>"></p>
          </div>
         
         </div>
<?php
    $id = $_GET['id'];
	$sql3 = "SELECT * from room where stud_id='$id'";
    $rs3 = mysqli_query($conn, $sql3);
    $rec3 = mysqli_fetch_assoc($rs3);
?>
        <div class="row">
          <div class="col-6">
            Block Name<br>
            <input type="text" name="block_name" value="<?php echo $rec3['block_name']; ?>"></p>
          </div>
          <div class="col-6">
            Room Number<br>
            <input type="text" name="room_number" value="<?php echo $rec3['room_number']; ?>"></p>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <input type="submit" class="registerbtn" name="submit" value="Submit">
          </div>
           </div>
      </div>

    </form>
  </div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
	{
	 ?>
<script>
swal({
  title: "<?php echo $_SESSION['status'];?>",
  icon: "<?php echo $_SESSION['status_code'];?>",
  button: "Done",
});
</script>
<?php 
    unset($_SESSION['status']);
	}
?>
</body>

</html>