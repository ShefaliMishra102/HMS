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

  <title>HMS</title>
  <link rel="stylesheet" type="text/css" href=".\css\contact.css">

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
  <div class="container">
    <div class="row">
      <div class="col-9">
        <img src=".\image\cc.jpg" class="img-con" alt="...">
      </div>
      <div class="col-4">
        <font color="blue">
          <p>
            <u><b>
                <h1> Contact Info</h1>
              </b></u>
        </font><br>
        <h3><img src=".\image\l.png" width="5.5%">&nbsp;&nbsp;&nbsp;&nbsp;<u><b>ADDRESS</h3></b></u><br>
        <h4>Main Office:</h4>
        Corporate Address: Saraswati bhavan, Malviya nagar, Varanasi pin-221004 <br>
        <h4> Rrgional Office Address:</h4>
        Lohri house, George Town, Allahabad pin-242314

        <br><br><br>
        <h3><img src=".\image\p.png" width="5.5%">&nbsp;&nbsp;&nbsp;&nbsp;<u><b>PHONE NUMBERS</h3></b></u><br>
        <h4>Main Office:</h4>+91-8418899363 <br>
        <h4>Customer Support:</h4>+91-8418899363

        <br><br><br>
        <h3><img src=".\image\e.png" width="5.5%">&nbsp;&nbsp;&nbsp;&nbsp;<u><b>EMAIL ADDRESS</h3></b></u><br>
        Info@hostel.com<br>
        Complaints@hostel.com <br>
        Services@hostel.com</p>
      </div>
      <div class="col-6">
        <font color="blue">
          <u><b>
              <h1> Leave A Message</h1>
            </b></u>
        </font><br>
        <form action="contect.php" method="POST">
          <br> <label for="fname">First Name</label>
          <input type="text" id="fname" name="fname" placeholder="Your name..">
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lname" placeholder="Your last name..">
          <label for="mobile">Mobile No.</label>
          <input type="number" id="mobile" name="c_mobile" placeholder="Your Mobile No..."><br>
          <label for="email">Email Id</label>
          <input type="email" id="email" name="c_email" placeholder="Your Email Id...">
          <label for="subject">Message</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
          <input type="submit" name="submit" value="Send A Message">
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
  
  <?php include("footer.php") ?>
</body>

</html>