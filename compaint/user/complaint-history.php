<?php 
session_start();
error_reporting(0);
include('includes/config2.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
?>
<!DOCTYPE html>
<html lang="en">
 
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	 
   
<?php require_once("includes/csslinks.php")?>
	
  

  <body>

  <section id="container" >
<?php include("includes/header.php");?>
<?php include("includes/sidebar.php");?>

      <section id="main-content">
          <section class="wrapper">
          	   <section class="content-header">
      <h1>
   Complaints
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Complaints</li>
      </ol>
    </section>
          	 <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <i class="fa fa-bullhorn" style="font-size:36px"></i><strong> UPDATE!  </strong>.....You  can Update your Complaint before it's Varified by our Staff . and you can delete your complaint after closed.
  </div>
		  		
						  <div class="showback">
      					
						<a href='register-complaint.php' type="button" class="btn btn-theme04"><i class="fa fa-plus"></i> Add New</a>
						<button type="button" class="btn btn-theme02"><i class="fa fa-download"></i> Save CSV</button>
						<button type="button" onclick="printpage('main-content')" class="btn btn-theme04"><i class="fa fa-print"></i> Print Preview</button>
						<a href='register-complaint.php' style='float:right' type="button" class="btn btn-theme04"><i class="fa fa-arrow-left"> </i></a>
					
      				</div>
		  	<div class="span9">
					<div class="content">

	<div class="module">
							
							<div class="module-body table">
	



							 
 <table id="example" class="table table-striped table-bordered" style="width:100%">		<thead>
										  <tr>
                                  <th>Complaint Number</th>
                                  <th>Reg Date</th>
                                  <th>last Updation date</th>
                                  <th >Status</th>
                                  <th>Action</th>
								  <th>Update</th>
								  <th>Delete</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
							  			  <?php if(!empty($_REQUEST['cat']))
{          $status=$_REQUEST['cat'];
if($status=="NULL")
{
	$query=mysqli_query($con,"select * from tblcomplaints where userId='".$_SESSION['id']."' and status is null");
}
else{
$query=mysqli_query($con,"select * from tblcomplaints where userId='".$_SESSION['id']."' and status='$status'");}
				
}        else
{  ?>
<?php

$query=mysqli_query($con,"select * from tblcomplaints where userId='".$_SESSION['id']."'");
}?>
  <?php 
while($row=mysqli_fetch_array($query))
{
  ?>
                              <tr>
                                  <td align="center"><?php echo htmlentities($row['complaintNumber']);?></td>
                                  <td align="center"><?php echo htmlentities($row['regDate']);?></td>
                                 <td align="center"><?php echo  htmlentities($row['lastUpdationDate']);

                                 ?></td>
                                  <td align="center"><?php 
                                    $status=$row['status'];
                                    if($status=="" or $status=="NULL")
                                    { ?>
                                      <button type="button" class="btn btn-theme04">Not Process Yet</button>
                                   <?php }
 if($status=="inprocess"){ ?>
<button type="button" class="btn btn-warning">In Process</button>
<?php }
if($status=="closed") {
?>
<button type="button" class="btn btn-success">Closed</button>
<?php } if($status=="varified") {
?>
<button type="button" class="btn btn-default">varified</button><?php } ?>
<?php  if($status=="cancel") {
?>
<button type="button" class="btn btn-default">canceled</button><?php } ?></td>
                           <td align="center">
                                   <a href="complaint-details.php?cid=<?php echo htmlentities($row['complaintNumber']);?>">
<button type="button" class="btn btn-primary">View Details</button></a>
                                   </td>
								   <td align="center">
								   <?php  if($status=="varified" ||$status=="inprocess" || $status=="closed" || $status=="cancel") { ?>

								   <img onClick="return confirm('you can not change its varified you can cancel it and go for new?')" src='update.gif' width='50px' height='50px'>
                                   <?php }else{ ?> <a href="register-complaint.php?cid=<?php echo htmlentities($row['complaintNumber']);?>">
								   <img src='update.gif' width='50px' height='50px'></a> <?php } ?>
                                   </td>

								   
								   <td><?php if($status=="closed"||$status=="cancel") {
?>
<button type="button" id='dl' val='<?php echo htmlentities($row['complaintNumber']);?>'  class="btn btn-success">Delete</button>
<?php } else{?><button type="button" id='cl' val='<?php echo htmlentities($row['complaintNumber']);?>'  class="btn btn-primary">cancel</button><?php } ?></td>
								   
                                </tr>
                              <?php } ?>
                            
                              </tbody>
                          </table>
							</div>
						</div>						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

  </section>
<?php include("includes/footer.php");?>
    




	
	<?php require_once("includes/links.php")?>
	 <script>
		$(document).ready(function() {
    $('#example').DataTable();
} );



	</script>
	 <script>
$(function(){
    $(document).on('click','#dl',function(){
        var del_id= $(this).attr('val');
       console.log(del_id);
        $.ajax({
            type:'POST',
            url:'action1.php',
            data:{'id':del_id, db:'tblcomplaints'},
            success: function(data){
                 if(data=="YES"){
                    alert("delete the row")
                 }else{
                        alert("deleted the row")
                 }
             }

            });
        });
});


$(function(){
    $(document).on('click','#cl',function(){
        var del_id= $(this).attr('val');
       console.log(del_id);
        $.ajax({
            type:'POST',
            url:'action.php',
            data:{'idb':del_id, db1:'tblcomplaints'},
            success: function(data){
                 if(data=="YES"){
                    alert("canceled the row")
                 }else{
                        alert("canceled the row")
                 }
             }

            });
        });
});
	</script>

 

  </body>
</html>
<?php } ?>
