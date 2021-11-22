<?php
session_start();
include("conn.php");
error_reporting(0);
$application = $_GET['application'];
$sql2 = "SELECT * from mess_bill where application='$application'";
//echo $sql;
//exit;
$rs2 = mysqli_query($conn, $sql2);
$rec2 = mysqli_fetch_assoc($rs2);

?>
	

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>mess Bill</title>
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
								<td align='right'> <img src="<?php echo $rec2['m_photo']; ?>" height="150" width="150"></td>
							</tr>

						</table>
					</div>
				</div>

			</div>

			<input type="text" id="currentDateTime">
			<br><br>
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


</body>

</html>