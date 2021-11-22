<?php
session_start();
include("conn.php");
error_reporting(0);
$ID = $_SESSION['ID'];
if ($ID == true) {
} else {
  header('location:logins.php');
}

$sql = "SELECT * from student where ID='$ID'";
//echo $sql;
//exit;
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

  <title>Student Dashboard</title>
  <link rel="stylesheet" type="text/css" href=".\css\stud_header.css">

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


  <?php include("stud_header.php") ?>

  <div class="row">
    <div class="leftcolumn">
      <div class="card" >
        <h2>Profile Details</h2>
        <h5><?php echo $rec['name']; ?></h5>
        <div class="container" >
          <div class="row">

            <div class="col-sm-4">
              <img src='<?php echo $rec['photo']; ?>' height='200' width='200'>
            </div>
            <div class="col-sm-4">
              <table>
                <tr>
                  <th> Student ID:</th>
                  <td><?php echo $rec['ID']; ?></td>
                </tr>

                <tr>
                  <th> Contact Number:</th>
                  <td><?php echo $rec['mobile']; ?></td>
                </tr>

                <tr>
                  <th> Email ID:</th>
                  <td><?php echo $rec['email_id']; ?></td>
                </tr>

                <tr>
                  <th> Father Name:</th>
                  <td><?php echo $rec['f_name']; ?></td>
                </tr>

                <tr>
                  <th> Mother Name:</th>
                  <td><?php echo $rec['m_name']; ?></td>
                </tr>

              </table>
            </div>
            <div class="col-sm-4">
              <table>

<?php
$sql3 = "SELECT * from room where stud_id='$ID'";
$rs3 = mysqli_query($conn, $sql3);
$rec3 = mysqli_fetch_assoc($rs3);
?>
                <tr>
                  <th> Block Name:</th>
                  <td><?php echo $rec3['block_name']; ?></td>
                </tr>
                <tr>
                  <th> Room Number:</th>
                  <td><?php echo $rec3['room_number']; ?></td>
                </tr>
<?php
$sql1 = "SELECT * from mess_bill where stud_id='$ID'";
$rs1 = mysqli_query($conn, $sql1);
$rec1 = mysqli_fetch_assoc($rs1);
?>
                <tr>
                  <th> Mess Tranaction Id:</th>
                  <td><?php echo $rec1['transaction']; ?></td>
                </tr>
<?php
$sql2 = "SELECT * from hostel_bill where stud_id='$ID'";
$rs2 = mysqli_query($conn, $sql2);
$rec2 = mysqli_fetch_assoc($rs2);
?>

                <tr>
                  <th> Hostel Tranaction Id:</th>
                  <td><?php echo $rec2['transaction']; ?></td>
                </tr>

              </table>
            </div>
          </div>
        </div>
      </div>
	  
<?php

