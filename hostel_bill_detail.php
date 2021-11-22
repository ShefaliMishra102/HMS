<?php

session_start();
if(isset($_POST['submit']))
{

$hostel_name = $_POST['hostel_name'];
$payment = $_POST['payment'];
$course = $_POST['course'];
$stud_id = $_POST['stud_id'];
$s_name = $_POST['s_name'];
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$email_id = $_POST['email_id'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$category = $_POST['category'];
$transaction = $_POST['transaction'];
$amount = $_POST['amount'];
$filename = $_FILES["h_photo"]["name"];
$tmpname = $_FILES["h_photo"]["tmp_name"];
$folder = "Hostel_image/".$filename;
move_uploaded_file($tmpname,$folder);

//connect to mysql.
$db = mysql_connect('localhost', 'root', '') or die(mysql_error($db));

//make sure you are using the correct database.
mysql_select_db('hostel', $db) or die(mysql_error($db));

//insert data into the jobseekar.
$query = "INSERT INTO hostel_bill (hostel_name , payment ,course ,stud_id,s_name ,f_name ,m_name ,email_id ,contact ,address ,category ,transaction ,amount ,h_photo)
     
	VALUES ('$hostel_name', '$payment','$course', '$stud_id','$s_name', '$f_name', '$m_name', '$email_id', '$contact','$address', '$category','$transaction', '$amount','$folder' )";


$query_run = mysql_query($query, $db);
if($query_run){
	$_SESSION['status']="Hostel Bill is Submitted";
	$_SESSION['status_code']="success";
    header('location:hostel_bill.php');
}
else{
	$_SESSION['status']="Hostel Bill is Not Submitted";
	$_SESSION['status_code']="error";
    header('location:hostel_bill.php');
	mysql_error(0); 

}
}
?>
