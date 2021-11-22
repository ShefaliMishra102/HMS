<?php
session_start();

if(isset($_POST['submit']))
{
        $fname = $_POST['fname'];
	    $lname = $_POST['lname'];
        $c_mobile = $_POST['c_mobile'];
	    $c_email = $_POST['c_email'];
	    $subject = $_POST['subject'];
        
	
 //connect to mysql.
	$db = mysql_connect('localhost', 'root', '') or die (mysql_error($db));
	
	//make sure you are using the correct database.
    mysql_select_db('hostel', $db) or die (mysql_error($db));

    //insert data into the contact_us.
    $query= "INSERT INTO contact_us
	(fname, lname, c_mobile, c_email, subject) 
    VALUES ('$fname', '$lname', '$c_mobile', '$c_email', '$subject' )";    

$query_run = mysql_query($query, $db);
if($query_run){
	$_SESSION['status']="Thank You For Contact us. We contact you stortly";
	$_SESSION['status_code']="success";
    header('location:contact us.php');
}
else{
	$_SESSION['status']="Retry Again";
	$_SESSION['status_code']="error";
    header('location:contact us.php');
	mysql_error(0); 

}
}
?>