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
	$sql = "SELECT * from employee WHERE ID='" . $ID . "'";
	$result = mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);

if($old == $row["password"] && $_POST["new_password"] == $_POST["confirm_Password"] ) {

$query = "Update employee SET password='" . $new . "' WHERE ID='" . $ID . "'";
$data = mysqli_query($conn, $query);

if($data){
	$_SESSION['status']="Password is updated";
	$_SESSION['status_code']="success";
    header('location:girls_employee_dashboard.php');
}
else{
	$_SESSION['status']="Try Again";
	$_SESSION['status_code']="error";
    header('location:girls_employee_pass.php');
	mysql_error(0); 

}
}
}
}
?>