$sql5 = "SELECT * from notice_board";
$rs5 = mysqli_query($conn, $sql5);
$total = mysqli_num_rows($rs5);
if ($total != 0) {	 ?>
<div class="card">
    <h2 class="notice-heading bg-success bg-gradient text-white shadow-lg p-3 rounded">Notice Board</h2>
	<hr>
	<div class="row">
    	<div class="col-8">
	        <div class="card-header bg-dark">
		        <marquee scrollamount="2" scrollspeed="5" direction="up" height="220px" onmouseover="this.stop();" onmouseout="this.start();" class="notice">
			    <ul class="list-group list-group-flush">

<?php
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
		<div class="d-grid gap-2 col-6 mx-auto">	
	  <br>
	    <a href="notice_show_stud.php" class="btn btn-primary" style="align:center">View All</a>

		</div>
		</div>
	</div>
</div>
	
<div class="card">
        <h2 >Attendence</h2><hr>
        <div class="scrollmenu">
		<div class="row">
  <div class="column">
		<table><tr>
		<th>Date</th></tr><tr>
		<th>Is Absence</th></tr><tr>
		<th>Is Leave</th>
	  </tr></table>
	  </div>
	  
<?php

$sql6 = "SELECT * from attendence where stud_id='$ID'";
$rs6 = mysqli_query($conn, $sql6);
$total = mysqli_num_rows($rs6);
if ($total != 0) {	 
while ($rec6 = mysqli_fetch_assoc($rs6)) { ?>

  <div class="column">
 <table> <tr>
  <td><?php echo $rec6['today_date'];?>
  </td></tr><tr>
  <td><?php echo $rec6['Is_Absence'];?>
  </td></tr><tr>
  <td><?php echo $rec6['Is_leave'];?>
  </td></tr>
 
 
</table>
 </div> <?php
 $stud_id=$rec6['stud_id'];
    }
        }
?>
</div>
</div>
<div class="d-grid gap-2 col-4 mx-auto">	
	  <br>
	    <a href="attendence_show.php?ID=<?php echo $stud_id;?>" class="btn btn-primary" style="align:center">View All</a>

		</div>
      </div>
<div class="card">
        <h2 >Meal</h2><hr>
 <?php
$sql8 = "SELECT * from meal ";
$rs8 = mysqli_query($conn, $sql8);
$total8 = mysqli_num_rows($rs8);

?>      
		<div class="row">
  <div class="column">
  <table callspacing="30px" border="6" callpadding="30px" width="70%">


          <tr height="60px" font="20px">
            <th>Day</th>
            <th>Beakfast</th>
            <th>Lunch</th>
            <th>Snacks</th>
            <th>Dinner</th>

          </tr>
		  <?php
		  if ($total8 != 0) {
          while ($rec8 = mysqli_fetch_assoc($rs8)) {
          ?>
          <tr height="60px" font="20px">
            <td><?php echo $rec8['Day']; ?></td>
            <td><?php echo $rec8['breakfast']; ?></td>
            <td><?php echo $rec8['lunch']; ?></td>
            <td><?php echo $rec8['snack']; ?></td>
            <td><?php echo $rec8['dinner']; ?></td>

          </tr>
		  <?php
          }
        }
        ?>
      </table>
            </div>
    </div>
    </div>
    </div>
    <div class="rightcolumn">
      <div class="card">
        <p id="demo"></p>

        <script>
          const d = new Date();
          document.getElementById("demo").innerHTML = d;
        </script>
      </div>
      <div class="card">
        <h3>Girls Hostel Staff Details</h3>
        <h5>Warden</h5>
        <h6 align="right">9568472315</h6>
        <h5>Suprintendent</h5>
        <h6 align="right">9865743251</h6>
        <h5>Office Staff</h5>
        <h6 align="right">8967548122</h6>
        <h5>Mess Supervisor</h5>
        <h6 align="right">9986659474</h6>
        <h5>Housekepping Staff</h5>
        <h6 align="right">8999874685</h6>
        <h5>Security</h5>
        <h6 align="right">9866951120</h6>
      </div>
      <div class="card">
        <h3>Boys Hostel Staff Details</h3>
        <h5>Warden</h5>
        <h6 align="right">9985220143</h6>
        <h5>Suprintendent</h5>
        <h6 align="right">9865748559</h6>
        <h5>Office Staff</h5>
        <h6 align="right">9899657492</h6>
        <h5>Mess Supervisor</h5>
        <h6 align="right">8896571254</h6>
        <h5>Housekepping Staff</h5>
        <h6 align="right">8963592104</h6>
        <h5>Security</h5>
        <h6 align="right">8975468291</h6>
      </div>
<?php

$sql7 = "SELECT * from timechart";
$rs7 = mysqli_query($conn, $sql7);
$total7 = mysqli_num_rows($rs7);
 ?>

	  <div class="card">
 <table callspacing="30px" border="6" callpadding="30px" width="70%">
          <tr height="60px" font="20px">
            <th>Time Out</th>
            <th>Time In</th>
            <th>Description</th>
          </tr>
		  <?php
        
		 if ($total7 != 0) {	 
while ($rec7 = mysqli_fetch_assoc($rs7)) {
          ?>
          <tr height="60px" font="20px">
            <td><?php echo $rec7['time_in']; ?></td>
            <td><?php echo $rec7['time_out']; ?></td>
            <td><?php echo $rec7['description']; ?></td>
           

          </tr>
		  <?php
          }
        }
        ?>
      </table>      </div>
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