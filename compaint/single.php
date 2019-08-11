<?php
require_once 'header.php';
require("libs/fetch_data.php");
include("database/conn.php");//database config file


$id=$_REQUEST['id']; $query="SELECT * from blogs where id='".$id."'"; $result=mysqli_query($GLOBALS["___mysqli_ston"],$query) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$row = mysqli_fetch_assoc($result);
//pageview count query
$page=$row['title'];
$count="SELECT * FROM page_hits WHERE page='".$page."'";$feedback=mysqli_query($GLOBALS["___mysqli_ston"],$count) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$roo=mysqli_fetch_assoc($feedback);?>

<style>
.news-grid {
		float: none;
		width: 100%;
	}</style>
</head>
<script>
FB.login(function(response) {
    if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
     FB.api('/me', function(response) {
       console.log('Good to see you, ' + response.name + '.');
     });
    } else {
     console.log('User cancelled login or did not fully authorize.');
    }
});
</script>
<body>
<?php
require_once('adminstats/conn.php');
require_once('counter.php');
	$pn=updateCounter(''.$row['title'].''); // Updates page hits
	echo $pn;
	updateInfo(); // Updates hit info 
	?>
	<!-- banner -->
	<div class="banner about-bg">
		<div class="top-banner about-top-banner">
			<div class="container">
				<div class="top-banner-left">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i> +91 9424703403</li>
						<li><a href="mailto:example@email.com"><i class="fa fa-envelope" aria-hidden="true"></i> mail@example.com</a></li>
					</ul>
				</div>
				<div class="top-banner-right">
					<ul>
						<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1>
						<a href="index.html">My Pondy</a>
					</h1>
				</div>
				<div class="top-nav">
					<nav class="navbar navbar-default">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
							</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="services.html">Services</a></li>
									
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="contact.html">Contact</a></li>
								<div class="clearfix"> </div>
							</ul>	
						</div>	
					</nav>		
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- blog -->
		<div class="blog">
				<!-- container -->
				<div class="container">
					<div class="col-md-8 blog-top-left-grid">
						<div class="left-blog left-single">
							<div class="blog-left">
								<div class="single-left-left">
								<?php $searc=$row['tags'];?>
									<p>Posted By <a href="#"><?php echo $row['author']; ?></a> &nbsp;&nbsp; on <?php echo $row['date']; ?> &nbsp;&nbsp; <a href="#">View ( <?php echo $roo['count']; ?>)</a>&nbsp;&nbsp;<i class="far fa-tags"></i>Tag  <?php echo $row['tags']; ?></p>
									<img src="images/<?php echo $row['photo']; ?>" class="img-fluid" alt="image not available" >
						
								</div>
								<h3>
										<a href="single.html"><?php echo $row['title']; ?></a>
										</h3>
								<div class="blog-left-bottom" >
									<P style='overflow-wrap: break-word;'>	<?php //getsharingscript("links"); ?>
										<?php echo $row['content']; ?></P>
								</div>
								<iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Flocalhost%2Fmyproject%2Fsingle.php%3Fid%3D2&width=61&layout=button_count&action=like&size=small&show_faces=true&share=false&height=21&appId" width="61" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
						<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%2Fmyproject%2Fsingle.php%3Fid%3D2&layout=button_count&size=small&width=69&height=20&appId" width="69" height="20" style="border:none;overflow:hidden;float:right" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
							</div>
							<div class="response">
									</div>
						
							<div class="opinion">
								<div id="fb-root"></div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=363173927461585&autoLogAppEvents=1"></script>				<?php //getcommentsscript("links"); ?>
				<div class="fb-comments" data-href="http://localhost/myproject/single.php?id=5" data-width="600" data-numposts="5"></div>
							</div>
								
								<?php //getcommentsscript("links"); ?>
						</div>
					
					</div>
					<div class="col-md-4 blog-top-right-grid">
						<div class="categories">
							<h3>Latest post</h3>
							<div class="news-grid">
							
			<div id="myCarousel2" class="carousel slide carousel-fade" data-ride="carousel">
			 <div class="carousel-inner">

				<?php getbottomsliderposts('blogs'); ?>
				<div class="clearfix"> </div>
			</div>
			<!-- Navigation Buttons -->
            <!-- Left Button -->
           <!--  <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>-->
			</div>
			</div>
						</div>
						<div class="categories" style="padding-top:10px">
						
							<h3> <li>Archive</li>
							</h3>
							
									<div id="left">
            <ul id="menu-group-1" class="nav menu">  
              <li class="item-8 deeper parent">
                    <a class="" href="#">
                        <span data-toggle="collapse" data-parent="#menu-group-1" href="#sub-item-8" class="glyphicon glyphicon-plus"></span>
                        <span class="btn btn-primary"">  2018  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge">8</span>  </span>                  
                    </a>
                    <ul class="children nav-child unstyled small collapse" id="sub-item-8">
                        <li class="item-9 deeper parent">
                            <a class="" href="#">
                                <span data-toggle="collapse" data-parent="#menu-group-1" href="#sub-item-9" class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                <span class="lbl">january</span> 
                            </a>
                            <ul class="children nav-child unstyled small collapse" id="sub-item-9">
                                <li class="item-10">
                                    <a class="" href="#">
                                        <span class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                        <span class="lbl">1.1</span>
                                    </a>
                                </li>
                                <li class="item-11">
                                    <a class="" href="#">
                                        <span class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                        <span class="lbl">Menu 1.2</span> 
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        <li class="item-12 deeper parent">
                            <a class="" href="#">
                                <span data-toggle="collapse" data-parent="#menu-group-1" href="#sub-item-12" class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                <span class="lbl">February</span> 
                            </a>
                            <ul class="children nav-child unstyled small collapse" id="sub-item-12">
                                <li class="item-13">
                                    <a class="" href="#">
                                        <span class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                        <span class="lbl">Menu 2.1</span>                                    
                                    </a>
                                </li>
                                <li class="item-14">
                                    <a class="" href="#">
                                        <span class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                        <span class="lbl">Menu 2.2</span>                                    
                                    </a>
                                </li>
                            </ul>
                        </li>
						 <li class="item-12 deeper parent">
                            <a class="" href="#">
                                <span data-toggle="collapse" data-parent="#menu-group-1" href="#sub-item-12" class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                <span class="lbl">March</span> 
                            </a>
                            <ul class="children nav-child unstyled small collapse" id="sub-item-12">
                                <li class="item-13">
                                    <a class="" href="#">
                                        <span class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                        <span class="lbl">Menu 2.1</span>                                    
                                    </a>
                                </li>
                                <li class="item-14">
                                    <a class="" href="#">
                                        <span class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                        <span class="lbl">Menu 2.2</span>                                    
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> 

                <li class="item-8 deeper parent">
                    <a class="" href="#">
                        <span data-toggle="collapse" data-parent="#menu-group-2" href="#sub-item" class="glyphicon glyphicon-plus"></span>
                       <span class="btn btn-primary"">  2019  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge">6</span>  </span>                    
                    </a>
                    <ul class="children nav-child unstyled small collapse" id="sub-item">
                        <li class="item-9 deeper parent">
                            <a class="" href="#">
                                <span data-toggle="collapse" data-parent="#menu-group-2" href="#sub-item-9" class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                <span class="lbl">january</span> 
                            </a>
                            <ul class="children nav-child unstyled small collapse" id="sub-item-9">
                                <li class="item-10">
                                    <a class="" href="#">
                                        <span class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                        <span class="lbl">1.1</span>
                                    </a>
                                </li>
                                <li class="item-11">
                                    <a class="" href="#">
                                        <span class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                        <span class="lbl">Menu 1.2</span> 
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        <li class="item-12 deeper parent">
                            <a class="" href="#">
                                <span data-toggle="collapse" data-parent="#menu-group-1" href="#sub-item-12" class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                <span class="lbl">February</span> 
                            </a>
                            <ul class="children nav-child unstyled small collapse" id="sub-item-12">
                                <li class="item-13">
                                    <a class="" href="#">
                                        <span class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                        <span class="lbl">Menu 2.1</span>                                    
                                    </a>
                                </li>
                                <li class="item-14">
                                    <a class="" href="#">
                                        <span class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                        <span class="lbl">Menu 2.2</span>                                    
                                    </a>
                                </li>
                            </ul>
                        </li>
						 <li class="item-12 deeper parent">
                            <a class="" href="#">
                                <span data-toggle="collapse" data-parent="#menu-group-1" href="#sub-item-12" class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                <span class="lbl">March</span> 
                            </a>
                            <ul class="children nav-child unstyled small collapse" id="sub-item-12">
                                <li class="item-13">
                                    <a class="" href="#">
                                        <span class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                        <span class="lbl">Menu 2.1</span>                                    
                                    </a>
                                </li>
                                <li class="item-14">
                                    <a class="" href="#">
                                        <span class="sign"><i class="glyphicon glyphicon-plus"></i></span>
                                        <span class="lbl">Menu 2.2</span>                                    
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>    			
            </ul>          
		</div>                          
						
						</div>
						<div class="categories">
											<div class="tech-btm">
						<h3>Related Posts</h3>
						<?php relatedposts("blogs",$searc); ?>
					</div>
					</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- //container -->
		</div>
		<!-- //blog -->
	<?php
	require_once 'footer.php';
	?>