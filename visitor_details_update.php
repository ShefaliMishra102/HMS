<?php

session_start();
include("conn.php");
error_reporting(0);
if(isset($_POST['submit']))
{

$ID= $_GET['ID'];

$exit_date = $_POST['exit_date'];
$exit_timing = $_POST['exit_timing'];
//connect to mysql.

$query = "UPDATE visitors SET exit_date='$exit_date' , exit_timing='$exit_timing' WHERE ID='$ID'";
$data = mysqli_query($conn, $query);
if($data){
	$_SESSION['status']="Thank Yor For Coming";
	$_SESSION['status_code']="success";
    header('location:index.php');
}
else{
	$_SESSION['status']="Try Again Please Exit Date Not Mention";
	$_SESSION['status_code']="error";
    header('location:visitor_exit.php');
	mysql_error($db); 

}
}
?>