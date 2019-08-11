<?php session_start();
error_reporting(0);
include('includes/config2.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{ ?>

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
      Complaints
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Complaints</li>
      </ol>
    </section>
          	<div class="showback">
      					
						<a href='register-complaint.php' style='float:right' type="button" class="btn btn-theme04"><i class="fa fa-arrow-left"> </i></a>
						<button type="button" class="btn btn-theme02"><i class="fa fa-download"></i> Save CSV</button>
												<button type="button"  onclick="printpage('main-content')" class="btn btn-theme04"><i class="fa fa-print"></i> Print Preview</button>
      					</div>
              <div class="row">
                  <div class="col-lg-12 main-chart">
                  
                  
                  	


<div class="col-md-2 col-sm-2 box0">
                  			<a href='complaint-history.php'> <div class="box1">
					  			<span class="li_news"></span>
                                <?php 
                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where userId='".$_SESSION['id']."'");
$num1 = mysqli_num_rows($rt);
{?>
					  			<h3><?php echo htmlentities($num1);?></h3>
                  			</div></a>
					  			<p><?php echo htmlentities($num1);?> ALL Complaints </p>
                  		</div>
                      <?php }?>
					  
					  <div class="col-md-2 col-sm-2 box0">
                  			<a href='complaint-history.php?cat=varified'> <div class="box1">
					  			<span class="li_news"></span>
                                <?php 
                    $status="varified";
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where userId='".$_SESSION['id']."'  and  status='$status'");
$num1 = mysqli_num_rows($rt);
{?>
					  			<h3><?php echo htmlentities($num1);?></h3>
                  			</div></a>
					  			<p><?php echo htmlentities($num1);?> Complaints HAS VERIFIED</p>
                  		</div>
                      <?php }?>
                  	
                  		<div class="col-md-2 col-sm-2 box0">
                  			<a href='complaint-history.php?cat=NULL'> <div class="box1">
					  			<span class="li_news"></span>
                                <?php 
                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where userId='".$_SESSION['id']."' and status is null");
$num1 = mysqli_num_rows($rt);
{?>
					  			<h3><?php echo htmlentities($num1);?></h3>
                  			</div></a>
					  			<p><?php echo htmlentities($num1);?> Complaints not Process yet</p>
                  		</div>
                      <?php }?>


                      <div class="col-md-2 col-sm-2 box0">
                      <a href='complaint-history.php?cat=inprocess'>  <div class="box1">
                  <span class="li_news"></span>
                    <?php 
  $status="inprocess";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where userId='".$_SESSION['id']."' and  status='$status'");
$num1 = mysqli_num_rows($rt);
{?>
                  <h3><?php echo htmlentities($num1);?></h3>
                        </div></a>
                  <p><?php echo htmlentities($num1);?> Complaints Status in process</p>
                      </div>
  <?php }?>

  
  
                      <div class="col-md-2 col-sm-2 box0">
<a href='complaint-history.php?cat=closed'> <div class="box1">
                  <span class="li_news"></span>
                       <?php 
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where userId='".$_SESSION['id']."' and  status='$status'");
$num1 = mysqli_num_rows($rt);
{?>
                  <h3><?php echo htmlentities($num1);?></h3>
                        </div></a>
                  <p><?php echo htmlentities($num1);?> Complaint has been closed</p>
                      </div>

<?php }?>
                     <div class="col-md-2 col-sm-2 box0">
<a href='complaint-history.php?cat=cancel'> <div class="box1">
                  <span class="li_news"></span>
                       <?php 
  $status="cancel";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where userId='".$_SESSION['id']."' and  status='$status'");
$num1 = mysqli_num_rows($rt);
{?>
                  <h3><?php echo htmlentities($num1);?></h3>
                        </div></a>
                  <p><?php echo htmlentities($num1);?> Complaint has been canceled</p>
                      </div>

<?php }?>	
                  	
                  	</div><!-- /row mt -->	
                  
                      
                     
                    				
				
				
          </section>
      </section>
<?php include("includes/footer.php");?>
  </section>

  
  </body>
   <?php require_once("includes/links.php")?>
</html>
<?php } ?>
