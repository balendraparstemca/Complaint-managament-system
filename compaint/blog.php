

<?php
require_once 'header.php';
require("libs/fetch_data.php");
include("database/db_connect.php");//database config file
 // Number of entries to show in a page. 
	// Look for a GET variable page if not found default is 1.	 
	if (isset($_GET["page"])) { 
	$pn = $_GET["page"]; 
	} 
	else { 
	$pn=1; 
	}; 


 

?> 
<!-- //parallax -->
<style>

/*recent-post-col////////////////////*/
.widget-sidebar {
    background-color: #fff;
    padding: 20px;
    margin-top: 30px;
}

.title-widget-sidebar {
    font-size: 14pt;
    border-bottom: 2px solid #e5ebef;
    margin-bottom: 15px;
    padding-bottom: 10px;    
    margin-top: 0px;
}

.title-widget-sidebar:after {
    border-bottom: 2px solid #f1c40f;
    width: 150px;
    display: block;
    position: absolute;
    content: '';
    padding-bottom: 10px;
}
/*categories//////////////////////*/

.categories-btn{
    background-color: #F39C12;
    margin-top:1px;
    color: #fff;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    
}
.categories-btn:after {
    content: '\25BA';
    color: #fff;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}
.categories-btn:hover {
    background-color: #16A085;color: #fff;
}


/* sol yazılar */

article{
    background-color: #FFFFFF;
    padding: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
}
figure img{
    width: 100%;
	padding-left:10px;
    height: 10%;
}
.glyphicon-folder-open,
.glyphicon-user,
.glyphicon-calendar,
.glyphicon-eye-open,
.glyphicon-comment{
    padding: 5px;
}


/* Post tab custom css  */
.populat-post-tab {
    border: 1px solid #e0e0e0;
}

.populat-post-tab .nav-tabs {
    border: none;
}

.populat-post-tab .nav-tabs > li {
    width: 33.33333333333333%;
    text-align: center;
}

.populat-post-tab .nav-tabs > li a {
    background: #f0f5f7;
    margin-right: 0;
    border: 1px solid #e0e0e0;
    border-radius: 0;
    display: block;
    padding: 10px 0;
    font-weight: 700;
    font-size: 15px;
    color: #3a3c41;
    transition: all 0.01s;
}

.populat-post-tab .nav-tabs > li.active a {
    border-top: 2px solid #018EBB;
    border-bottom: none;
    border-left: none;
    border-right: none;
    background: #ffffff;
}

.tab-post-list-wrap {
    margin: 15px 0;
    padding: 0 35px;
}

.tab-post-thumb {
    margin: 0 15px 0 0;
}

.tab-post-thumb figure {
    width: 65px;
}

.tab-post-thumb figure img{
    max-width: 70px;
}

.tab-post-title h6 {
    font-size: 14px;
    font-weight: 700;
    line-height: 18px;
    margin-bottom: 5px;
}

.tab-post-title span {
    font-size: 12px;
    color: #999ca5;
}

.tab-post-list ul{
    list-style: none;
}

.tab-post-list ul li:before {
    content: "";
    width: 2px;
    height: 8px;
    padding: 0 4px;
    margin-right: 5px;
    background: #018EBB;
    display: inline-block;
}

.tab-post-list ul li small {
    display: block;
}

.tab-post-list ul li small abbr {
    font-size: 11px;
    line-height: 20px;
    text-decoration: none;
    border: none;
}






/*** PANEL PRIMARY ***/
.with-nav-tabs.panel-primary .nav-tabs > li > a,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
    color: #fff;
}
.with-nav-tabs.panel-primary .nav-tabs > .open > a,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
	color: #fff;
	background-color: #3071a9;
	border-color: transparent;
}
.with-nav-tabs.panel-primary .nav-tabs > li.active > a,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:focus {
	color: #428bca;
	background-color: #fff;
	border-color: #428bca;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #428bca;
    border-color: #3071a9;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #fff;   
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #3071a9;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    background-color: #4a9fe9;
}




.navbar {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem;
    background:#222;
    color: #f2f2f2;
}

input[type=search] {
	background: #555 url(http://hp-proliant.co.uk/qual_images/mob-search-icon.png) no-repeat 9px center;
	border: solid 1px #ccc;
	padding: 9px 10px 9px 32px;
	width: 55px;
}
input[type=search]:focus {
	width: 600px;
	background-color: #ccc;
	border-color: #333;
	border: solid 1px #fff;
}





