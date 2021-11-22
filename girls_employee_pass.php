<?php
session_start();
include("conn.php");
error_reporting(0);
$ID = $_SESSION['ID'];
$sql = "SELECT * from employee where ID='$ID'";
$rs = mysqli_query($conn, $sql);
$rec = mysqli_fetch_assoc($rs);

?>
<html>

<head>
    <title>Employee</title>
    <link rel="stylesheet" type="text/css" href=".\css\change_psss.css">
</head>

<body background="./image/bg5.jpg">
    <?php include("girls_employee_header.php") ?>
    <form action="echange.php" method="POST">

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
                    <td><input type="password" placeholder="Old Password....." name="password" required></td>
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
    </div>


    </div>

    </header>
</body>

</html>