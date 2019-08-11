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
  <?php require_once("includes/csslinks.php")?>

  <body>

  <section id="container" >
<?php include("includes/header.php");?>
<?php include("includes/sidebar.php");?>

      <section id="main-content">
          <section class="wrapper">
           <section class="content-header">
      <h1>
   Blogs Categories
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Blogs Categories</li>
      </ol>
    </section>
          	<div class="showback">
      							<a href='newblog.php' type="button" class="btn btn-theme04"><i class="fa fa-plus"></i> Add New</a>
						<a href='register-complaint.php' style='float:right' type="button" class="btn btn-theme04"><i class="fa fa-arrow-left"> </i></a>
						<button type="button" class="btn btn-theme02"><i class="fa fa-download"></i> Save CSV</button>
						<button type="button"  onclick="printpage('main-content')" class="btn btn-theme04"><i class="fa fa-print"></i> Print Preview</button>
      				
      				</div>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                          <section id="unseen">
						 
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>id</th>
                                  <th>Name</th>
                                  
                                  
                              </tr>
                              </thead>
                              <tbody>
  <?php $query=mysqli_query($con,"select * from blog_categories");
while($row=mysqli_fetch_array($query))
{
  ?>
                              <tr>
                                  <td><?php echo htmlentities($row['id']);?></td>
                                  <td><?php echo htmlentities($row['name']);?></td>
                                 
                                  
                                </tr>
                              <?php } ?>
                            
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		  	
		  	

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
<?php include("includes/footer.php");?>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    
 <?php require_once("includes/links.php")?>
    <!--script for this page-->
    

  </body>
</html>
<?php } ?>
