<?php
session_start();
include("conn.php");
error_reporting(0);

if(isset($_POST['submit']))
{
	$ID = $_GET["ID"];
	$new = $_POST['new_password'];

if($_POST["new_password"] == $_POST["confirm_Password"] ) {

$query = "Update employee SET password='" . $new . "' WHERE ID='" . $ID . "'";
//echo $query;
//exit;
$data = mysqli_query($conn, $query);

if($data){
	$_SESSION['status']="Password is updated";
	$_SESSION['status_code']="success";
    header('location:logine.php');
}
else{
	$_SESSION['status']="Try Again";
	$_SESSION['status_code']="error";
    header('location:girls_eforget.php');
	mysql_error(0); 

}
}
}
?>
