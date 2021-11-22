<?php
session_start();
include("conn.php");
error_reporting(0);

$sql = "SELECT * from student where NOT EXISTS (SELECT * FROM room WHERE room.stud_id = student.ID OR student.hos = 'Boys Hostel' )";

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

    <title>Room Allocation</title>
    <link rel="stylesheet" type="text/css" href=".\css\room_style.css">

  </head>

  <body background="./image/bg5.jpg">


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2:  Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


    <?php include("girls_employee_header.php") ?>

    <div class="heading">
      <h1> Room Allocation</h1>
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
                Student ID<br>
                <input type="text" name="stud_id" value="<?php echo $rec['ID']; ?>"></p>
              </div>
              <div class="col-4">
                Student Name<br>
                <input type="text" name="stud_name" value="<?php echo $rec['name']; ?>"></p>
              </div>
              <div class="col-4">
                Student Father Name<br>
                <input type="text" name="stud_f_name" value="<?php echo $rec['f_name']; ?>"></p>
              </div>
            </div>

            <div class="row">
              <div class="col-4">
                Student Contact Number<br>
                <input type="text" name="stud_contact" value="<?php echo $rec['mobile']; ?>"></p>
              </div>
              <div class="col-4">
                Student Email Id<br>
                <input type="email" name="email_id" value="<?php echo $rec['email_id']; ?>"></p>
              </div>
            </div>

            <div class="row">

              <div class="col-12">
                For Allocation
                <a href="girls_room_allocation.php?id=<?php echo $rec['ID']; ?>">Click Here</a>
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
   <b> No Hosteller yet to allocation of Room
</b>  </div>
</div>
		  <?php
	  }
      ?>

      </form>
    </div>

  </body>

  </html>	