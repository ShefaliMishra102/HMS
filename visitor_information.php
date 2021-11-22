<?php
session_start();
include("conn.php");
error_reporting(0);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Visitors Information</title>
  <link rel="stylesheet" type="text/css" href=".\css\visitor_style.css">

</head>

<body background="./image/bg18.jpg">


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2:  Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

  <?php include("header.php") ?>

  <div style="text-align:center" class="title_reg">
    <h1>Visitor Information</h1>
  </div>
      <div class="rightcolumn">
      <div class="card bg-dark ">
        <p id="demo"></p>

        <script>
          const d = new Date();
          document.getElementById("demo").innerHTML = d;
        </script>
      </div>
</div>
  <form action="visitor_details.php" method="POST">
    <table>
      <br>

      <tr>
      
        <th width="200px">Full Name:</th>
        <td><input type="text" name="name" placeholder="Enter your full name....." required>
        </td>

        <th width="200px">Email Id:</th>
        <td><input type="email" name="email_id" placeholder="Enter your email id....." required>
        </td>
       </tr>
	   
       <tr>
        <th width="200px">Contact Number:</th>
        <td><input type="number" name="contact" placeholder="Enter your Contact no....." pattern="[1-9]{1}[0-9]{9}" maxlength="10" required>
        </td>
        <th width="200px">Gender:</th>
        <td><select id="gender" name="gender" placeholder="Please Select gender......" required>
            <option selected disabled value="">Please Select gender......</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="Transgender">Transgender</option>
            <option value="Other">Other</option>
          </select>
        </td>
     </tr>

           <tr>
        <th width="200px">Student Name:</th>
        <td><input type="text" name="s_name" placeholder="Enter Student Name....." required>
        </td>
       
	   <th width="200px">Student Contact Number:</th>
        <td><input type="number" name="s_contact" placeholder="Enter Student Contact no....." pattern="[1-9]{1}[0-9]{9}" maxlength="10" required>
        </td>
      </tr>

      <tr>
        <th width="200px">Entry Date:</th>
        <td><input type="date" name="entry_date" placeholder="Enter Entry Timing....." required>
        </td>
        <th width="200px">Entry Timing:</th>
        <td><input type="time" name="entry_timing" placeholder="Enter Entry Timing....." required>
        </td>
       </tr>


      <tr>
	   <th width="200px">Relationship With Student: </th>
        <td><input type="text" name="relationship" placeholder="Enter Relationship With Student....." required>
         </td>
      
        <th width="200px">Address:</th>
        <td><textarea name="address" row=10 col=10 placeholder="Enter Your Address....."></textarea></td>
      </tr>
</table>
    <center>

      <input type="submit" class="registerbtn" name="submit" value="Submit">
      <input type="reset" class="registerbtn1" name="reset" value="Clear">
      <br><br>
	  
  </form>
  </center>

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

  <?php include("footer.php") ?>
</body>

</html>