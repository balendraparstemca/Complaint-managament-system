<?php
session_start();
error_reporting(0);
include('includes/config2.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
$uid=$_SESSION['id'];
$category=$_POST['category'];
$subcat=$_POST['subcategory'];
$complaintype=$_POST['complaintype'];
$state=$_POST['state'];
$noc=$_POST['noc'];
$complaintdetials=htmlentities($_POST['complaindetails']);
$compfile=$_FILES["compfile"]["name"];



move_uploaded_file($_FILES["compfile"]["tmp_name"],"complaintdocs/".$_FILES["compfile"]["name"]);
$query=mysqli_query($con,"insert into tblcomplaints(userId,category,subcategory,complaintType,state,noc,complaintDetails,complaintFile) values('$uid','$category','$subcat','$complaintype','$state','$noc','$complaintdetials','$compfile')");
// code for show complaint number
$sql=mysqli_query($con,"select complaintNumber from tblcomplaints  order by complaintNumber desc limit 1");
while($row=mysqli_fetch_array($sql))
{
 $cmpn=$row['complaintNumber'];
}
$complainno=$cmpn;
echo '<script> alert("Your complain has been successfully filled and your complaintno is  "+"'.$complainno.'")</script>';
}


if(isset($_POST['update']))
{
$uid=$_REQUEST['cid'];
$category=$_POST['category'];
$subcat=$_POST['subcategory'];
$complaintype=$_POST['complaintype'];
$state=$_POST['state'];
$noc=$_POST['noc'];
$complaintdetials=htmlentities($_POST['complaindetails']);
$compfile=$_FILES["compfile"]["name"];



move_uploaded_file($_FILES["compfile"]["tmp_name"],"complaintdocs/".$_FILES["compfile"]["name"]);
$sql = "UPDATE  tblcomplaints SET category='$category',subcategory='$subcat', complaintType='$complaintType', state='$state', noc='$noc', complaintDetails='$complaintdetials', complaintFile='$compfile' WHERE complaintNumber=".$uid;
  if (mysqli_query($con,$sql))
  {

echo '<script> alert("Your complaint has been successfully updated and your Complaint no is  "+"'.$uid.'")</script>';
  }}
?>

<!DOCTYPE html>
<html lang="en">
  
   <?php require_once("includes/csslinks.php")?>
<style>



