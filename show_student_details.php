<?php
session_start();
include("conn.php");
error_reporting(0);
$ID = $_GET['ID'];
$sql = "SELECT * from student where ID='$ID'";
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
	<link rel="stylesheet" type="text/css" href=".\css\student_details_show.css">

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
	<div class="container">
		<div style="text-align:center" class="title_reg">
			<h1>Hostel Management System</h1>
			<img src=".\image\border2.png" class="borderimg"></img>
		</div>
		<form action="student_reg_details_update.php?ID=<?php echo $rec['ID']; ?>" method="POST">
			<table>
				<p class="solid">Hosteller Information</p>
				<hr style="height:05px;background-color:black;color:black">
				<br>

				<tr>
					<th width="200px">Hostel Name:</th>
					<td><input type="text" name="hos" value="<?php echo $rec['hos']; ?>">

					</td>

					<th width="200px"> Full Name: </th>
					<td><input type="text" name="name" value="<?php echo $rec['name']; ?>">
					</td>
				</tr>

				<tr>
					<th width="200px">Email Id: </th>
					<td><input type="email" name="email_id" value="<?php echo $rec['email_id']; ?>">
					</td>

					<th width="200px">Contact Number: </th>
					<td><input type="number" name="mobile" value="<?php echo $rec['mobile']; ?>">
					</td>
				</tr>

				<tr>
						<th width="200px">Gender:</th>
					<td><input type="text" name="gender" value="<?php echo $rec['gender']; ?>">
					</td>

					<th width="200px">Date Of Birth: </th>
					<td><input type="date" name="dob" value="<?php echo $rec['dob']; ?>">
					</td>
				</tr>

				<tr>
					<th width="200px">Category:</th>
					<td><input type="text" name="category" value="<?php echo $rec['category']; ?>">
					</td>

					<th width="200px">Course: </th>
					<td><input type="text" name="course" value="<?php echo $rec['course']; ?>">
					</td>
				</tr>

				
				<tr>
					<th width="200px">Blood Group</th>
					<td><input type="text" name="blood" value="<?php echo $rec['blood']; ?>">
					</td>

					<th width="200px">Nationality: </th>
					<td><input type="text" name="nationality" value="<?php echo $rec['nationality']; ?>">
					</td>
				</tr>
			</table>

			<table>
				<br>
				<p class="solid">Family Details</p>
				<hr style="height:05px;background-color:black;color:black">
				<br>

				<tr>
					<th width="200px">Father Name: </th>
					<td><input type="text" name="f_name" value="<?php echo $rec['f_name']; ?>">
					</td>

					<th width="200px">Father Contact Number: </th>
					<td><input type="number" name="f_mobile" value="<?php echo $rec['f_mobile']; ?>">
					</td>
				</tr>

				<tr>
					<th width="200px">Father Email: </th>
					<td><input type="email" name="f_email" value="<?php echo $rec['f_email']; ?>">
					</td>

					<th width="200px">Father Occupation/ Designation:</th>
					<td><input type="text" name="f_occupation" value="<?php echo $rec['f_occupation']; ?>">
					</td>
				</tr>


				<tr>
					<th width="200px">Mother Name: </th>
					<td><input type="text" name="m_name" value="<?php echo $rec['m_name']; ?>">
					</td>

					<th width="200px">Mother Contact Number: </th>
					<td><input type="number" name="m_mobile" value="<?php echo $rec['m_mobile']; ?>">
					</td>
				</tr>

				<tr>
					<th width="200px">Mother Email</th>
					<td><input type="email" name="m_email" value="<?php echo $rec['m_email']; ?>"></td>

					<th width="200px">Mother Occupation/ Designation:</th>
					<td><input type="text" name="m_occupation" value="<?php echo $rec['m_occupation']; ?>">
					</td>
				</tr>

			</table>
			<table>
				<br>
				<p class="solid">Address Details</p>
				<hr style="height:05px;background-color:black;color:black">
				<br>

				<tr>
					<th width="200px">Street/House Number: </th>
					<td><input type="text" name="street" value="<?php echo $rec['street']; ?>">
					</td>

					<th width="200px">City: </th>
					<td><input type="text" name="city" value="<?php echo $rec['city']; ?>">
					</td>
				</tr>

				<tr>
					<th width="200px">State: </th>
					<td><input type="text" name="state" value="<?php echo $rec['state']; ?>">
					</td>
					<th width="200px">Country: </th>
					<td><input type="text" name="country" value="<?php echo $rec['country']; ?>">
					</td>
				</tr>

				<tr>
					<th width="200px">Pin Code: </th>
					<td><input type="number" name="pin" value="<?php echo $rec['pin']; ?>">
					</td>
				</tr>
			</table>

			<table>
				<br>
				<p class="solid">Local Guardian Details</p>
				<hr style="height:05px;background-color:black;color:black">
				<br>

				<tr>
					<th width="200px">Guardian Name:</th>
					<td><input type="text" name="g_name" value="<?php echo $rec['g_name']; ?>"></td>

					<th width="200px">Guardian Contact Number:</th>
					<td><input type="number" name="g_mobile" value="<?php echo $rec['g_mobile']; ?>"></td>
				</tr>

				<tr>
					<th width="200px">Guardian Email:</th>
					<td><input type="email" name="g_email" value="<?php echo $rec['g_email']; ?>"></td>

					<th width="200px">Guardian Occupation/ Designation:</th>
					<td><input type="text" name="g_occupation" value="<?php echo $rec['g_occupation']; ?>"></td>
				</tr>

				<tr>
					<th width="200px">Relationship With Guardian:</th>
					<td><input type="text" name="g_relation" value="<?php echo $rec['g_relation']; ?>"></td>

					<th width="200px">Guardian Address:</th>
					<td><input type="text" name="g_address" value="<?php echo $rec['g_address']; ?>"></td>
				</tr>
			</table>
			<table>
                <br>
                <p class="solid">Photo Uploads</p>
				<hr style="height:05px;background-color:black;color:black">
				<br>

				<tr>
				<th width="200px">Student Photo
				<font color="red">*</font>
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