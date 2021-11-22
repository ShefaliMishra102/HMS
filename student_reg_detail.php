
<?php

session_start();
if(isset($_POST['submit']))
{

$hos = $_POST['hos'];
$name = $_POST['name'];
$email_id = $_POST['email_id'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$category = $_POST['category'];
$course = $_POST['course'];
$blood = $_POST['blood'];
$nationality = $_POST['nationality'];
$f_name = $_POST['f_name'];
$f_mobile = $_POST['f_mobile'];
$f_email = $_POST['f_email'];
$f_occupation = $_POST['f_occupation'];
$m_name = $_POST['m_name'];
$m_mobile = $_POST['m_mobile'];
$m_email = $_POST['m_email'];
$m_occupation = $_POST['m_occupation'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$pin = $_POST['pin'];
$g_name = $_POST['g_name'];
$g_mobile = $_POST['g_mobile'];
$g_email = $_POST['g_email'];
$g_occupation = $_POST['g_occupation'];
$g_relation = $_POST['g_relation'];
$g_address = $_POST['g_address'];

$filename = $_FILES["photo"]["name"];
$tmpname = $_FILES["photo"]["tmp_name"];
$folder = "Student_Reg_image/".$filename;
move_uploaded_file($tmpname,$folder);


//connect to mysql.
$db = mysql_connect('localhost', 'root', '') or die(mysql_error($db));

//make sure you are using the correct database.
$tb = mysql_select_db('hostel', $db) or die(mysql_error($db));

//insert data into the jobseekar.
$query = "INSERT INTO student (hos ,name ,email_id ,mobile ,gender ,dob ,category ,course , blood , nationality , f_name , f_mobile , f_email , f_occupation , m_name , m_mobile , m_email , m_occupation , street, city, state, country, pin, g_name, g_mobile, g_email, g_occupation, g_relation, g_address, password,photo )
     
VALUES ('$hos', '$name', '$email_id', '$mobile', '$gender', '$dob', '$category', '$course', '$blood', '$nationality', '$f_name', '$f_mobile', '$f_email', '$f_occupation', '$m_name', '$m_mobile', '$m_email', '$m_occupation', '$street', '$city', '$state', '$country', '$pin', '$g_name', '$g_mobile', '$g_email', '$g_occupation', '$g_relation', '$g_address','Today@1234','$folder' )";


$query_run = mysql_query($query, $db);
if($query_run){
	$ID = mysql_insert_id();
	$_SESSION['status']="Student is Registered To continue Login Your Self ";
	$_SESSION['status_text']=" Your ID is: ".$ID." Your Password is: Today@1234 ";
	$_SESSION['status_code']="success";
    header('location:student_reg.php');
}
else{
	$_SESSION['status']="Student is not Registered";
	$_SESSION['status_code']="error";
    header('location:student_reg.php');
	mysql_error(0); 

}
}
?>