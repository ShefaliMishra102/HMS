
<?php
session_start();
include("conn.php");
error_reporting(0);
if(isset($_POST['submit']))
{
	$ID = $_SESSION["ID"];
	$old = $_POST['password'];
	$new = $_POST['new_password'];
if(count($_POST)>0) {
	$sql = "SELECT * from admin WHERE ID='" . $ID . "'";
	$result = mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);

if($old == $row["password"] && $_POST["new_password"] == $_POST["confirm_Password"] ) {

$query = "Update admin SET password='" . $new . "' WHERE ID='" . $ID . "'";
$data = mysqli_query($conn, $query);

if($data){
	$_SESSION['status']="Password is updated";
	$_SESSION['status_code']="success";
    header('location:admin_dashboard.php');
}
else{
	$_SESSION['status']="Try Again";
	$_SESSION['status_code']="error";
    header('location:admin_password.php');
	mysql_error(0); 

}
}
}
}
?>