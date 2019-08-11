<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html>
<head>
<style>

</style>
	<script>
	
	$('.carousel').carousel({
  interval: 3000,
  pause: false
})
	</script>
<title>Mypondy</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mypondy"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
<!--// css -->
<link rel="stylesheet" href="css/ken-burns.css">
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<style>
.circular--landscape {
  display: inline-block;
  position: relative;
  width: 200px;
  height: 200px;
  overflow: hidden;
  border-radius: 50%;
}

.circular--landscape img {
  width: auto;
  height: 100%;
  margin-left: -50px;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  font-weight: bold;
  color:white;
  transform: translate(-50%, -50%);
}
.form-control {
    border: none;
	width:100%;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}
.content1 {
	margin-top:10px;
	background-color:#2E86C1;
	text-align:center;
	
}
.confirm .imgcircle , .process .imgcircle, .quality .imgcircle {
	background-color:#2E86C1;
}

.slider {
    background: url(3.jpg) no-repeat 0px 0px;
    background-size: cover;
    min-height: 800px;
}
.slider1 {
    background: url(tenor.gif) no-repeat 0px 0px;
    background-size: cover;
}
.slider2 {
    background: url(auroville.jpg) no-repeat 0px 0px;
    background-size: cover;
}
</style>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="top-banner">
			<div class="container">
				<div class="top-banner-left">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i> <?php  getcontacts('links',3); ?></li>
						<li><a href="mailto:example@email.com"><i class="fa fa-envelope" aria-hidden="true"></i>  <?php  getcontacts('links',2); ?></a></li>
					</ul>
				</div>
				<div class="top-banner-right">
					<ul>
						<li><a class="facebook" href="<?php getlinks('links','facebook') ?>"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="<?php getlinks('links','twitter') ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="<?php getlinks('links','dribble') ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="<?php getlinks('links','googleplus') ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1>
						<a href="index.php"><img src='images/<?php geticon('links'); ?>'/></a>
					</h1>
				</div>
				<div class="top-nav">
					<nav class="navbar navbar-default">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
							</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a class="active" href="index.html">Home</a></li>
										
									<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog<b class="caret"></b></a>
              <ul class="dropdown-menu"style='background-color: transparent !important;'>
                <li><a href="login.php">Blogging &nbsp;</a></li>
             
              
                
                <li><a href="blog.php">View Blogs</a>
				</li>
              </ul>
            </li>
					
									<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Complaint<b class="caret"></b></a>
              <ul class="dropdown-menu"style='background-color: transparent !important;'>
                <li><a href="login.php">Lodge Complaint</a></li>
             
              
                
                <li><a href="#" data-toggle="modal" data-target="#myModal">Track Complaint</a>
				</li>
              </ul>
            </li>
								<li><a href="contact.html">About</a></li>
							
								<li><a href="login.php">Login</a></li>

								<div class="clearfix"> </div>
							</ul>	
						</div>	
					</nav>		
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	
	<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Complain Tracking</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	  <div class='row'>
	   <div class='col-md-10'>
                                        <input class="form-control" type="search" placeholder="Search topics or keywords"></div><div class='col-md-2'>
                                        <button class="btn btn-sm btn-success" type="submit">Search</button>
                                    </span>
                                    </div><br/></div>
                                    <!--end of col-->
                                    
      	<div class="content1">
		<h2>Complaint No.</h2>
	</div>
	<div class="content2">
		<div class="content2-header1">
			<p>Complaint Lodge date: <span>7-NOV-2015</span></p>
		</div>
		<div class="content2-header1">
			<p>Complaint Status : <span>In Process</span></p>
		</div>
		<div class="content2-header1">
			<p>Updated Date : <span>7-NOV-2015</span></p>
		</div>
		<div class="clear"></div>
	</div>
	
	<div class="content3" style='padding-top:100px;'>
        <div class="shipment">
			<div class="confirm">
                <div class="imgcircle">
                    <img src="images/confirm.png" alt="confirm order">
            	</div>
				<span class="line"></span>
				<p>Lodge Date</p>
			</div>
			<div class="process">
           	 	<div class="imgcircle">
                	<img src="images/process.png" alt="process order">
            	</div>
				<span class="line"></span>
				<p>Varified Complaint</p>
			</div>
			<div class="quality">
				<div class="imgcircle">
                	<img src="images/quality.png" alt="quality check">
            	</div>
				<span class="line"></span>
				<p>In Process</p>
			</div>
			
			<div class="quality">
				<div class="imgcircle">
                	<img src="images/quality.png" alt="quality check">
            	</div>
				
				<p>closed</p>
			</div>
		
		</div>
	</div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
	<!-- //banner -->
	<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
            <!-- Wrapper for Slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First Slide -->
                <div class="item active">
					<div class="slider">
						<div class="carousel-caption kb_caption slider-grid">
							<h3>Promenade Beach</h3>
							<p>Rock Beach is the popular stretch of beachfront in the city of Puducherry, India, .</p>
						</div>
					</div>
                </div>

                <!-- Second Slide -->
                <div class="item">
					<div class="slider slider1">
						<div class="carousel-caption kb_caption kb_caption_right slider-grid">
							<h3>Rock Beach</h3>
							<p>Bordered by a street with restaurants, this scenic, rocky beach draws crowds during the evening..</p>
						</div>
					</div>
                </div>

                <!-- Third Slide -->
                <div class="item">
					<div class="slider slider2">
						<div class="carousel-caption kb_caption kb_caption_center slider-grid">
						   <h3>Auroville</h3>
							<p>Auroville is an experimental community in southern India. It was founded in 1968 by the spiritual leader Mirra Alfassa </p>
						</div>
					</div>
                </div>

            </div>
            <!-- Navigation Buttons -->
            <!-- Left Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
                <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <!-- Right Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div> 
	<!-- about -->
	<div class="about">
		<div class="container">
			<div class="w3l-about-heading">
				<h2>Top Tours</h2>
				<p>Best Tourist Places to Visit in Pondicherry</P>
			</div>
			<div class="about-grids">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			 <div class="carousel-inner">
    <?php getplaces('placed');?>
			</div>
			
			<!-- Navigation Buttons -->
            <!-- Left Button -->
            <a class="left carousel-control kb_control_left" href="#myCarousel" role="button" data-slide="prev">
                <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <!-- Right Button -->
            <a class="right carousel-control kb_control_right" href="#myCarousel" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
			</div>
		</div>
	</div>
	</div>
	<!-- //about -->
	<!-- offer -->
	<div class="offer">
		<div class="container">
		 <?php  getonelatest('blogs');?>
		</div>
	</div>
	<!-- //offer -->
	<!-- news -->
	<div class="news">
		<div class="container">
			<div class="news-heading">
				<h3>Latest Blogs</h3>
				<p>Latest Blog On Pondicherry</p>
			</div>
			<div class="news-grids">
			<div id="myCarousel2" class="carousel slide carousel-fade" data-ride="carousel">
			 <div class="carousel-inner">
