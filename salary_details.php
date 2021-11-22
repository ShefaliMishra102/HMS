<?php

session_start();
if(isset($_POST['submit']))
{

$emp_id = $_POST['emp_id'];
$emp_hos = $_POST['emp_hos'];
$emp_type = $_POST['emp_type'];
$emp_name = $_POST['emp_name'];
$salary = $_POST['salary'];
$s_month = $_POST['s_month'];
$s_year = $_POST['s_year'];


//connect to mysql.
$db = mysql_connect('localhost', 'root', '') or die(mysql_error($db));

//make sure you are using the correct database.
mysql_select_db('hostel', $db) or die(mysql_error($db));

//insert data into the employee.
$query = "INSERT INTO salery (emp_id ,emp_hos ,emp_type ,emp_name ,salary ,s_month ,s_year )
     
	VALUES ('$emp_id', '$emp_hos', '$emp_type', '$emp_name', '$salary', '$s_month', '$s_year')";

$query_run = mysql_query($query, $db);
if($query_run){
	$_SESSION['status']="Salary Will Paid";
	$_SESSION['status_code']="success";
    header('location:admin_salary.php');
}
else{
	$_SESSION['status']="Try again";
	$_SESSION['status_code']="error";
    header('location:admin_salary.php');
	mysql_error(0); 

}
}
?>