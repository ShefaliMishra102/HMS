<?php

session_start();
if(isset($_POST['submit']))
{
$notice_title = $_POST['notice_title'];
$notice_description = $_POST['notice_description'];
$filename = $_FILES["notice_photo"]["name"];
$tmpname = $_FILES["notice_photo"]["tmp_name"];
$folder = "notice_image/".$filename;
move_uploaded_file($tmpname,$folder);


//connect to mysql.
$db = mysql_connect('localhost', 'root', '') or die(mysql_error($db));

//make sure you are using the correct database.
mysql_select_db('hostel', $db) or die(mysql_error($db));

//insert data into the jobseekar.
$query = "INSERT INTO notice_board (notice_title  ,notice_description, notice_photo)
     
	VALUES ('$notice_title', '$notice_description','$folder')";

$query_run = mysql_query($query, $db);
if($query_run){
	$_SESSION['status']="Notice Will Added";
	$_SESSION['status_code']="success";
    header('location:notice_board.php');
}
else{
	$_SESSION['status']="Notice Will not Added";
	$_SESSION['status_code']="error";
    header('location:notice_board.php');
	mysql_error(0); 

}
}
?>