<?php getfour('blogs');?>
			</div>
			<!-- Navigation Buttons -->
            <!-- Left Button -->
             <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
			</div>
			</div>
		</div>
	</div>
	<!-- //news -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-2 footer-grid">
					<div class="footer-grid-heading">
						<h4>Address</h4>
					</div>
					<div class="footer-grid-info">
						<p>pondicherry university
							<span>rock beach.</span>
						</p>
						<p class="phone">Phone : +9424703403
							<span>Email : <a href="mailto:example@email.com">mail@example.com</a></span>
						</p>
					</div>
				</div>
				<div class="col-md-4 footer-grid">
					<div class="footer-grid-heading">
						<h4>Popular post</h4>
					</div>
					<div class="footer-grid-info">
						<?php 
						getpopularposts("page_hits"); ?>
					</div>
				</div>
				<div class="col-md-6 footer-grid">
				<div class='row'>
				<div class="col-md-6 footer-grid">
					<div class="footer-grid-heading">
						<h4>Follow</h4>
					</div>
					<div class="social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 footer-grid">
					<div class="footer-grid-heading">
						<h4>Newsletter</h4>
					</div>
					<div class="footer-grid-info">
						<form action="#" method="post">
							<input type="email" id="mc4wp_email" name="EMAIL" placeholder="Enter your email here" required="">
							<input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
				</div>
				<br/>
				<div class='row'>
					<div class="col-md-12 footer-grid">
					<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.6671097024923!2d79.83259061478216!3d11.928239291546316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a53622a55555555%3A0x255018189ecc7814!2sPuducherry+Tourism+Development+Corporation!5e0!3m2!1sen!2sin!4v1553885059664!5m2!1sen!2sin" width="600" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></p>
					</div>
				
				</div>
				
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="copyright">
				<p>Mypondy@.com</a> </p>
			</div>
		</div>
	</div>
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c9e71f06bba460528005d29/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	<!-- //footer -->
	<script src="js/SmoothScroll.min.js"></script>
</body>	
</html>