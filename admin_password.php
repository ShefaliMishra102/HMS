<?php
session_start();
include("conn.php");
error_reporting(0);

?>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="./css/a_contect_mang.css">
</head>

<body  background="./image/bg22.jpg">
    <?php include("admin_header.php") ?>

    <form action="achange.php" method="POST">

        <div class="column middle">
            <font color="black" size="3">
                <h1>Change Password</h1>
                <hr width="100%" color="black" size="6">
            </font>
            <table>
                <tr>
                    <th>Old Password</th>
                </tr>
                <tr>
                    <td><input type="password" placeholder="Old Password....." name="password" value="" required></td>
                </tr>
                <tr>
                    <th>New Password</th>
                </tr>
                <tr>
                    <td><input type="password" placeholder="New Password....." name="npassword" value="" required></td>
   			   </tr>
			   <tr>
                    <th>Confirm Password</th>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Confirm Password....." name="confirm_Password" required></td>
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


</body>

</html>