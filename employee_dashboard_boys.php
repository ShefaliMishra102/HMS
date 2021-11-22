<?php
session_start();
include("conn.php");
error_reporting(0);
$ID = $_SESSION['ID'];
if($ID==true)
{
}
else
{
   header('location:logine.php');
}

$sql="SELECT * from employee where ID='$ID'";
//echo $sql;
//exit;
$rs=mysqli_query($conn, $sql);
$rec=mysqli_fetch_assoc($rs);

?>
<?php 
$sql31="SELECT COUNT(*) From student where hos='Boys Hostel'";
$rs31=mysqli_query($conn,$sql31);
$rec31= mysqli_fetch_array($rs31);
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Employee Dashboard</title>
  <link rel="stylesheet" type="text/css" href=".\css\boys_employee_dashboard_style.css">

</head>

<body background="./image/bg16.jpg">


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2:  Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  <?php include("employee_header_boys.php") ?>
  <div class="db">
    <h1>DASHBOARD</h1>

  </div>
  <div class="container">
    <div class="row">

      <div class="col-6">
        <div class="card1 ">
		 <center> <img src='<?php echo $rec['photo']; ?>' height='150' width='150' name="img-1"></center><hr>
          <div class="card-title1">
          
            <h4><?php echo $rec['ID']; ?></h4>
			<h5><?php echo $rec['e_name']; ?></h5>
			<h5><?php echo $rec['hostel_name'].' '. $rec['emp_type']; ?></h5>
			<h5><?php echo $rec['email_id']; ?></h5>
			<h5><?php echo $rec['e_mobile']; ?></h5>
			<h5><?php echo $rec['join_start']; ?></h5>
			
			</div>
         </div>
      </div>

      <div class="col-6">
        <div class="card2">
          <div class="card-title2">
            <h1><?php echo $rec31[0]; ?></h1> <br>
            <h4>Total Student</h4>
          </div>
          <div class="card-footer2"><a href="employee_student_boys.php">View Details</a>
          </div>
        </div>
		<br>
		
<div class="card">
    <h2 class="notice-heading bg-success bg-gradient text-white shadow-lg p-3 rounded">Notice Board</h2>
	<hr>
		<div class="col">
	        <div class="card-header bg-secondary">
		        <marquee scrollamount="2" scrollspeed="5" direction="up" height="200px" onmouseover="this.stop();" onmouseout="this.start();" class="notice">
			    <ul class="list-group list-group-flush">

<?php

$sql5 = "SELECT * from notice_board";
$rs5 = mysqli_query($conn, $sql5);
$total = mysqli_num_rows($rs5);
if ($total != 0) {	
    while ($rec5 = mysqli_fetch_assoc($rs5)) { 
?>
			        <li class="list-group-item"><?php echo $rec5['notice_description']; ?></li><hr>
  					   
<?php
    }
        }
?>
                </ul>
	            </marquee>
		    </div>
			<div class="card-footer">
			<div class="d-grid gap-2 col-6 mx-auto">	
	    <a href="notice_show_employee_boys.php" class="btn btn-primary" style="align:center">View All</a>

		</div>
		
		</div>
		</div>
      </div>

      
    </div>
  </div>
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