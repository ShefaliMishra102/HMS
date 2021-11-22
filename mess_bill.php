<?php
session_start();
include("conn.php");
error_reporting(0);
$ID = $_SESSION['ID'];

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


	<title>Mess Bill</title>
	<link rel="stylesheet" type="text/css" href=".\css\hostel_bill.css">

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


<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Mess Bill Payment
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
	  
	  		<div class="container">
			<div class="card">
				<h2 align='center'>Hostel Manegement System </h2>
				<h5 align='center'>Mess Slip - 2021</h5>

				<hr>
				<form action="mess.php" method="POST" enctype="multipart/form-data">
					<div class="row">


						<div class="col-sm-8">
							<table>


								<tr>
									<th> PAYMENT MODE:</th>
									<td><select id="payment" name="payment" placeholder="Please Select Payment Mode.....">
											<option selected disabled value="">Please Select......</option>
											<option value="Online">Online</option>
											<option value="Cash">Cash</option>

										</select></td>
								</tr>

								<tr>
									<th> HOSTEL NAME:</th>
									<td><input type="text" name="hostel_name" value="<?php echo $rec['hos']; ?>"></td>
								</tr>

								<tr>
									<th> Meal APPLIED:</th>
									<td><select id="meal" name="meal" placeholder="Please Select.....">
											<option selected disabled value="">Please Select......</option>
											<option value="VEG">VEG</option>
											<option value="NON-VEG">NON-VEG</option>

										</select></td>
								</tr>

							</table>
							<br>
							<br>
							<table align="left">
							    <tr>
								    <th> STUDENT ID:</th>
								    <td><input type="text" name="stud_id" value="<?php echo $rec['ID']; ?>"></td>
							    </tr>

							
								<tr>
									<th> STUDENT NAME:</th>
									<td><input type="text" name="s_name" value="<?php echo $rec['name']; ?>"></td>
								</tr>

								<tr>
									<th> FATHER NAME:</th>
									<td><input type="text" name="f_name" value="<?php echo $rec['f_name']; ?>"></td>
								</tr>

								<tr>
									<th> MOTHER NAME:</th>
									<td><input type="text" name="m_name" value="<?php echo $rec['m_name']; ?>"></td>
								</tr>

								<tr>
									<th> CONTECT NUMBER:</th>
									<td><input type="number" name="contact" value="<?php echo $rec['mobile']; ?>"></td>
								</tr>

								<tr>
									<th> EMAIL ID:</th>
									<td><input type="email" name="email_id"value="<?php echo $rec['email_id']; ?>"></td>
								</tr>

								<tr>
									<th> ADDRESS:</th>
									<td><input type="text" name="address"  value="<?php echo $rec['street']. ' ' . $rec['city']. ' ' . $rec['state']. ' ' . $rec['country']. ' ' . $rec['pin']; ?>"></td>
								</tr>

								<tr>
									<th> CATEGORY:</th>
									<td><input type="text" name="category" value="<?php echo $rec['category']; ?>"></td>
								</tr>

							</table>
						</div>
						<div class="col-sm-4">
							<table>
								<tr>
									<th> TRANSACTION No:</th>
									<td><input type="text" name="transaction" value="<?php echo (rand()); ?>"></td>
								</tr>

								<tr>
									<th> AMOUNT PAID:</th>
									<td><input type="text" name="amount" placeholder="Enter Amount....."></td>
								</tr>
							</table>
							<br>
							<br>
							<br>
							<table align='right'>
								<tr><td align='right'><img src="./image/user.png" height="150" width="150"></td></tr> <tr>
									<td align='right'><input type="file" name="m_photo" value=""/></td>
								</tr>

							</table>
						</div>
					</div>

			</div>
			<center>
				<input type="submit" class="registerbtn" name="submit" value="Submit">
			</center>
			<br><br>
		</div>
		</form>
		
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
	  </div>
    </div>
  </div>
  
  
  
	<?php
	$sql2 = "SELECT * from mess_bill where stud_id='$ID'";
	//echo $sql;
	//exit;
	$rs2 = mysqli_query($conn, $sql2);
	$rec2 = mysqli_fetch_assoc($rs2);

	?>
	
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        Mess Bill Receipt
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
		<div class="container">
			<div class="card">
				<h2 align='center'>Hostel Manegement System </h2>
				<h5 align='center'>Mess Slip - 2021</h5>

				<hr>

				<div class="row">


					<div class="col-sm-8">
						<table>
							<tr>
								<th> APPLICATION NO.:</th>
								<td><?php echo $rec2['application']; ?></td>
							</tr>

							<tr>
								<th> PAYMENT MODE:</th>
								<td><?php echo $rec2['payment']; ?></td>
							</tr>

							<tr>
								<th> HOSTEL NAME:</th>
								<td><?php echo $rec2['hostel_name']; ?></td>
							</tr>

							<tr>
								<th> MEAL APPLIED:</th>
								<td><?php echo $rec2['meal']; ?></td>
							</tr>
						</table>
						<br>
						<br>
						<table align="left">
						    <tr>
								<th> STUDENT ID:</th>
								<td><?php echo $rec2['stud_id']; ?></td>
							</tr>

							
							<tr>
								<th> STUDENT NAME:</th>
								<td><?php echo $rec2['s_name']; ?></td>
							</tr>

							<tr>
								<th> FATHER NAME:</th>
								<td><?php echo $rec2['f_name']; ?></td>
							</tr>

							<tr>
								<th> MOTHER NAME:</th>
								<td><?php echo $rec2['m_name']; ?></td>
							</tr>

							<tr>
								<th> CONTECT NUMBER:</th>
								<td><?php echo $rec2['contact']; ?></td>
							</tr>

							<tr>
								<th> EMAIL ID:</th>
								<td><?php echo $rec2['email_id']; ?></td>
							</tr>

							<tr>
								<th> ADDRESS:</th>
								<td><?php echo $rec2['address']; ?></td>
							</tr>

							<tr>
								<th> CATEGORY:</th>
								<td><?php echo $rec2['category']; ?></td>
							</tr>

						</table>
					</div>
					<div class="col-sm-4">
						<table>
							<tr>
								<th> TRANSACTION No:</th>
								<td><?php echo $rec2['transaction']; ?></td>
							</tr>

							<tr>
								<th> AMOUNT PAID:</th>
								<td><?php echo $rec2['amount']; ?></td>
							</tr>
						</table>
						<br>
						<br>
						<br>
						<table align='right'>
							<tr>
								<td align='right'><img src='<?php echo $rec2['m_photo']; ?>' height='150' width='150'></td>
							</tr>

						</table>
					</div>
				</div>

			</div>
			<input type="text" id="currentDateTime">
			<br><br>
		</div>
	</div>

	<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.maxHeight) {
					panel.style.maxHeight = null;
				} else {
					panel.style.maxHeight = panel.scrollHeight + "px";
				}
			});
		}
	</script>

	<script>
		var today = new Date();
		var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
		var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
		var dateTime = date + ' ' + time;
		document.getElementById("currentDateTime").value = dateTime;
	</script>

</div>
</div>
</div>
</body>

</html>