<?php session_start();
error_reporting(0);
include('includes/config2.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{ ?>
<?php require_once("libs/count_records.php")?>

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
      User BLOGS
        
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
 <div class="row mtbox">
                  <div class="col-lg-3 main-chart">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-rss fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php countrecords("blogs","all");?></p>
                    <p class="announcement-text"><strong>All Blogs</strong></p>
                  </div>
                </div>
              </div>
              <a href="blogs_view.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 main-chart">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-list-alt fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php admincounter("blog_categories");?></p>
                    <p class="announcement-text"><strong>Blogs Categories</strong></p>
                  </div>
                </div>
              </div>
              <a href="blog_categories_view.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 main-chart">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-inbox fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php countrecords("blogs","publish");?></p>
                    <p class="announcement-text"><strong>Published Blogs</strong></p>
                  </div>
                </div>
              </div>
              <a href="blogs_view.php?cat=publish">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 main-chart
		  ">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-ban fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php  countrecords("blogs","draft");?></p>
                    <p class="announcement-text"><strong>Blocked Blogs</strong></p>
                  </div>
                </div>
              </div>
              <a href="blogs_view.php?cat=draft">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div><!-- /.row -->
		 </section>
      </section>
<?php include("includes/footer.php");?>
  </section>

   	
  </body>
   <?php require_once("includes/links.php")?>
</html>
<?php } ?>
