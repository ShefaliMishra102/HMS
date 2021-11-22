<?php

session_start();
include("conn.php");
error_reporting(0);
if(isset($_POST['submit']))
{

$ID = $_SESSION['ID'];
$Name = $_POST['Name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$Gender = $_POST['Gender'];
$dob = $_POST['dob'];
$address = $_POST['address'];


$query = "Update admin SET Name = '$Name', email = '$email', mobile = '$mobile', Gender = '$Gender', dob = '$dob', address = '$address' where ID = '$ID'";

$data = mysqli_query($conn, $query);

if($data){
	$_SESSION['status']="Data is updated ";
	$_SESSION['status_code']="success";
    header('location:admin_dashboard.php');
}
else{
	$_SESSION['status']="Try Again";
	$_SESSION['status_code']="error";
    header('location:admin_details.php');
	mysql_error(0); 

}
}
?>