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

  <title>Feedback Form</title>
  <link rel="stylesheet" type="text/css" href=".\css\stud_feedback.css">

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

  <form action="feed.php" method="POST">
    <div class="db">
      <h1>
        Enquiries/ Suggestion / Feedback Form</h1>
    </div>
    <div class='card'>
      <table>
        <br>
        <p class="solid">Your Contact Information</p>
        <br>
        <font color="red" size="5">
          <center>Welcome your Queries/ Questions / Problems And Comments</center>
        </font>
        <br>
        <tr>
          <th width="300px">Select Nature of Complaint</th>
          <td><select id="comp" name="comp" placeholder="Please Select......" required>
              <option> Please Select....</option>
              <option value="General Feedback">General Feedback</option>
              <option value="Login Problem">Login Problem</option>
              <option value="Enquiries">Enquiries</option>
              <option value="Complaint">Complaint</option>
            </select>
          </td>
		  
		  <th width="300px">Hosteller ID</th>
          <td><input type="text" name="stud_id" value="<?php echo $rec['ID']; ?>" required></td>
        </tr>

        <tr>
                
		  <th width="300px">Full Name</th>
          <td><input type="text" name="f_name" value="<?php echo $rec['name']; ?>" required></td>
          <th width="300px">Hostel Name</th>
          <td><input type="text" name="hos" value="<?php echo $rec['hos']; ?>" required></td>
        </tr>

        <tr>
        
<?php
	$sql3 = "SELECT * from room where stud_id='$ID'";
    $rs3 = mysqli_query($conn, $sql3);
	$rec3 = mysqli_fetch_assoc($rs3);
?>
          <th width="300px">Room Number</th>
          <td><input type="text" name="f_rn" value="<?php echo $rec3['room_number']; ?>" required></td>
          <th width="300px">Block Name</th>
          <td><input type="text" name="f_bn" value="<?php echo $rec3['block_name']; ?>" required></td>
        </tr>

        <tr>
          <th width="300px">Email Id</th>
          <td><input type="email" name="f_id" value="<?php echo $rec['email_id']; ?>" required></td>

          <th width="300px">Contact Number</th>
          <td><input type="number" name="f_mobile" value="<?php echo $rec['mobile']; ?>" required></td>
        </tr>
      </table>

      <table>
        <br>
        <p class="solid">Please Mention Your Problem / Query / Sugesstion</p>
        <br>
        <tr>
          <th width="300px">Suject / Topic</th>
          <td><input type="text" name="topic" placeholder="enter Suject / Topic....." required></td>

          <th width="300px">Type your sugession/query/problem</th>
          <td><textarea name="query" row=10 col=10 placeholder="enter your sugession/query/problem....." required></textarea></td>
        </tr>
      </table>
      <br>
      <center>
        <input type="submit" class="registerbtn" name="submit" value="Submit">
        <input type="reset" class="registerbtn1" name="reset" value="Clear">
        <br><br>
        <font color="red" size="4">
          <center>* Your details will be used for correspondence only and kept confidential.</center>
        </font>
        <font color="#ff1493" size="4">
          <center>* We will make every attempt to respond to all valid queries.</center>
        </font>
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