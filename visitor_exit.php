<?php
session_start();
include("conn.php");
error_reporting(0);
$ID = $_GET['ID'];
$sql = "SELECT * from visitors where ID='$ID'";
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

    <title>Visitor</title>
    <link rel="stylesheet" type="text/css" href=".\css\visitor_style.css">

  </head>

  <body background="./image/bg19.jpg">


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
  <form action="visitor_details_update.php?ID=<?php echo $rec['ID']; ?>" method="POST">
    <table>
      <br> <br> <br> <br>
	  <tr>
      
        <th width="200px">Full Name:</th>
        <td><input type="text" value="<?php echo $rec['name'];?>">
        </td>

        <th width="200px">Email Id:</th>
        <td><input type="text" value="<?php echo $rec['email_id'];?>">
        </td>
       </tr>
	    <tr>
        <th width="200px">Exit Date:</th>
        <td><input type="date" name="exit_date" required>
        </td>
        <th width="200px">Exit Timing:</th>
		
        <td><input type="time" name="exit_timing" required>
        </td>
       </tr>
 </table>
 <br><br><br>
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

  </body>

  </html>