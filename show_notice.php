<?php
session_start();
include("conn.php");
error_reporting(0);

$sql1 = "SELECT * from notice_board where notice_title='Important'";
$rs1 = mysqli_query($conn, $sql1);
$total = mysqli_num_rows($rs1);
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Notice</title>
  <link rel="stylesheet" type="text/css" href=".\css\show_notice_style.css">

</head>

<body background="./image/bg14.jpg">


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2:  Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


  <?php include("header.php") ?>
<div class="row">
  <div class="col-sm-6">
    <div class="card bg-light shadow-lg bg-body rounded">
      <div class="card-body">
        <h5 class="card-title">IMPORTANT NOTICE</h5><hr>
		<div class="card-header ">
		<marquee scrollamount="2" scrollspeed="5" direction="up" height="220px" onmouseover="this.stop();" onmouseout="this.start();" class="notice">
			    <ul>

<?php
if ($total != 0) {

    while ($rec1 = mysqli_fetch_assoc($rs1)) { 
?>
			        <li class="fw-bold"><?php echo $rec1['notice_description']; ?></li><hr>
  					   
<?php
    }
        }
?>
                </ul>
	            </marquee>
				
      </div>
	  
	  <br>
	    <a href="notice_show.php" class="btn btn-primary">View All</a>

      </div>
    </div>
  </div>
<?php
$sql2 = "SELECT * from notice_board where notice_title='Function/Event'";
$rs2 = mysqli_query($conn, $sql2);
$total = mysqli_num_rows($rs2);
?>

  <div class="col-sm-6">
    <div class="card bg-light shadow-lg bg-body rounded">
      <div class="card-body">
        <h5 class="card-title">FUNCTION/EVENT NEWS</h5><hr>
		<div class="card-header ">
		<marquee scrollamount="2" scrollspeed="5" direction="up" height="220px" onmouseover="this.stop();" onmouseout="this.start();" class="notice">
			    <ul>

<?php
if ($total != 0) {
    while ($rec2 = mysqli_fetch_assoc($rs2)) { 
?>
			        <li class="fw-bold"><?php echo $rec2['notice_description']; ?></li><hr>
  					   
<?php
    }
        }
?>
                </ul>
	            </marquee>
				
      </div>
	  
	  <br>
	    <a href="notice_show.php" class="btn btn-primary">View All</a>

      </div>
    </div>
  </div>
</div>
<div class="row">
<?php
$sql3 = "SELECT * from notice_board where notice_title='Holiday'";
$rs3 = mysqli_query($conn, $sql3);
$total = mysqli_num_rows($rs3);
?>

  <div class="col-sm-6">
    <div class="card bg-light shadow-lg bg-body rounded">
      <div class="card-body">
        <h5 class="card-title">HOLIDAY NEWS</h5><hr>
		<div class="card-header ">
		<marquee scrollamount="2" scrollspeed="5" direction="up" height="220px" onmouseover="this.stop();" onmouseout="this.start();" class="notice">
			    <ul>

<?php
if ($total != 0) {
    while ($rec3 = mysqli_fetch_assoc($rs3)) { 
?>
			        <li class="fw-bold"><?php echo $rec3['notice_description']; ?></li><hr>
  					   
<?php
    }
        }
		
?>
                </ul>
	            </marquee>
				
      </div>
	  
	  <br>
	    <a href="notice_show.php" class="btn btn-primary">View All</a>

      </div>
    </div>
  </div>
<?php
$sql4 = "SELECT * from notice_board where notice_title='Other'";
$rs4 = mysqli_query($conn, $sql4);
$total = mysqli_num_rows($rs4);
?>

  <div class="col-sm-6">
    <div class="card bg-light shadow-lg bg-body rounded">
      <div class="card-body">
        <h5 class="card-title">OTHER NOTICE / NEWS</h5><hr>
		<div class="card-header ">
		<marquee scrollamount="2" scrollspeed="5" direction="up" height="220px" onmouseover="this.stop();" onmouseout="this.start();" class="notice">
			    <ul>

<?php
if ($total != 0) {
    while ($rec4 = mysqli_fetch_assoc($rs4)) { 
?>
			        <li class="fw-bold"><?php echo $rec4['notice_description']; ?></li><hr>
  					   
<?php
    }
        }
?>
                </ul>
	            </marquee>
				
      </div>
	  <br>
	    <a href="notice_show.php" class="btn btn-primary">View All</a>

      </div>
    </div>
  </div>
</div>

</body>
</html>