/* MENU-LEFT
-------------------------- */
/* layout */
#left ul.nav {
    margin-bottom: 2px;
    font-size: 20px; /* to change font-size, please change instead .lbl */
}
#left ul.nav ul,
#left ul.nav ul li {
    list-style: none!important;
    list-style-type: none!important;
    margin-top: 1px;
    margin-bottom: 1px;
}
#left ul.nav ul {
    padding-left: 0;
    width: auto;
}
#left ul.nav ul.children {
    padding-left: 12px;
    width: auto;
}
#left ul.nav ul.children li{
    margin-left: 0px;
}
#left ul.nav li a:hover {
    text-decoration: none;
}

#left ul.nav li a:hover .lbl {
    color: #999!important;
}

#left ul.nav li.current>a .lbl {
    background-color: #999;
    color: #fff!important;
}

/* parent item */
#left ul.nav li.parent a {
    padding: 0px;
    color: #ccc;
}
#left ul.nav>li.parent>a {
    border: solid 1px #999;
    text-transform: uppercase;
}    
#left ul.nav li.parent a:hover {
    background-color: #fff;
    -webkit-box-shadow:inset 0 3px 8px rgba(0,0,0,0.125);
    -moz-box-shadow:inset 0 3px 8px rgba(0,0,0,0.125);
    box-shadow:inset 0 3px 8px rgba(0,0,0,0.125);    
}

/* link tag (a)*/
#left ul.nav li.parent ul li a {
    color: #222;
    border: none;
    display:block;
    padding-left: 5px;    
}

#left ul.nav li.parent ul li a:hover {
    background-color: #fff;
    -webkit-box-shadow:none;
    -moz-box-shadow:none;
    box-shadow:none;  
}


/* label */
#left ul.nav li .lbl {
    padding: 5px 12px;
    display: inline-block;
}
#left ul.nav li.current>a>.lbl {
    color: #fff;
}
#left ul.nav  li a .lbl{
    font-size: 12px;
}

/* THEMATIQUE
------------------------- */
/* theme 1 */
#left ul.nav>li.item-1.parent>a {
    border: solid 1px #ff6307;
}
#left ul.nav>li.item-1.parent>a>.sign,
#left ul.nav>li.item-1 li.parent>a>.sign{
    margin-left: 0px;
    background-color: #ff6307;
}
#left ul.nav>li.item-1 .lbl {
    color: #ff6307;
}
#left ul.nav>li.item-1 li.current>a .lbl {
    background-color: #ff6307;
    color: #fff!important;
}

/* theme 2 */
#left ul.nav>li.item-8.parent>a {
    border: solid 1px #51c3eb;
}
#left ul.nav>li.item-8.parent>a>.sign,
#left ul.nav>li.item-8 li.parent>a>.sign{
    margin-left: 0px;
    background-color: #51c3eb;
}
#left ul.nav>li.item-8 .lbl {
    color: #51c3eb;
}
#left ul.nav>li.item-8 li.current>a .lbl {
    background-color: #51c3eb;
    color: #fff!important;
}

/* theme 3 */
#left ul.nav>li.item-15.parent>a {
    border: solid 1px #94cf00;
}
#left ul.nav>li.item-15.parent>a>.sign,
#left ul.nav>li.item-15 li.parent>a>.sign{
    margin-left: 0px;
    background-color: #94cf00;
}
#left ul.nav>li.item-15 .lbl {
    color: #94cf00;
}
#left ul.nav>li.item-15 li.current>a .lbl {
    background-color: #94cf00;
    color: #fff!important;
}

/* theme 4 */
#left ul.nav>li.item-22.parent>a {
    border: solid 1px #ef409c;
}
#left ul.nav>li.item-22.parent>a>.sign,
#left ul.nav>li.item-22 li.parent>a>.sign{
    margin-left: 0px;
    background-color: #ef409c;
}
#left ul.nav>li.item-22 .lbl {
    color: #ef409c;
}
#left ul.nav>li.item-22 li.current>a .lbl {
    background-color: #ef409c;
    color: #fff!important;
}

</style>
<script>
!function ($) {
    
    // Le left-menu sign
    /* for older jquery version
    $('#left ul.nav li.parent > a > span.sign').click(function () {
        $(this).find('i:first').toggleClass("icon-minus");
    }); */
    
    $(document).on("click","#left ul.nav li.parent > a > span.sign", function(){          
        $(this).find('i:first').toggleClass("icon-minus");      
    }); 
    
    // Open Le current menu
    $("#left ul.nav li.parent.active > a > span.sign").find('i:first').addClass("icon-minus");
    $("#left ul.nav li.current").parents('ul.children').addClass("in");

}(window.jQuery);
</script>
</head>
<body>
	<!-- banner -->
	<div class="banner about-bg">
		<div class="top-banner about-top-banner">
			<div class="container">
				<div class="top-banner-left">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i> +1 234 567 8901</li>
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
						  <nav class="navbar">
  <a class="navbar-brand"></a>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
