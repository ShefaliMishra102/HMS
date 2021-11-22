<?php
session_start();
session_unset();
	
	$_SESSION['status']="Successfully logout ";
	$_SESSION['status_code']="success";
    header('location:index.php');
?>