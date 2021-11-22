<?php
session_start();
include("conn.php");
error_reporting(0);

?>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css"  href=".\css\forget.css">
</head>

<body background="./image/bg40.jpg">
    <?php include("header.php") ?>
    <form action="adminforgetdetails.php" method="POST">

        <div class="column middle">
		<div class= "cantainer">
            <font color="black" class="self">
                <h1>Verify Your Self</h1>
                <hr width="100%" color="black" size="6">
            </font>
            <table>
                <tr>
                    <th>ID</th>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Enter ID....." name="ID" required></td>
                </tr>
                <tr>
                    <th>Name</th>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Enter Name....." name="Name" required></td>
                </tr>
                <tr>
                    <th>Date Of Birth</th>
                </tr>
                <tr>
                    <td><input type="date" name="dob" required></td>
                </tr>
            </table>
            <button type="submit" name="submit" class="registerbtn">Submit</button>
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


</div>
    
</body>

</html>