</style>

  <body>

  <section id="container" >
     <?php include("includes/header.php");?>
      <?php include("includes/sidebar.php");?>
      <section id="main-content">
          <section class="wrapper">
		   <section class="content-header">
      <h1>
      Register Complaint
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Register Complaint</li>
      </ol>
    </section>
          	<div class="showback">
      							<a href='register-complaint.php' type="button" class="btn btn-theme04"><i class="fa fa-plus"></i> Add New</a>
						<a href='register-complaint.php' style='float:right' type="button" class="btn btn-theme04"><i class="fa fa-arrow-left"> </i></a>
						<button type="button" class="btn btn-theme02"><i class="fa fa-download"></i> Save CSV</button>
												<button type="button"  onclick="printpage('main-content')" class="btn btn-theme04"><i class="fa fa-print"></i> Print Preview</button>
      				
      				</div>
          	<h3><i class="fa fa-angle-right"></i> Register Complaint</h3>
          	
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

					  
					  			  <?php if(!empty($_REQUEST['cid']))
{  $status=$_REQUEST['cid'];
	$query=mysqli_query($con,"select * from  tblcomplaints where complaintNumber='$status'");
 while($row=mysqli_fetch_array($query)) 
 {
 
	?>
					  
					  
                      <form class="form-horizontal style-form" method="post" name="complaint" enctype="multipart/form-data" novalidate>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Category</label>
<div class="col-sm-4">
<?php $c=$row['category']; $sql1=mysqli_query($con,"select categoryName from  category where id='$c'");
while ($raw=mysqli_fetch_array($sql1)) { ?>
<select name="category" id="category" class="form-control" onChange="getCat(this.value);" required="">
<option value=""><?php echo htmlentities($raw['categoryName']); ?></option>
<?php } ?>
<?php $sql=mysqli_query($con,"select id,categoryName from category ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
  <option value="<?php echo htmlentities($rw['id']);?>"><?php echo htmlentities($rw['categoryName']);?></option>
<?php
}
?>
</select>
 </div>
<label class="col-sm-2 col-sm-2 control-label">Sub Category </label>
 <div class="col-sm-4">
<select name="subcategory" id="subcategory" class="form-control" >
<option value=""><?php echo $row['subcategory'];?></option>
</select>
</div>
 </div>




<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Complaint Type</label>
<div class="col-sm-4">
<select name="complaintype" class="form-control" required="">
                <option value=" Complaint"> Complaint</option>
                  <option value="General Query">General Query</option>
                </select> 
</div>

<label class="col-sm-2 col-sm-2 control-label">State</label>
<div class="col-sm-4">
<select name="state" required="required" class="form-control">
<option value=""><?php echo $row['state'];?></option>
<?php $sql=mysqli_query($con,"select stateName from state ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
  <option value="<?php echo htmlentities($rw['stateName']);?>"><?php echo htmlentities($rw['stateName']);?></option>
<?php
}
?>

</select>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nature of Complaint</label>
<div class="col-sm-4">
<input type="text" name="noc" required="required" value="<?php echo $row['noc'];?>" required="" class="form-control">
</div>

</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Complaint Details (max 2000 words) </label>
<div class="col-sm-8">
<textarea  name="complaindetails"  id='area' required="required" cols="40" rows="55" class="form-control" maxlength="200000"><?php echo $row['complaintDetails'];?></textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Complaint Related Doc(if any) </label>
<div class="col-sm-6">
<input type="file" name="compfile" class="form-control" value="<?php echo $row['complaintFile'];?>">
</div>
<div class="col-sm-4">

<a  style='max-width:100px;' href="<?php  echo htmlentities($row['complaintFile']);?>"><?php  echo htmlentities($row['complaintFile']);?></a>
</div>
</div>



                          <div class="form-group">
                           <div class="col-sm-8" style="padding-left:25% ">
<button type="submit" name="update" class="btn btn-primary">Update</button>
</div>
 
</div>

                          </form>
						  <?php }}else {?>
						  
						  <form class="form-horizontal style-form" method="post" name="complaint" enctype="multipart/form-data" novalidate>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Category</label>
<div class="col-sm-4">

<select name="category" id="category" class="form-control" onChange="getCat(this.value);" required="">
<option value="">Select Category</option>

<?php $sql=mysqli_query($con,"select id,categoryName from category ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
  <option value="<?php echo htmlentities($rw['id']);?>"><?php echo htmlentities($rw['categoryName']);?></option>
<?php
}
?>
</select>
 </div>
<label class="col-sm-2 col-sm-2 control-label">Sub Category </label>
 <div class="col-sm-4">
<select name="subcategory" id="subcategory" class="form-control" >
<option value=""><?php echo $row['subcategory'];?></option>
</select>
</div>
 </div>




<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Complaint Type</label>
<div class="col-sm-4">
<select name="complaintype" class="form-control" required="">
                <option value=" Complaint"> Complaint</option>
                  <option value="General Query">General Query</option>
                </select> 
</div>

<label class="col-sm-2 col-sm-2 control-label">State</label>
<div class="col-sm-4">
<select name="state" required="required" class="form-control">
<option value="">Select</option>
<?php $sql=mysqli_query($con,"select stateName from state ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
  <option value="<?php echo htmlentities($rw['stateName']);?>"><?php echo htmlentities($rw['stateName']);?></option>
<?php
}
?>

</select>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Nature of Complaint</label>
<div class="col-sm-4">
<input type="text" name="noc" required="required" value="" required="" class="form-control">
</div>

</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Complaint Details (max 2000 words) </label>
<div class="col-sm-8">
<textarea  name="complaindetails"  id='area' required="required" cols="40" rows="55" class="form-control" maxlength="200000"></textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Complaint Related Doc(if any) </label>
<div class="col-sm-6">
<input type="file" name="compfile" class="form-control" value="">
</div>
<div class="col-sm-4">

<a  id="blah" style='max-width:100px;' href=""></a>
</div>
</div>



                          <div class="form-group">
                           <div class="col-sm-8" style="padding-left:25% ">
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
 
</div>

                          </form>
						  
						  
						  <?php } ?>
                          </div>
                          </div>
                          </div>
                          
          	
          	
		</section>
      </section>
    <?php include("includes/footer.php");?>
  </section>


 <?php require_once("includes/links.php")?>
    
    
  <script>
  
       function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>

    <script>
function getCat(val) {
  //alert('val');

  $.ajax({
  type: "POST",
  url: "getsubcat.php",
  data:'catid='+val,
  success: function(data){
    $("#subcategory").html(data);
    
  }
  });
  }
  </script>
   <script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function() {
        new nicEditor({maxHeight : 300}).panelInstance('area');
        new nicEditor({fullPanel : true,maxHeight : 200}).panelInstance('area1');
  });
  //]]>
  </script>


  </body>
</html>
<?php } ?>
