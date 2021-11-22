<?php

session_start();
include("conn.php");
error_reporting(0);

$ID = $_GET['ID'];


$query = "DELETE FROM student WHERE ID='" . $ID . "'";

$data = mysqli_query($conn, $query);

if($data){
	$_SESSION['status']="Student is Deleted ";
	$_SESSION['status_code']="success";
    header('location:admin_student.php');
}
else{
	$_SESSION['status']="Try Again";
	$_SESSION['status_code']="error";
    header('location:admin_student.php');
	mysql_error(0); 

}

?>

