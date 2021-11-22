<?php
session_start();
include("conn.php");
error_reporting(0);

if(isset($_POST['submit']))
{
	$ID = $_GET["ID"];
	$new = $_POST['new_password'];

if($_POST["new_password"] == $_POST["confirm_Password"] ) {

$query = "Update admin SET password='" . $new . "' WHERE ID='" . $ID . "'";
echo $query;
//exit;
$data = mysqli_query($conn, $query);

if($data){
	$_SESSION['status']="Password is updated";
	$_SESSION['status_code']="success";
    header('location:logina.php');
}
else{
	$_SESSION['status']="Try Again";
	$_SESSION['status_code']="error";
    header('location:adminforget.php');
	mysql_error(0); 

}
}
}
?>
