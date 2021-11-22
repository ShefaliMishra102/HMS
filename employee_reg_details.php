<?php

session_start();
if(isset($_POST['submit']))
{

$hostel_name = $_POST['hostel_name'];
$emp_type = $_POST['emp_type'];
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
$password = $_POST['password'];
$filename = $_FILES["photo"]["name"];
$tmpname = $_FILES["photo"]["tmp_name"];
$folder = "Employee_image/".$filename;
move_uploaded_file($tmpname,$folder);

//connect to mysql.
$db = mysql_connect('localhost', 'root', '') or die(mysql_error($db));

//make sure you are using the correct database.
mysql_select_db('hostel', $db) or die(mysql_error($db));

//insert data into the employee.
$query = "INSERT INTO employee (hostel_name ,emp_type,  e_name ,  email_id ,  e_mobile ,  e_gender ,  e_dob ,  e_category ,  join_start ,  blood ,  nationality ,  f_name , m_name , street , city ,  state ,  country ,  pin ,photo, password )
     
	VALUES ('$hostel_name','$emp_type', '$e_name', '$email_id', '$e_mobile', '$e_gender', '$e_dob', '$e_category', '$join_start', '$blood', '$nationality', '$f_name', '$m_name', '$street', '$city', '$state', '$country', '$pin','$folder','Today@1234' )";

$query_run = mysql_query($query, $db);
if($query_run){
	$ID = mysql_insert_id();
	$_SESSION['status']="Employee is Registered ";
	$_SESSION['status_text']=" ID is: ".$ID." Password is: Today@1234 ";
	$_SESSION['status_code']="success";
    header('location:employee_reg.php');
}
else{
	$_SESSION['status']="Employee Will not Added";
	$_SESSION['status_code']="error";
    header('location:employee_reg.php');
	mysql_error(0); 

}
}
?>