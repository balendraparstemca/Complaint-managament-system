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
	<style>
	


table {
        display: block;
        overflow-x: auto; 
    }
	</style>
  

  <body>

  <section id="container" >
<?php include("includes/header.php");?>
<?php include("includes/sidebar.php");?>

      <section id="main-content">
          <section class="wrapper">
          	   <section class="content-header">
      <h1>
   Blogs
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Blogs</li>
      </ol>
    </section>
          	<div class="showback">
      							<a href='newblog.php' type="button" class="btn btn-theme04"><i class="fa fa-plus"></i> Add New</a>
						<a href='register-complaint.php' style='float:right' type="button" class="btn btn-theme04"><i class="fa fa-arrow-left"> </i></a>
						<button type="button" class="btn btn-theme02"><i class="fa fa-download"></i> Save CSV</button>
												<button type="button"  onclick="printpage('main-content')" class="btn btn-theme04"><i class="fa fa-print"></i> Print Preview</button>
      				
      				</div>
		  	<div class="span9">
					<div class="content">

	<div class="module">
							
							<div class="module-body table">
	



							
								  <table id="example" class="table table-striped table-bordered" style="width:100%">		<thead>
										<tr>
											<th>id</th>
											<th> Title</th>
											<th>Tags</th>
											<th>Content</th>
											<th>Date </th>
											<th>photo</th>
											<th>Action</th>
										
										</tr>
									</thead>
									<tbody>

<?php  if(!empty($_REQUEST['cat']))
{          $status=$_REQUEST['cat'];
$query=mysqli_query($con,"select * from blogs where posted='$status'");
}
else{
$query=mysqli_query($con,"select * from blogs");
}
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td style='white-space: nowrap;'><?php echo htmlentities($row['title']);?></td>
											<td><?php echo htmlentities($row['tags']);?></td>
											<td> <?php echo substr($row['content'], 0, 500);?></td>
										<td style='white-space: nowrap;'> <?php echo htmlentities($row['date']);?></td>
											<td style='white-space: nowrap;'><img id="blah" style='max-width:100px;' src="../images/<?php echo htmlentities($row['photo']);?>" alt="your image" /></td>

											<td style='white-space: nowrap;'>
                                      <a href='newblog.php?id=<?php echo htmlentities($row['id']);?>' class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      <button id='trash' at='<?php echo htmlentities($row['id']);?>' class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
									   <?php if($row['posted']=='draft')
									  {?>
									   <button class="btn btn-dark btn-xs"><i class="fa fa-ban"></i></button>
									   <?php 
									  }
									   else{
									   ?>
									   <button class="btn btn-danger btn-xs"><i class="fa fa-ban"></i></button>
									
										<?php
									   }
										?>
									
                               </td></tr>
											
										<?php $cnt=$cnt+1; } ?>
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
    $(document).on('click','#trash',function(){
        var del_id= $(this).attr('at');
       console.log(del_id);
        $.ajax({
            type:'POST',
            url:'action1.php',
            data:{'del_id':del_id, dbb:'blogs'},
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

	</script>

 

  </body>
</html>
<?php } ?>
