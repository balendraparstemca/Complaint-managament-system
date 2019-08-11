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
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
	
	 <div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <i class="fa fa-bullhorn" style="font-size:36px"></i> <strong>Welcome to your Blog Dashboard!!.!</strong> 
  </div>
	
	
 <div class="row mt">
 
                  <div class="col-lg-3 main-chart">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-rss fa-5x"></i><i class="fas fa-blog"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php //countrecords("blogs","all");?></p>
                    <p class="announcement-text"><strong>Blogs</strong></p>
                  </div>
                </div>
              </div>
              <a href="blog.php">
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
                    <i class="fa fa-tags fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php //admincounter("blog_categories");?></p>
                    <p class="announcement-text"><strong>Complaint</strong></p>
                  </div>
                </div>
              </div>
              <a href="complaint.php">
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
                    <i class="fa fa-user fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php //countrecords("blogs","publish");?></p>
                    <p class="announcement-text"><strong>User Account</strong></p>
                  </div>
                </div>
              </div>
              <a href="profile.php">
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
            <div class="panel panel-danger">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-envelope fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php // countrecords("blogs","draft");?></p>
                    <p class="announcement-text"><strong>Inbox</strong></p>
                  </div>
                </div>
              </div>
              <a href="#">
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
		  	<hr class="hr-primary" />
        </div><!-- /.row -->
	<div class='row' style='margin:20px;'> <section class="content-header">
      
      <ol class="breadcrumb">
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div></div>
		<div class='row mt' style='margin:10px;'>
		<section class="content-header">
      
      <ol class="breadcrumb">
        
      </ol>
    </section>
      				
		  
				    <div class="box box-info  col-lg-8 mt" style='background-color: coral;'>
            <div class="box-header">
             <h3> <i class="fa fa-envelope"></i> Quick Email   <button type="button" class="btn btn-info btn-sm pull-right" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button></h3>
              
             

            
              <!-- tools box -->
             
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
				 <div class="form-group">
                  <input type="file" name="subject" placeholder="Subject">
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>
		   <div class="box box-info  col-lg-3 mt" style='background-color: white;float:right;'>
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3 style='background-color: coral;'>NOTIFICATIONS</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>2 Minutes Ago</muted><br/>
                      		   <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>3 Hours Ago</muted><br/>
                      		   <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>7 Hours Ago</muted><br/>
                      		   <a href="#">Brandon Page</a> purchased a year subscription.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>11 Hours Ago</muted><br/>
                      		   <a href="#">Mark Twain</a> commented your post.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>18 Hours Ago</muted><br/>
                      		   <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br/>
                      		</p>
                      	</div>
                      </div>
</div>
				  </div>
				  <section class="page-header">
      
      <ol class="breadcrumb">
        
      </ol>
    </section>
				  <div class='row mt' style='margin:20px;'>
				  
				  			<div class="panel panel-primary">
				<div class="panel-heading text-center">LATEST PAGE VIEWS&nbsp;&nbsp;(TOTAL PAGES VIEWED:<?php require_once("libs/count_pages.php"); ?>)</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table">
							<tr class="info">
								<th>Page Name</th>
								<th>Total Views</th>
							</tr>
							<?php 
							include("libs/connect.php");
							try {
//connect to mysql
								$con=new PDO($dsn,$username,$password);
								$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
								
							} catch (Exception $ex) {
								echo 'Not Connected '.$ex->getMessage();
							}

//mysql select query
							$stmt=$con->prepare('SELECT * FROM page_hits LIMIT 30');
							$stmt->execute();
							$resources=$stmt->fetchAll();
							$row_count=$stmt->rowCount();
							if ($row_count==0) {
		# code...
								$jibu="No content Yet";
							}
							foreach ($resources as $resource) {
								echo '
								<tr>
								<td>'.$resource['page'].'</td>
								<td>'.$resource['count'].'</td>
								</tr>';


							}
							?>
						</table>
					</div> 
				</div>
			</div>
		<section class="content-header">
      
      <ol class="breadcrumb">
        
      </ol>
    </section>
	</div>
		
		 </section>
      </section>
<?php include("includes/footer.php");?>
  </section>
 <?php require_once("includes/links.php")?>
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.inbox11').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count1').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '#nn', function(){
  $('.count1').html('');
  var cid = $(this).attr('nid');
  console.log(cid);
  load_unseen_notification(cid);
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000000);
 
});
</script>
  
  </body>
  
 
</html>
<?php } ?>
