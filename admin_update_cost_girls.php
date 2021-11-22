<?php

session_start();
include("conn.php");
error_reporting(0);
if(isset($_POST['submit']))
{

$ID = $_GET['ID'];
$cost_type = $_POST['cost_type'];
$description = $_POST['description'];
$cost_amount = $_POST['cost_amount'];


$query = "Update cost SET cost_type = '$cost_type', description = '$description', cost_amount = '$cost_amount' where ID = '$ID'";

$data = mysqli_query($conn, $query);


if($data){
	$_SESSION['status']="Data is updated ";
	$_SESSION['status_code']="success";
    header('location:admin_cost_girls.php');
}
else{
	$_SESSION['status']="Try Again";
	$_SESSION['status_code']="error";
    header('location:admin_cost_girls.php');
	mysql_error(0); 

}
}
?>