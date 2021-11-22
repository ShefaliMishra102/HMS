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
	$sql = "SELECT * from student WHERE ID='" . $ID . "'";
	$result = mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);

if($old == $row["password"] && $_POST["new_password"] == $_POST["confirm_Password"] ) {

$query = "Update student SET password='" . $new . "' WHERE ID='" . $ID . "'";
//echo $query;
//exit;
$data = mysqli_query($conn, $query);

if($data){
	$_SESSION['status']="Password is updated";
	$_SESSION['status_code']="success";
    header('location:stud_dashboard.php');
}
else{
	$_SESSION['status']="Try Again";
	$_SESSION['status_code']="error";
    header('location:stud_pass_change.php');
	mysql_error(0); 

}
}
}
}
?>