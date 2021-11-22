<?php

session_start();
include("conn.php");
error_reporting(0);

$ID = $_GET['ID'];


$query = "DELETE FROM employee WHERE ID='" . $ID . "'";

$data = mysqli_query($conn, $query);

if($data){
	$_SESSION['status']="Employee is Deleted ";
	$_SESSION['status_code']="success";
    header('location:employee_reg_mang.php');
}
else{
	$_SESSION['status']="Try Again";
	$_SESSION['status_code']="error";
    header('location:employee_reg_mang.php');
	mysql_error(0); 

}

?>

