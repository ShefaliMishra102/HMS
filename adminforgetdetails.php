<?php
session_start();
include("conn.php");
error_reporting(0);
if(isset($_POST['ID']))
{
	$ID = $_POST['ID'];
	$Name = $_POST['Name'];
	$dob = $_POST['dob'];
if(count($_POST)>0) {
	$sql = "SELECT * from admin WHERE ID='" . $ID . "'";
	$result = mysqli_query($conn,$sql);
	$rec=mysqli_fetch_array($result);

if($ID == $rec["ID"] && $Name == $rec["Name"] && $dob == $rec["dob"]  ) {

    if(empty($_POST['ID'])||empty($_POST['Name'])||empty($_POST['dob'])){
		$_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
        header("location:adminforget.php"); // Redirecting to first page 
 
	}
}
}
}
?>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css"  href=".\css\forget.css">
</head>

<body background="./image/bg40.jpg">
    <?php include("header.php") ?>
    <form action="adminforgetchange.php?ID=<?php echo $rec['ID']; ?>" method="POST">

        <div class="column middle">
		<div class= "cantainer">
            <font color="black" class="self">
                <h1>Change Password</h1>
                <hr width="100%" color="black" size="6">
            </font>
            <table>
               
                <tr>
                    <th>ID</th>
                </tr>
                <tr>
                    <td><input type="text" name="ID" value="<?php echo $rec['ID']; ?>" disabled></td>
                </tr>
                <tr>
                    <th>New Password</th>
                </tr>
                <tr>
                    <td><input type="password" placeholder="New Password....." name="new_password" required></td>
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


</div>
    
</body>

</html>