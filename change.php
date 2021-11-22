<?php
session_start();
include("conn.php");
error_reporting(0);
$old = $_POST['password'];
$new = $_POST['npassword'];
$query = "Update admin SET password='" . $new . "' WHERE password='" . $old . "' ";
$data = mysqli_query($conn, $query);
header("Location:admin_dashboard.php");
?>
