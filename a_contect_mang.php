<?php
session_start();
include("conn.php");
error_reporting(0);
$sql = "SELECT * from contact_us";
$rs = mysqli_query($conn, $sql);
$total = mysqli_num_rows($rs);
?>
   <html>

   <head>
      <title>Admin Contect Us Manage</title>
      <link rel="stylesheet" type="text/css" href=".\css\a_contect_mang.css">
   </head>

   <body background="./image/bg22.jpg">
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

      <?php include("admin_header.php") ?>

      <div class="heading">
         <h1> Contect Us details</h1>
      </div>

  
    <input id="myInput" onkeyup="myFunction()" type="search" placeholder="Search " aria-label="Search">
  
      <div class="column middle">
         <form action="" method="POST">
            <table id="myTable" border="6">

               <tr class="header" height="60px" font="20px">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Date & Time</th>
				  


               </tr>
               <?php
			   if ($total != 0) {

               while ($rec = mysqli_fetch_assoc($rs)) {
               ?>
                  <tr>
                     <td><?php echo $rec['ID']; ?></td>
                     <td><?php echo $rec['fname'] . ' ' . $rec['lname']; ?></td>
                     <td><?php echo $rec['c_mobile']; ?></td>
                     <td><?php echo $rec['c_email']; ?></td>
                     <td><?php echo $rec['subject']; ?></td>
                     <td><?php echo $rec['time']; ?></td>

                  </tr>
            <?php
               }
            }
            ?>

            </table>
         </form>
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