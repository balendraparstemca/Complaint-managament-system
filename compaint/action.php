<?php
include('database/db_connect.php');

$fname=$_POST['uname'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['pass'];
$query=mysqli_query($con,"insert into users(fullName,address,State,email,password) values('$fname','$address','$city','$email','$password')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	header('location:login.php');
}
else{

	echo "<script>alert('not Successfully Registered. You can login now');</script>";
	//header('location:user-login.php');
}

?>
