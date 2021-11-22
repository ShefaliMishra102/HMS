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
  <link rel="stylesheet" type="text/css" href=".\css\student_reg.css">

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

  <?php include("header.php") ?>

  <div style="text-align:center" class="title_reg">
    <h1>Hostel Registration Form</h1>
    <img src=".\image\border2.png" class="borderimg"></img>
  </div>
  <p class="note"><b>Note: Please fill the form carefully</b><br>
    <font color="red">* mandetory field</font><br>
  </p>
  <form action="student_reg_detail.php" method="POST" enctype="multipart/form-data">
    <table>
      <p class="solid">Hosteller Information</p>
      <br>

      <tr>
        <th width="200px">Select Hostel<font color="red">*</font>
        </th>
        <td><select id="hos" name="hos" placeholder="Please Select......" required>
            <option selected disabled value="">Please Select......</option>
            <option value="Girls Hostel">Girls Hostel</option>
            <option value="Boys Hostel">Boys Hostel</option>
          </select>
        </td>

        <th width="200px">Full Name<font color="red">*</font></th>
        <td><input type="text" name="name" placeholder="enter your full name....." required>
        </td>
      </tr>

      <tr>
        <th width="200px">Email Id<font color="red">*</font></th>
        <td><input type="email" name="email_id" placeholder="enter your email id....." required>
        </td>

        <th width="200px">Contact Number<font color="red">*</font></th>
        <td><input type="number" name="mobile" placeholder="enter your Contact no....." pattern="[1-9]{1}[0-9]{9}" maxlength="10" required>
        </td>
      </tr>

      <tr>
        <th width="200px">Gender<font color="red">*</font>
        </th>
        <td><select id="gender" name="gender" placeholder="Please Select gender......" required>
            <option selected disabled value="">Please Select gender......</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="Transgender">Transgender</option>
            <option value="Other">Other</option>
          </select>
        </td>

        <th width="200px">Date Of Birth<font color="red">*</font></th>
        <td><input type="date" name="dob" placeholder="enter your Date of birth....." required>
        </td>
      </tr>

      <tr>
        <th width="200px">Category<font color="red">*</font>
        </th>
        <td><select id="category" name="category" placeholder="Please Select category......" required>
            <option selected disabled value="">Please Select category......</option>
            <option value="General">General</option>
            <option value="OBC">OBC</option>
            <option value="SC">SC</option>
            <option value="ST">ST</option>
          </select>
        </td>

        <th width="200px">Course<font color="red">*</font></th>
        <td><input type="text" name="course" placeholder="enter your course....." required>
          <div id="validationServer04Feedback" class="invalid-feedback">
            Please provide a course name.
          </div>
        </td>
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
 
        <th width="200px">Nationality<font color="red">*</font></th>
        <td><input type="text" name="nationality" placeholder="enter your nationality....." required>
        </td>
      </tr>

    </table>

    <table>
      <br>
      <p class="solid">Family Details</p>
      <br>
      <tr>
        <th width="200px">Father Name<font color="red">*</font></th>
        <td><input type="text" name="f_name" placeholder="enter your Father Name....." required>
        </td>

        <th width="200px">Father Contact Number<font color="red">*</font></th>
        <td><input type="number" name="f_mobile" placeholder="enter your Father Contact no....." pattern="[1-9]{1}[0-9]{9}" maxlength="10" required>
        </td>
      </tr>

      <tr>
        <th width="200px">Father Email<font color="red">*</font></th>
        <td><input type="email" name="f_email" placeholder="enter your Father email....." required>
        </td>

        <th width="200px">Father Occupation/ Designation<font color="red">*</font> </th>
        <td><input type="text" name="f_occupation" placeholder="enter your Father Occupation/ Designation....." required>
        </td>
      </tr>


      <tr>
        <th width="200px">Mother Name<font color="red">*</font></th>
        <td><input type="text" name="m_name" placeholder="enter your Mother Name....." required>
        </td>

        <th width="200px">Mother Contact Number<font color="red">*</font></th>
        <td><input type="number" name="m_mobile" placeholder="enter your Mother Contact no....." pattern="[1-9]{1}[0-9]{9}" maxlength="10" required>
        </td>
      </tr>

      <tr>
        <th width="200px">Mother Email</th>
        <td><input type="email" name="m_email" placeholder="enter your Mother email....."></td>

        <th width="200px">Mother Occupation/ Designation<font color="red">*</font> </th>
        <td><input type="text" name="m_occupation" placeholder="enter your Mother Occupation/ Designation....." required>
        </td>
      </tr>

    </table>
    <table>
      <br>
      <p class="solid">Address Details</p>
      <br>
      <tr>
        <th width="200px">Street/House Number<font color="red">*</font></th>
        <td><input type="text" name="street" placeholder="enter street....." required>
        </td>
 
        <th width="200px">City<font color="red">*</font></th>
        <td><input type="text" name="city" placeholder="enter City....." required>
        </td>
      </tr>

      <tr>
        <th width="200px">State<font color="red">*</font></th>
        <td><input type="text" name="state" placeholder="enter state....." required>
        </td>

        <th width="200px">Country<font color="red">*</font></th>
        <td><input type="text" name="country" placeholder="enter Country....." required>
        </td>
      </tr>

      <tr>
        <th width="200px">Pin Code<font color="red">*</font></th>
        <td><input type="number" name="pin" placeholder="enter pin code....." required>
        </td>
      </tr>
    </table>

    <table>
      <br>
      <p class="solid">Local Guardian Details</p>
      <br>
      <tr>
        <th width="200px">Guardian Name</th>
        <td><input type="text" name="g_name" placeholder="enter your guardian name....."></td>

        <th width="200px">Guardian Contact Number</th>
        <td><input type="number" name="g_mobile" placeholder="enter your Guardian Contact no....." pattern="[1-9]{1}[0-9]{9}" maxlength="10"></td>
      </tr>
 
      <tr>
        <th width="200px">Guardian Email</th>
        <td><input type="email" name="g_email" placeholder="enter your Guardian email id....."></td>

        <th width="200px">Guardian Occupation/ Designation </th>
        <td><input type="text" name="g_occupation" placeholder="enter your Guardian Occupation/ Designation....."></td>
      </tr>

      <tr>
        <th width="200px">Relationship With Guardian </th>
        <td><input type="text" name="g_relation" placeholder="enter your Relationship With Guardian....."></td>

        <th width="200px">Guardian Address</th>
        <td><textarea name="g_address" row=10 col=10 placeholder="enter your Guardian Address....."></textarea></td>
      </tr>
    </table>

    <table>
      <br>
     <p class="solid">Photo Uploads</p>
      <br>
      <tr>
        <th width="200px">Student Photo
          <font color="red">*</font>
        </th>
        <td><input type="file" name="photo" required>
			</td>
      </tr>
    </table>
    <br>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        <h6><b> Agree to terms and conditions </b></h6>
      
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
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
  text: "<?php echo $_SESSION['status_text'];?>",
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