<?php
session_start();
include("conn.php");
error_reporting(0);

$sql = "SELECT * from employee WHERE NOT EXISTS (SELECT * FROM salery WHERE salery.emp_id = employee.ID OR salery.s_month=date('M'))";
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
      <form action="#" method="POST">
        <?php
        if ($total != 0) {
        while ($rec = mysqli_fetch_assoc($rs)) {
        ?>
          <div class="container">

            <div class="row">
              <div class="col-4">
                Employee ID<br>
                <input type="text"  value="<?php echo $rec['ID']; ?>"></p>
              </div>
              <div class="col-4">
                Employee Name<br>
                <input type="text"  value="<?php echo $rec['e_name']; ?>"></p>
              </div>
            
             
            </div>

            <div class="row">
              <div class="col-4">
                Employee Designation<br>
                <input type="text"  value="<?php echo $rec['emp_type']; ?>"></p>
              </div>
              <div class="col-4">
                Hostel Name<br>
                <input type="text"  value="<?php echo $rec['hostel_name']; ?>"></p>
              </div>
			  <div class="col-4">
                For Salary Distribution
                <a href="admin_salary_distri.php?id=<?php echo $rec['ID']; ?>">Click Here</a>
              </div>
            </div>

            
          </div>
		  <?php
        }
      }
	  else{
		  ?>
		  <div class="card">
  <div class="card-body">
   <b> ALL EMPLOYEES HAVE GOT SALARY
</b>  </div>
</div>
		  <?php
	  }
      ?>

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