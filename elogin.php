
<?php
session_start();
include("conn.php");
error_reporting(0);

if(isset($_POST['submit']))
{
$ID = $_POST['ID'];
$password = $_POST['password'];
$sql = "SELECT * from employee where ID= '$ID' && password='$password' && hostel_name='Girls Hostel' ";
$rs = mysqli_query($conn, $sql);
$total = mysqli_num_rows($rs);
if ($total == 1) {
    $_SESSION['ID'] = $ID;
	$_SESSION['status']="Now You Logged in";
	$_SESSION['status_code']="success";
    header('location:girls_employee_dashboard.php');
} else {
    $_SESSION['status']="Username or Password combination are incorrect, Try Again.";
	$_SESSION['status_code']="error";
    header('location:logine.php');
	mysql_error(0); 
	}
}
?>
