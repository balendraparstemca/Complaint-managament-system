<?php
$con=mysqli_connect("localhost","root","","mproject");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 ?>

<?php
if($_POST['del_id'])
{
	$nnnumber=$_POST['del_id'];
	
//echo $musi$nnnumberc_number;
$qry = "DELETE FROM " . $_POST["dbb"] . "   WHERE id ='$nnnumber'";
$result=mysqli_query($con,$qry);
if(isset($result)) {
   echo "YES";
} else {
   echo "NO";
}
}
else if($_POST['id']){
		$nnnumber=$_POST['id'];
	
//echo $musi$nnnumberc_number;
$qry = "DELETE FROM " . $_POST["db"] . "   WHERE complaintNumber='$nnnumber'";
$result=mysqli_query($con,$qry);
if(isset($result)) {
   echo "YES";
} else {
   echo "NO";
}
}

else if($_POST['idb']){
		$nnnumber=$_POST['idb'];
	
//echo $musi$nnnumberc_number;
$qry = "UPDATE " . $_POST["db1"] . " SET status= 'cancel'  WHERE complaintNumber='$nnnumber'";
$result=mysqli_query($con,$qry);
if(isset($result)) {
   echo "YES";
} else {
   echo "NO";
}
}
  
?>