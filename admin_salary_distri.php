<?php
session_start();
include("conn.php");
error_reporting(0);
$ID = $_GET['id'];
$sql = "SELECT * from employee where ID='$ID'";
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

    <title>Salary</title>
    <link rel="stylesheet" type="text/css" href=".\css\room_style.css">

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
      <h1> Salary Distribution</h1>
    </div>

    <div class="column middle">
      <form action="salary_details.php" method="POST">
       
          <div class="container">

            <div class="row">
              <div class="col-4">
                Employee ID<br>
                <input type="text" name="emp_id" value="<?php echo $rec['ID']; ?>">
              </div>
              <div class="col-4">
                Employee Name<br>
                <input type="text" name="emp_name"  value="<?php echo $rec['e_name']; ?>">
              </div>
             <div class="col-4">
                Employee Designation<br>
                <input type="text" name="emp_type"  value="<?php echo $rec['emp_type']; ?>">
              </div>
            </div>

            <div class="row">
              
              <div class="col-4">
                Hostel Name<br>
                <input type="text" name="emp_hos"  value="<?php echo $rec['hostel_name']; ?>">
              </div>
            <div class="col-4">
                Salary<br>
                <input type="number" name="salary" >
              </div>
            <div class="col-4">
                Salary Month / Year<br>
                <input type="text" name="s_month" value="<?php echo date("M");?>">
				<input type="text" name="s_year" value="<?php echo date("Y");?>">
              </div>
            </div>



        <div class="row">
          <div class="col-12">
            <input type="submit" class="registerbtn" name="submit" value="Submit">
          </div>
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