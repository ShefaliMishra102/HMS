<?php

session_start();


$notice_title = $_POST['notice_title'];


$notice_description = $_POST['notice_description'];


//connect to mysql.
$db = mysql_connect('localhost', 'root', '') or die(mysql_error($db));

//make sure you are using the correct database.
mysql_select_db('hostel', $db) or die(mysql_error($db));

//insert data into the jobseekar.
$query = "INSERT INTO notice_board (notice_title  ,notice_description)
     
	VALUES ('$notice_title', '$notice_description')";

mysql_query($query, $db) or die(mysql_error($db));
header('location:notice_show_employee.php');
?>