</nav>
		   <?php
		   $limit=10;
$start_from = ($pn-1) * $limit; 

	

		   if(!empty($_REQUEST['cat']))
{          $id=$_REQUEST['cat'];
                
				getcategoryblogs('blogs',$id,$start_from);
}        else
{  ?>
<?php

 getblogridposts("blogs",$start_from);
}?>
		   <ul class="pagination"> 
	<?php 
		$sql = "SELECT COUNT(*) FROM blogs"; 
		$rs_result = mysqli_query($con,$sql); 
		$row = mysqli_fetch_row($rs_result); 
		$total_records = $row[0]; 
		
		// Number of pages required. 
		$total_pages = ceil($total_records / $limit); 
		$pagLink = "";						 
		for ($i=1; $i<=$total_pages; $i++) { 
		if ($i==$pn) { 
			$pagLink .= "<li class='active'><a href='blog.php?page="
												.$i."'>".$i."</a></li>"; 
		}			 
		else { 
			$pagLink .= "<li><a href='blog.php?page=".$i."'> 
												".$i."</a></li>"; 
		} 
		}; 
		echo $pagLink; 
	?> 
	</ul> 
		    
					</div>
					<div class="col-md-4 blog-top-right-grid">
						<div class="categories">
							
            <div class="panel with-nav-tabs panel-primary">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1primary" data-toggle="tab">Categories</a></li>
                            <li><a href="#tab2primary" data-toggle="tab">Latest Post</a></li>
							<li><a href="#tab3primary" data-toggle="tab">Older Post</a></li>
                            
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1primary">
						<h4><strong>Categories</strong></h4>
										<ul class="list-group single">
											<?php countcategories();?>
										</ul>
						</div>
                        <div class="tab-pane fade" id="tab2primary"><marquee behavior="scroll" direction="down" onmouseover="this.stop();" onmouseout="this.start();">	<?php getpopularposts("page_hits"); ?></marquee></div>
                        <div class="tab-pane fade" id="tab3primary"> <marquee behavior="scroll" direction="down" onmouseover="this.stop();" onmouseout="this.start();">    <?php getolderposts("blogs");?></marquee></div>
                        <div class="tab-pane fade" id="tab4primary">Primary 4</div>
                        <div class="tab-pane fade" id="tab5primary">Primary 5</div>
                    </div>
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
                        <span class="lbl">Menu Group ii</span>                      
                    </a>
                    <ul class="children nav-child unstyled small collapse" id="sub-item-8">
                        <li class="item-9 deeper parent">
                            <a class="" href="#">
                                <span data-toggle="collapse" data-parent="#menu-group-1" href="#sub-item-9" class="sign"><i class="icon-plus icon-white"></i></span>
                                <span class="lbl">Menu 1</span> 
                            </a>
                            <ul class="children nav-child unstyled small collapse" id="sub-item-9">
                                <li class="item-10">
                                    <a class="" href="#">
                                        <span class="sign"><i class="icon-play"></i></span>
                                        <span class="lbl">Menu 1.1</span>
                                    </a>
                                </li>
                                <li class="item-11">
                                    <a class="" href="#">
                                        <span class="sign"><i class="icon-play"></i></span>
                                        <span class="lbl">Menu 1.2</span> 
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        <li class="item-12 deeper parent">
                            <a class="" href="#">
                                <span data-toggle="collapse" data-parent="#menu-group-1" href="#sub-item-12" class="sign"><i class="icon-plus icon-white"></i></span>
                                <span class="lbl">Menu 2</span> 
                            </a>
                            <ul class="children nav-child unstyled small collapse" id="sub-item-12">
                                <li class="item-13">
                                    <a class="" href="#">
                                        <span class="sign"><i class="icon-play"></i></span>
                                        <span class="lbl">Menu 2.1</span>                                    
                                    </a>
                                </li>
                                <li class="item-14">
                                    <a class="" href="#">
                                        <span class="sign"><i class="icon-play"></i></span>
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
						<h3>Popular Posts</h3>
						<?php getpopularposts("page_hits"); ?>
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