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
$uid=$_SESSION['login'];
$category=$_POST['category'];

$state=$_POST['title'];
$noc=$_POST['tag'];
$complaintdetials=htmlentities($_POST['complaindetails']);
$compfile=$_FILES['image']['name'];;

$posted='publish';
$date=date("Y-m-d");
move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$compfile);
$query=mysqli_query($con,"insert into blogs(title,tags,content,photo,posted,date,author,category) values('$state','$noc','$complaintdetials','$compfile','$posted','$date','$uid','$category')");
// code for show complaint number
$sql=mysqli_query("select id from blogs  order by id desc limit 1");
while($row=mysqli_fetch_array($sql))
{
 $cmpn=$row['id'];
}
$complainno=$cmpn;
echo '<script> alert("Your blog has been successfully  and your blogno is  "+"'.$complainno.'")</script>';
}

if(isset($_POST['update']))
{
$uid=$_REQUEST['id'];
$category=$_POST['category'];

$title=$_POST['title'];
$tag=$_POST['tag'];
$area=htmlentities($_POST['complaindetails']);
$compfile=$_FILES['image']['name'];


$datet=date("Y-m-d h:i:sa");
move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$compfile);
$sql = "UPDATE blogs SET title='$title.', tags='$tag', content='$area', category='$category', udate='$datet' WHERE id=".$uid;
  if (mysqli_query($sql))
  {

echo '<script> alert("Your blog has been successfully updated and your blog no is  "+"'.$uid.'")</script>';
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
    New Blog
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">New Blog</li>
      </ol>
    </section>
          	<div class="showback">
      							<a href='newblog.php' type="button" class="btn btn-theme04"><i class="fa fa-plus"></i> Add New</a>
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
					  <?php if(!empty($_REQUEST['id']))
{  $status=$_REQUEST['id'];
	$query=mysqli_query($con,"select * from blogs where id='$status'");
	$idt=$row['id'];
 while($row=mysqli_fetch_array($query)) 
 {
 
	?>

                      <form class="form-horizontal style-form" method="post" name="complaint" enctype="multipart/form-data" novalidate>

<div class="form-group">

<label class="col-sm-2 col-sm-2 control-label">ID</label><label class="col-sm-2 col-sm-2 control-label"> <?php if(!empty($_REQUEST['id'])){  echo htmlentities($row['id']);}?></label>
<div class="col-sm-4">

 </div>

 </div>




<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Category </label>
 <div class="col-sm-4">
 <?php $c=$row['category']; $sql1=mysqli_query($con,"select name from  blog_categories where id='$c'");
while ($raw=mysqli_fetch_array($sql1)) { ?>
<select name="category" id="category" class="form-control" onChange="getCat(this.value);" required="">

<option value=""><?php echo htmlentities($raw['name']); ?></option>
<?php } ?>
<?php $sql=mysqli_query($con,"select id,name from blog_categories");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
  <option value="<?php echo htmlentities($rw['id']);?>"><?php echo htmlentities($rw['name']);?></option>
<?php
}
?>
</select>
 </div>


</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Title</label>
<div class="col-sm-4">
<input type="text" name="title" id="title"  required="required" value="<?php if(!empty($_REQUEST['id'])){  echo htmlentities($row['title']);}?>" required="" class="form-control">
</div>

</div>
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Tag</label>
<div class="col-sm-4">
<input type="text" name="tag" id="tag" required="required" value="<?php if(!empty($_REQUEST['id'])){  echo htmlentities($row['tags']);}?>" required="" class="form-control">
</div>

</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label"> Blog Details (max 2000 words) </label>
<div class="col-sm-8">

<textarea  name="complaindetails" id="area"  required="required" cols="20" rows="10" class="form-control" maxlength="200000"><?php if(!empty($_REQUEST['id'])){   echo $row['content'];}?></textarea>
</div>
</div>



<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">img/video file</label>
<div class="col-sm-6">
<input type="file" onchange="readURL(this);" name="image" class="form-control" value="<?php if(!empty($_REQUEST['id'])){  echo htmlentities($row['photo']);}?>">
</div>

 <div class="col-sm-4">

<img id="blah" style='max-width:100px;' src="../images/<?php if(!empty($_REQUEST['id'])){  echo htmlentities($row['photo']);}?>" alt="your image" />
</div>
 </div>


                          <div class="form-group">
                           <div class="col-sm-10" style="padding-left:25% ">
<button  type="submit" name="update" id="update_btn" class="btn btn-primary">Update</button>
</div>
</div>

                          </form>
						  
						  
						  
						  
						  
<?php }}

else{?>
						     <form class="form-horizontal style-form" method="post" name="complaint" enctype="multipart/form-data" novalidate>

<div class="form-group">

<label class="col-sm-2 col-sm-2 control-label">ID</label>
<div class="col-sm-4">

 </div>

 </div>




<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Category </label>
 <div class="col-sm-4">
<select name="category" id="category" class="form-control" onChange="getCat(this.value);" required="">
<option value="">Select Category</option>
<?php $sql=mysqli_query($con,"select id,name from blog_categories");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
  <option value="<?php echo htmlentities($rw['id']);?>"><?php echo htmlentities($rw['name']);?></option>
<?php
}
?>
</select>
 </div>


</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Title</label>
<div class="col-sm-4">
<input type="text" name="title" required="required" value="" required="" class="form-control">
</div>

</div>
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">Tag</label>
<div class="col-sm-4">
<input type="text" name="tag" required="required" value="" required="" class="form-control">
</div>

</div>

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label"> Blog Details (max 2000 words) </label>
<div class="col-sm-8">
<textarea  name="complaindetails" id="area" required="required" cols="20" rows="10" class="form-control" maxlength="200000"></textarea>
</div>
</div>



<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">img/video file</label>
<div class="col-sm-6">
<input type="file" onchange="readURL(this);" name="image" class="form-control" value="">
</div>

 <div class="col-sm-4">

<img id="blah" style='max-width:100px;' src="http://placehold.it/180" alt="your image" />
</div>
 </div>


                          <div class="form-group">
                           <div class="col-sm-10" style="padding-left:25% ">
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</div>

</form><?php } ?>
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
        new nicEditor({maxHeight : 200}).panelInstance('area');
        new nicEditor({fullPanel : true,maxHeight : 200}).panelInstance('area1');
  });
  //]]>
  </script>
  
  
<script>
/*

  $(document).on('click', '#update_btn', function(){
  	var id = <?php echo $idt;?>;
  	var cat = $('#category').val();
  	var title = $('#title').val();
	var tag = $('#tag').val();
  	var area = $('#area').val();
	//var data='blogs';
  	$.ajax({
      url: 'action1.php',
      type: 'POST',
      data: {
      	
      	'id': id,
      	'cat': cat,
		'title': title,
      	'tag': tag,
		'area': area
      	
      },
      success: function(data){
      console.log(id);
      }
  	});		
  });
*/
</script>
  </body>
</html>
<?php } ?>
