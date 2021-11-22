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
    header('location:girls_room_manage.php');
}
else{
	$_SESSION['status']="Try Again";
	$_SESSION['status_code']="error";
    header('location:girls_room_manage.php');
	mysql_error(0); 

}

?>

