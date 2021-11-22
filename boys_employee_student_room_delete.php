<?php

session_start();
include("conn.php");
error_reporting(0);

$ID = $_GET['ID'];


$query = "DELETE FROM room WHERE ID='" . $ID . "'";

$data = mysqli_query($conn, $query);

if($data){
	$_SESSION['status']="Student Room is Deleted ";
	$_SESSION['status_code']="success";
    header('location:room_manage_boys.php');
}
else{
	$_SESSION['status']="Try Again";
	$_SESSION['status_code']="error";
    header('location:room_manage_boys.php');
	mysql_error(0); 

}

?>

