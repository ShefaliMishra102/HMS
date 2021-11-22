<?php
session_start();
include("conn.php");
error_reporting(0);

$sql = "SELECT * from notice_board";

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

    <title>Notice Board</title>
    <link rel="stylesheet" type="text/css" href=".\css\admin_student_style.css">

  </head>

  <body >


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2:  Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


    <?php include("admin_header.php") ?>

    <div class="heading">
      <h1> Notice Board </h1>
    </div>
<br>
    <div class="cantainer">
      <form action="" method="POST">
        <table callspacing="30px" border="6" callpadding="30px" style="width:75%">

          <tr height="60px" font="20px">
            <th>S.N.</th>
            <th>Notice Description</th>
            <th>Photo</th>
            <th>Action</th>
          </tr>
          <?php
		  if ($total != 0) {

          while ($rec = mysqli_fetch_assoc($rs)) {
          ?>
            <tr>
              <td style="width:20%"><?php echo $rec['ID']; ?>
              </td>
              <td style="width:60%"><a href='<?php echo $rec['notice_photo']; ?>'><?php echo $rec['notice_description']; ?></a>
              </td>
              <td style="width:10%"><img id="myImg" src='<?php echo $rec['notice_photo']; ?>' alt="Snow"  height='50' width='50'><!-- The Modal -->
                

              </td>
			  <td style="width:10%"><a href="notice_delete.php?ID=<?php echo $rec['ID']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>

            </tr>
        <?php
          }
        }
        ?>


        </table>
      </form>
    </div>
    </div>
    </div>


    </div>
	<div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img">
                    <div id="caption">dddd</div>
                </div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
    
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