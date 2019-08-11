<?php
session_start();
error_reporting(0);
include('includes/config2.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
$fname=$_POST['fullname'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
$state=$_POST['state'];
$country=$_POST['country'];
$pincode=$_POST['pincode'];
$query=mysqli_query($con,"update users set fullName='$fname',contactNo='$contactno',address='$address',State='$state',country='$country',pincode='$pincode' where userEmail='".$_SESSION['login']."'");
if($query)
{
$successmsg="Profile Successfully !!";
}
else
{
$errormsg="Profile not updated !!";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once("includes/csslinks.php")?>
  <body>

  <section id="container" >
     <?php include("includes/header.php");?>
      <?php include("includes/sidebar.php");?>
      <section id="main-content">
          <section class="wrapper">
          	 <section class="content-header">
      <h1>
        Profile
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>
          	<div class="showback">
      					
						<a href='register-complaint.php' style='float:right' type="button" class="btn btn-theme04"><i class="fa fa-arrow-left"> </i></a>
						<button type="button" class="btn btn-theme02"><i class="fa fa-download"></i> Save CSV</button>
					<button type="button"  onclick="printpage('main-content')" class="btn btn-theme04"><i class="fa fa-print"></i> Print Preview</button>
      				</div>
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	

                      <?php if($successmsg)
                      {?>
                      <div class="alert alert-success alert-dismissable">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <b>Well done!</b> <?php echo htmlentities($successmsg);?></div>
                      <?php }?>

   <?php if($errormsg)
                      {?>
                      <div class="alert alert-danger alert-dismissable">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <b>Oh snap!</b> </b> <?php echo htmlentities($errormsg);?></div>
                      <?php }?>
 <?php $query=mysqli_query($con,"select * from users where email='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?>                     

  <h4 class="mb"><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo htmlentities($row['fullName']);?>'s Profile</h4>
    <h5><b>Last Updated at :</b>&nbsp;&nbsp;<?php echo htmlentities($row['updationDate']);?></h5>
                      <form class="form-horizontal style-form" method="post" name="profile" >

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Full Name</label>
<div class="col-sm-4">
<input type="text" name="fullname" required="required" value="<?php echo htmlentities($row['fullName']);?>" class="form-control" >
 </div>
<label class="col-sm-2 col-sm-2 control-label">User Email </label>
 <div class="col-sm-4">
<input type="email" name="useremail" required="required" value="<?php echo htmlentities($row['email']);?>" class="form-control" readonly>
</div>
 </div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Contact</label>
 <div class="col-sm-4">
<input type="text" name="contactno" required="required" value="<?php echo htmlentities($row['contactNo']);?>" class="form-control">
</div>
<label class="col-sm-2 col-sm-2 control-label">Address </label>
<div class="col-sm-4">
<textarea  name="address" required="required" class="form-control"><?php echo htmlentities($row['address']);?></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">State</label>
<div class="col-sm-4">
<select name="state" required="required" class="form-control">
<option value="<?php echo htmlentities($row['State']);?>"><?php echo htmlentities($st=$row['State']);?></option>
<?php $sql=mysqli_query($con,"select stateName from state ");
while ($rw=mysqli_fetch_array($sql)) {
  if($rw['stateName']==$st)
  {
    continue;
  }
  else
  {
  ?>
  <option value="<?php echo htmlentities($rw['stateName']);?>"><?php echo htmlentities($rw['stateName']);?></option>
<?php
}}
?>

</select>
</div>
<label class="col-sm-2 col-sm-2 control-label">Country </label>
<div class="col-sm-4">
<input type="text" name="country" required="required" value="<?php echo htmlentities($row['country']);?>" class="form-control">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Pincode</label>
<div class="col-sm-4">
<input type="text" name="pincode" maxlength="6" required="required" value="<?php echo htmlentities($row['pincode']);?>" class="form-control">
</div>
<label class="col-sm-2 col-sm-2 control-label">Reg Date </label>
<div class="col-sm-4">
<input type="text" name="regdate" required="required" value="<?php echo htmlentities($row['regDate']);?>" class="form-control" readonly>
 </div>
</div>


<?php } ?>

                          <div class="form-group">
                           <div class="col-sm-10" style="padding-left:25% ">
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</div>

                          </form>
                          </div>
                          </div>
                          </div>
                          
          	
          	
		</section>
      </section>
    <?php include("includes/footer.php");?>
  </section>

   
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
   <?php require_once("includes/links.php")?>
</html>
<?php } ?>
