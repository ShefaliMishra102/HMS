<?php
session_start();

if(isset($_POST['submit']))
{
$comp = $_POST['comp'];
$stud_id = $_POST['stud_id'];
$f_name = $_POST['f_name'];
$hos = $_POST['hos'];
$f_rn = $_POST['f_rn'];
$f_bn = $_POST['f_bn'];
$f_id = $_POST['f_id'];
$f_mobile = $_POST['f_mobile'];
$topic = $_POST['topic'];
$query = $_POST['query'];
//connect to mysql.
$db = mysql_connect('localhost', 'root', '') or die(mysql_error($db));

//make sure you are using the correct database.
mysql_select_db('hostel', $db) or die(mysql_error($db));

//insert data into the jobseekar.
$query = "INSERT INTO feedback(comp,stud_id, f_name,hos, f_rn, f_bn, f_id, f_mobile, topic, query) 

VALUES ('$comp','$stud_id', '$f_name','$hos', '$f_rn', '$f_bn', '$f_id', '$f_mobile', '$topic', '$query')";

$query_run = mysql_query($query, $db);
if($query_run){
	$_SESSION['status']="Feedback is Submitted";
	$_SESSION['status_code']="success";
    header('location:stud_feedback.php');
}
else{
	$_SESSION['status']="Feedback is not Submitted";
	$_SESSION['status_code']="error";
    header('location:stud_feedback.php');
	mysql_error(0); 

}
}
?>