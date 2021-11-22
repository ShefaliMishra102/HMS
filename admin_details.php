<?php
session_start();
include("conn.php");
error_reporting(0);
$ID = $_SESSION['ID'];
$sql = "SELECT * from admin where ID='$ID'";
//echo $sql;
//exit;
$rs = mysqli_query($conn, $sql);
$rec = mysqli_fetch_assoc($rs);

?>

<!doctype html>
<html lang="en">

<head>
	<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href=".\css\admin_details_update.css">

</head>

<body>


	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- Option 2:Separate Popper and Bootstrap JS -->
	<!--
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 -->
	<body  background="./image/bg22.jpg">
    <?php include("admin_header.php") ?>

    <form action="admin_update.php" method="POST" enctype="multipart/form-data">
            <table>
			<p class="solid">Profile Update</p>
      <br>

                <tr>
                    
                    <th width="200px">Full Name</th>
					<td><input type="text" name="Name" value="<?php echo $rec['Name']; ?>" >
					</td>
                </tr>

                <tr>
				    <th width="200px">Email Id</th>
				    <td><input type="email" name="email" value="<?php echo $rec['email']; ?>" >
			        </td>
                </tr>
                <tr>
                    <th width="200px">Contact Number</th>
                    <td><input type="text" name="mobile" value="<?php echo $rec['mobile']; ?>" >
                    </td>
                </tr>
				<tr>
                    <th width="200px">Gender</th>
                    <td><input type="text" name="Gender" value="<?php echo $rec['Gender']; ?>" >
                    </td>
                </tr>
				<tr>
                    <th width="200px">Date of Birth</th>
                    <td><input type="text" name="dob" value="<?php echo $rec['dob']; ?>" >
                    </td>
                </tr>
				<tr>
                    <th width="200px">Address</th>
                    <td><input type="text" name="address" value="<?php echo $rec['address']; ?>" >
                    </td>
                </tr>
            
 
				<tr>
				<th width="200px">Admin Photo
				
				</th>
				<td><img src='<?php echo $rec['photo']; ?>' height='150' width='150'>
				</td>

				</tr>
			</table>
			<br>
			<br>
			<center>
				<input type="submit" class="registerbtn" name="submit" value="Update">
				<br><br>
		</form>
		</center>
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