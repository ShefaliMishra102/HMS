<?php
session_start();
include("conn.php");
error_reporting(0);
$sql = "SELECT * from room where hostel_name = 'Boys Hostel'";
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

    <title>Room Manage</title>
    <link rel="stylesheet" type="text/css" href=".\css\room_style.css">

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
    td = tr[i].getElementsByTagName("td")[4];
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
      <h1>Room details</h1>
    </div>

    <input id="myInput" onkeyup="myFunction()" type="search" placeholder="Search" aria-label="Search">

    <div class="column middle">
      <form action="" method="POST">
        <table id="myTable" callspacing="30px" border="6" callpadding="30px" width="80%">
          <tr height="60px" font="20px">
            <th>ID</th>
            <th>Student ID</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Block Name</th>
            <th>Room Number</th>
            <th>Action</th>


          </tr>
          <?php
		  if ($total != 0) {

          while ($rec = mysqli_fetch_assoc($rs)) {
          ?>
            <tr>
              <td><?php echo $rec['ID']; ?> </td>
              <td><?php echo $rec['stud_id']; ?> </td>
              <td><?php echo $rec['stud_name']; ?> </td>
              <td><?php echo $rec['stud_f_name']; ?> </td>
              <td><?php echo $rec['stud_contact']; ?></td>
              <td><?php echo $rec['email_id']; ?></td>
			  <td><?php echo $rec['block_name']; ?></td>
              <td><?php echo $rec['room_number']; ?></td>
              <td><a href="boys_room_allocation_show_details.php?id=<?php echo $rec['stud_id']; ?>"><button type="button" class="btn btn-success">Edit</button></a>
              <a href="boys_employee_student_room_delete.php?ID=<?php echo $rec['ID']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
        <?php
          }
        }
        ?>

        </table>
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


    </div>

    </header>
  </body>

  </html>