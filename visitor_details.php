<?php

session_start();
if(isset($_POST['submit']))
{

$name = $_POST['name'];
$email_id = $_POST['email_id'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$s_name = $_POST['s_name'];
$s_contact = $_POST['s_contact'];
$entry_date = $_POST['entry_date'];
$entry_timing = $_POST['entry_timing'];
$relationship = $_POST['relationship'];
$address = $_POST['address'];
//connect to mysql.
$db = mysql_connect('localhost', 'root', '') or die(mysql_error($db));

//make sure you are using the correct database.
mysql_select_db('hostel', $db) or die(mysql_error($db));

//insert data into the visitors.
$query = "INSERT INTO visitors (name ,email_id ,contact ,gender, s_name , s_contact , entry_date , entry_timing ,  relationship,  address )
     
VALUES ('$name', '$email_id', '$contact', '$gender', '$s_name', '$s_contact', '$entry_date', '$entry_timing', '$relationship', '$address' )";

$query_run = mysql_query($query, $db);
if($query_run){
	$_SESSION['status']="Thank Yor For Coming Before living update the Exit Timing";
	$_SESSION['status_code']="success";
    header('location:visitor_entry_show.php');
}
else{
	$_SESSION['status']="Retry";
	$_SESSION['status_code']="error";
    header('location:visitor_information.php');
	mysql_error(0); 

}
}
?>