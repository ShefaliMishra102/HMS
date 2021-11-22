<?php

session_start();
include("conn.php");
error_reporting(0);
if(isset($_POST['submit']))
{

$ID = $_GET['ID'];
$hos = $_POST['hos'];
$name = $_POST['name'];
$email_id = $_POST['email_id'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$category = $_POST['category'];
$course = $_POST['course'];
$blood = $_POST['blood'];
$nationality = $_POST['nationality'];
$f_name = $_POST['f_name'];
$f_mobile = $_POST['f_mobile'];
$f_email = $_POST['f_email'];
$f_occupation = $_POST['f_occupation'];
$m_name = $_POST['m_name'];
$m_mobile = $_POST['m_mobile'];
$m_email = $_POST['m_email'];
$m_occupation = $_POST['m_occupation'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$pin = $_POST['pin'];
$g_name = $_POST['g_name'];
$g_mobile = $_POST['g_mobile'];
$g_email = $_POST['g_email'];
$g_occupation = $_POST['g_occupation'];
$g_relation = $_POST['g_relation'];
$g_address = $_POST['g_address'];

$query = "Update student SET hos = '$hos', name = '$name', email_id = '$email_id', mobile = '$mobile', gender = '$gender', dob = '$dob', category = '$category', course = '$course', blood = '$blood', nationality = '$nationality', f_name = '$f_name', f_mobile = '$f_mobile', f_email = '$f_email', f_occupation = '$f_occupation', m_name = '$m_name', m_mobile = '$m_mobile', m_email = '$m_email', m_occupation = '$m_occupation', street = '$street', city = '$city', state = '$state', country = '$country', pin = '$pin', g_name = '$g_name', g_mobile = '$g_mobile', g_email = '$g_email', g_occupation = '$g_occupation', g_relation = '$g_relation', g_address = '$g_address' where ID = '$ID'";

$data = mysqli_query($conn, $query);

if($data){
	$_SESSION['status']="Data is updated ";
	$_SESSION['status_code']="success";
    header('location:show_student_details.php');
}
else{
	$_SESSION['status']="Try Again";
	$_SESSION['status_code']="error";
    header('location:show_student_details.php');
	mysql_error(0); 

}
}
?>