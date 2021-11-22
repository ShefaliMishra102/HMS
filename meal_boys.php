<?php
session_start();
include("conn.php");
error_reporting(0);

$sql = "SELECT * from meal ";
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

    <title>Meal</title>
    <link rel="stylesheet" type="text/css" href=".\css\meal.css">

  </head>

  <body background="./image/bg5.jpg">
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2:  Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


    <?php include("employee_header_boys.php") ?>

    <div class="heading">
      <h1>Boys Hostel Meal Manage </h1>
    </div>
    <div class="column middle">
        <table callspacing="30px" border="6" callpadding="30px" width="70%">


          <tr height="60px" font="20px">
            <th>Day</th>
            <th>Beakfast</th>
            <th>Lunch</th>
            <th>Snacks</th>
            <th>Dinner</th>

          </tr>
		  <?php
		  if ($total != 0) {
          while ($rec = mysqli_fetch_assoc($rs)) {
          ?>
          <tr height="60px" font="20px">
            <td><?php echo $rec['Day']; ?></td>
            <td><?php echo $rec['breakfast']; ?></td>
            <td><?php echo $rec['lunch']; ?></td>
            <td><?php echo $rec['snack']; ?></td>
            <td><?php echo $rec['dinner']; ?></td>

          </tr>
		  <?php
          }
        }
        ?>
      </table>
      </form>
    </div>
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