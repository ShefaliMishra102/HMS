<?php
session_start();

if(isset($_POST['submit']))
{
	$hostel_name = $_POST['hostel_name'];
	$stud_id = $_POST['stud_id'];
	$stud_name = $_POST['stud_name'];
	$today_date = $_POST['today_date'];
	$Is_Absence = $_POST['Is_Absence'];
	$Is_leave = $_POST['Is_leave'];
	$remark = $_POST['remark'];
	
	//connect to mysql.
	$db = mysql_connect('localhost', 'root', '') or die(mysql_error($db));
	
	mysql_select_db('hostel', $db) or die(mysql_error($db));
	
	$query = "INSERT INTO attendence(hostel_name, stud_id, stud_name, today_date, Is_Absence, Is_leave, remark) 
	
	VALUES ('$hostel_name','$stud_id', '$stud_name', '$today_date', '$Is_Absence', '$Is_leave', '$remark')";
echo $query;	
	$query_run = mysql_query($query, $db);
	
echo $query_run;
if($query_run){
	$_SESSION['status']="Attendence is Submitted";
	$_SESSION['status_code']="success";
    header('location:boys_attendence.php');
}
else{
	$_SESSION['status']="Attendence is not Submitted";
	$_SESSION['status_code']="error";
    header('location:boys_attendence.php');
	mysql_error(0); 

}
}
?>