<?php
session_start();
include("conn.php");
error_reporting(0);

$sql = "SELECT * from visitors ";

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

    <title>Visitor</title>
    <link rel="stylesheet" type="text/css" href=".\css\visitor_style_show.css">

  </head>
<script src="https://kit.fontawesome.com/81b1d2169d.js" crossorigin="anonymous"></script>
  <body background="./image/bg19.jpg">


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2:  Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->



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

    <?php include("header.php") ?>

    <div class="heading">
      <h1> Visitors Details </h1>
    </div>
<div class="cantainer">
<div class="row">
  <div class="col-sm-6">
    <div class="card bg-transparent">
      <div class="card-body">
        
        <p class="card-text"><p id="demo" class="time"></p>

        <script>
          const d = new Date();
          document.getElementById("demo").innerHTML = d;
        </script></p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6">
     <div class="card bg-transparent">
      <div class="card-body">
        
        <input id="myInput" onkeyup="myFunction()" type="search" placeholder="Search Student Name" aria-label="Search">
       
      </div>
    </div>
  </div>
</div>
</div>

    
  
    <div class="cantainer">
      <form action="" method="POST">
        <table id="myTable" callspacing="30px" border="6" callpadding="30px" style="width:95%" >
        
          <tr class="header" height="60px" font="20px">
            <th>S.N.</th>
            <th>Visitor Name</th>
            <th>Visitor Email</th>
            <th>Visitor Contact Number</th>
            <th>Student Name</th>
            <th>Entry Date</th>
            <th>Entry Timing</th>
            <th>To Exit </th>
          </tr>
          <?php
		  if ($total != 0) {

          while ($rec = mysqli_fetch_assoc($rs)) {
          ?>

            <tr >
              <td style="width:10%"><?php echo $rec['ID']; ?>
              </td>
              <td style="width:17%"><?php echo $rec['name']; ?>
              </td>
              <td style="width:15%"><?php echo $rec['email_id']; ?>
              </td>
			  <td style="width:15%"><?php echo $rec['contact']; ?>
              </td>
              <td style="width:15%"><?php echo $rec['s_name']; ?>
              </td>
              <td style="width:10%"><?php echo $rec['entry_date']; ?>
              </td>
              <td style="width:10%"><?php echo $rec['entry_timing']; ?>
              </td>
			  <td style="width:10%"><a href="visitor_exit.php?ID=<?php echo $rec['ID']; ?>"><button type="button" class="btn btn-success">Exit</button></a>
              </td>
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