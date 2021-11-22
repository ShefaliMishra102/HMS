<?php

session_start();
if(isset($_POST['submit']))
{
$stud_id = $_POST['stud_id'];
$stud_name = $_POST['stud_name'];
$stud_f_name = $_POST['stud_f_name'];
$stud_contact = $_POST['stud_contact'];
$email_id = $_POST['email_id'];
$hostel_name = $_POST['hostel_name'];
$block_name = $_POST['block_name'];
$room_number = $_POST['room_number'];

//connect to mysql.
$db = mysql_connect('localhost', 'root', '') or die(mysql_error($db));

//make sure you are using the correct database.
mysql_select_db('hostel', $db) or die(mysql_error($db));

//insert data into the jobseekar.
$query = "INSERT INTO room (stud_id, stud_name , stud_f_name, stud_contact, email_id , hostel_name, block_name, room_number  )
     
	VALUES ('$stud_id', '$stud_name','$stud_f_name', '$stud_contact', '$email_id', '$hostel_name', '$block_name', '$room_number')";

$query_run = mysql_query($query, $db);
if($query_run){
	$_SESSION['status']="Room Will Allocated";
	$_SESSION['status_code']="success";
    header('location:room_manage_boys.php');
}
else{
	$_SESSION['status']="Retry Again";
	$_SESSION['status_code']="error";
    header('location:room_allocation_boys.php');
	mysql_error(0); 

}
}
?>