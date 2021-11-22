<?php

session_start();
include("conn.php");
error_reporting(0);
if(isset($_POST['submit']))
{

$ID = $_GET['ID'];
$hostel_name = $_POST['hostel_name'];
$e_name = $_POST['e_name'];
$email_id = $_POST['email_id'];
$e_mobile = $_POST['e_mobile'];
$e_gender = $_POST['e_gender'];
$e_dob = $_POST['e_dob'];
$e_category = $_POST['e_category'];
$join_start = $_POST['join_start'];
$blood = $_POST['blood'];
$nationality = $_POST['nationality'];
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$pin = $_POST['pin'];

$query = "Update employee SET hostel_name = '$hostel_name', e_name = '$e_name', email_id = '$email_id', e_mobile = '$e_mobile', e_gender = '$e_gender', e_dob = '$e_dob', e_category = '$e_category', join_start = '$join_start', blood = '$blood', nationality = '$nationality', f_name = '$f_name', m_name = '$m_name', street = '$street', city = '$city', state = '$state', country = '$country', pin = '$pin' where ID = '$ID'";

$data = mysqli_query($conn, $query);

if($data){
	$_SESSION['status']="Data is updated ";
	$_SESSION['status_code']="success";
    header('location:employee_updation.php');
}
else{
	$_SESSION['status']="Try Again";
	$_SESSION['status_code']="error";
    header('location:employee_updation.php');
	mysql_error(0); 

}
}
?>