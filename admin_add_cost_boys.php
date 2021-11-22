<?php
session_start();
if(isset($_POST['submit']))
{
$ID = $_SESSION['ID'];

$hostel_name = $_POST['hostel_name'];
$cost_type = $_POST['cost_type'];
$description = $_POST['description'];
$cost_amount = $_POST['cost_amount'];

$db = mysql_connect('localhost', 'root', '') or die(mysql_error($db));

//make sure you are using the correct database.
mysql_select_db('hostel', $db) or die(mysql_error($db));

//insert data into the jobseekar.
$query = "INSERT INTO cost(hostel_name,cost_type,description, cost_amount) 

VALUES ('$hostel_name','$cost_type','$description', '$cost_amount')";

$query_run = mysql_query($query, $db);
if($query_run){
	$_SESSION['status']="New Cost Added";
	$_SESSION['status_code']="success";
    header('location:admin_cost.php');
}
else{
	$_SESSION['status']="Try Again";
	$_SESSION['status_code']="error";
    header('location:admin_cost.php');
	mysql_error(0); 

}
}
?>
