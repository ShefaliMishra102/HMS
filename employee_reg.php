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

    <title>Registration</title>
	<link rel="stylesheet" type="text/css" href=".\css\employee_reg.css">
	
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
<?php include("admin_header.php")?>

<div style="text-align:center" class="title_reg">
<h1>Employee Registration Form</h1>
<img src=".\image\border2.png" class="borderimg"></img>
</div>
<form action="employee_reg_details.php" method="POST" enctype="multipart/form-data">
<table>
<p class="solid">Employee Details</p>
<br>
<tr>
<th width="200px">Select Hostel</th>
<td ><select id="hostel_name" name="hostel_name" placeholder="Please Select......" required>
      <option selected disabled value="">Please Select......</option>
      <option value="Girls Hostel">Girls Hostel</option>
      <option value="Boys Hostel">Boys Hostel</option>
    </select>
	
 </td></tr>
 <br>
 <br>
<tr>
<th width="200px">Select Type</th>
<td ><select id="emp_type" name="emp_type" required>
  <option selected disabled value=""> Please Select....</option>
      <option value="Warden">Warden</option>
      <option value="Suprintendent">Suprintendent</option>
      <option value="Office Staff">Office Staff</option>
      <option value="Mess Supervisor">Mess Supervisor</option>
      <option value="Cook/Helper cook">Cook/Helper cook</option>
      <option value="Housekepping Staff">Housekepping Staff</option>
    </select>
 </td>
 </tr>

 <tr>
<th width="200px">Full Name</th>
<td><input type="text" name="e_name" placeholder="enter your full name....." required></td>
 </tr>

<tr>
<th width="200px">Email Id</th>
<td><input type="email" name="email_id" placeholder="enter your email id....."></td>
</tr>

 <tr>
<th width="200px">Contact Number</th>
<td><input type="number" name="e_mobile" placeholder="enter your Contact no....."></td>
</tr>

<tr>
<th width="200px">Gender</th>
<td ><select id="e_gender" name="e_gender" placeholder="Please Select gender......" required>
  <option > Please Select....</option>
      <option value="Female">Female</option>
      <option value="Male">Male</option>
      <option value="Transgender">Transgender</option>
      <option value="Other">Other</option>
    </select>
 </td>
</tr>

 <tr>
<th width="200px">Date Of Birth</th>
<td><input type="date" name="e_dob" placeholder="enter your Date of birth....." required></td>
 </tr>

<tr>
<th width="200px">Category</th>
<td><select id="e_category" name="e_category" placeholder="Please Select category......" required>
  <option > Please Select....</option>
      <option value="General">General</option>
      <option value="OBC">OBC</option>
      <option value="SC">SC</option>
      <option value="ST">ST</option>
    </select>
	</td>
</tr>

 <tr>
<th width="200px">Joining date</th>
<td><input type="date" name="join_start" placeholder="enter your course start date....." required></td>

</tr>

<tr>
<th width="200px">Blood Group</th>
<td><select id="blood" name="blood" placeholder="Please Select blood group......" required>
      <option selected disabled value="">Please Select blood group......</option>
      <option value="A+">A+</option>
      <option value="B+">B+</option>
      <option value="AB+">AB+</option>
      <option value="O+">O+</option>
	  <option value="A-">A-</option>
      <option value="B-">B-</option>
      <option value="AB-">AB-</option>
      <option value="O-">O-</option>
    </select>
	</td>
	</tr>

 <tr>
<th width="200px">Nationality</th>
<td><input type="text" name="nationality" placeholder="enter your nationality....." required></td>
</tr>

</table>

<table>
<br><p class="solid">Family Details</p>
<br>
<tr>
<th width="200px">Father Name</th>
<td><input type="text" name="f_name" placeholder="enter your Father Name....." required></td>
</tr>

<tr>
<th width="200px">Mother Name</th>
<td><input type="text" name="m_name" placeholder="enter your Mother Name....." required></td>
</tr>

 

</table>
<table>
<br><p class="solid">Address Details</p>
<br>
<tr>
<th width="200px">Street/House Number</th>
<td><input type="text" name="street" placeholder="enter street....." required></td>
</tr>

 <tr>
<th width="200px">City</th>
<td><input type="text" name="city" placeholder="enter City....." required></td>
</tr>
<tr>
<th width="200px">State</th>
<td><input type="text" name="state" placeholder="enter state....." required></td>
</tr>

 <tr>
<th width="200px">Country</th>
<td><input type="text" name="country" placeholder="enter Country....." required></td>
</tr>
<tr>
<th width="200px">Pin Code</th>
<td><input type="number" name="pin" placeholder="enter pin code....." required></td>
</tr>
</table>

    <table>
      <br>
     <p class="solid">Photo Uploads</p>
      <br>
      <tr>
        <th width="200px">Employee Photo
          <font color="red">*</font>
        </th>
        <td><input type="file" name="photo" required>
        </td>
      </tr>
    </table>
   
<br>
<br>
<center>
<input type="submit" class="registerbtn" name="submit" value="Submit">
<input type="reset" class="registerbtn1" name="reset" value="Clear">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
	{
	 ?>
<script>
swal({
   title: "<?php echo $_SESSION['status'];?>",
  text: "<?php echo $_SESSION['status_text'];?>",
  icon: "<?php echo $_SESSION['status_code'];?>",
  button: "Done",
});
</script>
<?php 
    unset($_SESSION['status']);
	}
?>

<br><br>
</form>
</center>
	 
<?php include("footer.php")?> 
 </body>
</html>