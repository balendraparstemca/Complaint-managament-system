<?php 
include('database/db_connect.php');
if(!empty($_POST["email"])) {
	$email= $_POST["email"];
	
		$result =mysqli_query($con,"SELECT email FROM users WHERE email='$email'");
		$count=mysqli_num_rows($result);
if($count)
{
echo "<span style='color:red'> Email already exists .</span>";

} else{
	
	echo "<span style='color:green'> Email available for Registration .</span>";

}
}


?>

