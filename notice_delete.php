<?php

session_start();
include("conn.php");
error_reporting(0);

$ID = $_GET['ID'];


$query = "DELETE FROM notice_board WHERE ID='" . $ID . "'";

$data = mysqli_query($conn, $query);

if($data){
	$_SESSION['status']="Notice is Deleted ";
	$_SESSION['status_code']="success";
    header('location:notice_show_admin.php');
}
else{
	$_SESSION['status']="Try Again";
	$_SESSION['status_code']="error";
    header('location:notice_show_admin.php');
	mysql_error(0); 

}

?>

