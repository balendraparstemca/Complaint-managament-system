<?php 

function geticon($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no icon alert
		if ($rowcount==0) {
      		# code...
			echo 'NoIcon';
		}
      	//if there are rows available display all the results
		foreach ($result as $webicon => $icon) {
      	# code...
			echo ''.$icon['icon'].'';
		}
	}

	mysqli_close($con);
}
function getjavascripts($table){
require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'No script';
		}
      	//if there are rows available display all the results
		foreach ($result as $jsscripts => $js) {
      	# code...
			echo ''.$js['javascript'].'';
		}
	}

	mysqli_close($con);
}
function getsharingscript($table){
require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'No script';
		}
      	//if there are rows available display all the results
		foreach ($result as $sharingscript => $sharing) {
      	# code...
			echo ''.$sharing['sharing_script'].'';
		}
	}

	mysqli_close($con);
}
function getcommentsscript($table){
require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'No script';
		}
      	//if there are rows available display all the results
		foreach ($result as $commentsscript => $csript) {
      	# code...
			echo ''.$csript['comments_script'].'';
		}
	}

	mysqli_close($con);
}
function getshortdescription($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $sdc) {
      	# code...
			echo ''.$sdc['short_description'].'';
		}
	}

	mysqli_close($con);
}
function getcontacts($table,$num){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $contacts) {
      	# code...num
			if ($num==1) {
				# code...
				echo ''.$contacts['address'].'';
			}
			elseif ($num==2) {
				# code...
				echo ''.$contacts['email'].'';
			}
			elseif ($num==3) {
				# code...
				echo ''.$contacts['phone'].'';
			}
			elseif ($num==4) {
				# code...
				echo ''.$contacts['googlemap'].'';
			}
		
		}
	}

	mysqli_close($con);
}
function getdetaileddescription($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $sdc) {
      	# code...
			echo ''.$sdc['detailed_description'].'';
		}
	}

	mysqli_close($con);
}
function countcategories(){
	require("database/db_connect.php");
	$sql="SELECT * FROM blog_categories LIMIT 10";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Categories!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $categoriescount => $categorydata) {
				#count how many times each category appears in blogs
			$categoryid=$categorydata['id'];
			$sql="SELECT * FROM blogs WHERE category='$categoryid'";
			if ($result=mysqli_query($con,$sql)) {
					# code...
				$rowcountcategory=mysqli_num_rows($result);
				$getcatcount=$rowcountcategory;
			}
					# code...show data
			echo '<li class="list-group-item d-flex justify-content-between align-items-center"><a href="blog.php?cat='.$categoryid.'">
			'.$categorydata['name'].'</a>
			<span class="badge badge-success badge-pill">'.$rowcountcategory.'</span>
			</li>';
		}
	}

	mysqli_close($con);
}
function getbannertext($table,$position){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Hello World!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $bannertext) {
      	# code...
			if ($position==1) {
					# code...
				echo ''.$bannertext['bannertext1'].'';
			}
			elseif ($position==2) {
					# code...
				echo ''.$bannertext['bannertext2'].'';
			}
			elseif ($position==3) {
					# code...
				echo ''.$bannertext['bannertext3'].'';
			}
			elseif ($position==4) {
					# code...
				echo ''.$bannertext['bannertext4'].'';
			}
		}
	}

	mysqli_close($con);
}
function getwebname($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Name!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $blogname) {
      	# code...
			echo ''.$blogname['website_name'].'';
		}
	}

	mysqli_close($con);
}
function getkeywords($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Nothing';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $keywords) {
      	# code...
			echo ''.$keywords['keywords'].'';
		}
	}

	mysqli_close($con);
}
function getlinks($table,$platform){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo '#';
		}
      	//if there are rows available display all the results
		foreach ($result as $link => $site) {
      	# code...
			if ($platform=="facebook") {
					# code...
				echo ''.$site['facebook'].'';
			}
			elseif ($platform=="twitter") {
					# code...
				echo ''.$site['twitter'].'';
			}
			elseif ($platform=="googleplus") {
					# code...
				echo ''.$site['googleplus'].'';
			}
			elseif ($platform=="pinterest") {
					# code...
				echo ''.$site['pinterest'].'';
			}
			elseif ($platform=="dribble") {
					# code...
				echo ''.$site['dribble'].'';
			}

		}
	}

	mysqli_close($con);
}
function getcategoriesmenu($table)
{
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no categories alert
		if ($rowcount==0) {
      		# code...
			echo 'No Categories';
		}
      	//if there are rows available display all the results
		foreach ($result as $blog_categories => $category) {
      	# code...
			echo '<a class="dropdown-item" href="category.php?id='.$category['id'].'">'.$category['name'].'</a>
			<div class="dropdown-divider"></div>';
		}
	}

	mysqli_close($con);
}
function getbottomsliderposts($table){
require("database/db_connect.php");
	$sql="SELECT * FROM $table ORDER BY id DESC LIMIT 6";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		$i=0;
		echo '<div class="item active">';
		foreach ($result as $thefour => $fourdata) {
			
      	# code...
		
		
		
		if($i>0)
		{
			
	
	echo '<div class="item">';
       }		
		echo '<div class="col-md-4 news-grid">
					<div class="agile-news-grid-info">
						<div class="news-grid-info-img">
							<a href="single.php?id='.$fourdata['id'].'"><img width="120px" height="200px" src="images/'.$fourdata['photo'].'" alt="" /></a>
						</div>
						<div class="news-grid-info-bottom">
							<div class="date-grid">
								<div class="admin">
									<a href="#"><i class="fa fa-user" aria-hidden="true"></i> '.$fourdata['author'].'</a>
								</div>
								<div class="time">
									<p><i class="fa fa-calendar" aria-hidden="true"></i>  '.$fourdata['date'].'</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="news-grid-info-bottom-text" style="overflow: hidden;">
								<a href="single.php?id='.$fourdata['id'].'">'.$fourdata['title'].'</a>
								<p>'.substr($fourdata['content'], 0, 100).'</p>
							</div>
						</div>
					</div>
				</div></div>';
				$i++;
		
		
		}
		
	}

	mysqli_close($con);
}
function getblogridposts($table,$start){
	require("database/db_connect.php");
	$limit=10;
	$sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id DESC LIMIT $start, $limit";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
		
      	//if there are rows available display all the results
		foreach ($result as $bloggrid => $griditem) {
      	# code...
		$trimstring =0;
		if (strlen($griditem['content']) > 1000) {
$trimstring = substr($griditem['content'], 0, 500);
} else {
$trimstring = $griditem['content'];
}
			echo '
			<article>
		        <div class="row">
		            <div class="col-sm-6 col-md-4">
		                <figure>
		                   <a href="single.php?id='.$griditem['id'].'">
			<img src="images/'.$griditem['photo'].'">
			</a>
		                </figure>
		            </div>
		            <div class="col-sm-6 col-md-8">
		                <span class="label label-success pull-right"><i class="glyphicon glyphicon-comment"></i>50</span>
		                <h4><a href="single.php?id='.$griditem['id'].'">'.$griditem['title'].'</a></h4>
		                <p style="overflow: hidden;" >'.$trimstring.'</p>
		                <section>
		                    <i class="glyphicon glyphicon-folder-open"></i>'.$griditem['tags'].'
		                    <i class="glyphicon glyphicon-user"></i>'.$griditem['author'].'
		                    <i class="glyphicon glyphicon-calendar"></i>'.$griditem['date'].'
		                    <i class="glyphicon glyphicon-eye-open"></i>10000
		                    <a href="single.php?id='.$griditem['id'].'" class="btn btn-primary btn-sm pull-right">More ... </a>
		                </section>
		            </div>
		        </div>
		    </article>'
		    ;
		}
	}

	mysqli_close($con);

}
function getolderposts($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id ASC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $olderposts => $op) {
      	# code...
			echo '<div class="blog-grids row mb-3">
			<div class="col-md-5 blog-grid-left">
			<a href="single.php?id='.$op['id'].'">
			<img src="images/'.$op['photo'].'" class="img-fluid" width="136" height="100" style="padding-top:5px" alt="fantastic cms">
			</a>
			</div>
			<div class="col-md-7 blog-grid-right">

			<h5>
			<a href="single.php?id='.$op['id'].'">'.$op['title'].'</a>
			</h5>
			<div class="sub-meta">
			<span>
			<i class="far fa-clock"></i> '.$op['date'].'</span>
			</div>
			</div>

			</div>';
		}
	}

	mysqli_close($con);
}

//places
function getplaces($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ORDER BY pid DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		$i=0;
		echo '<div class="item active">';
		foreach ($result as $thefour => $fourdata) {
			
      	# code...
		
		
		
		if($i==4)
		{
			 $i=0;
		
			echo '</div><div class="item">';
		}			
		echo '<div class="col-md-3">
					<div class="circular--landscape">
					<img src="images/'.$fourdata['imgone'].'" />
<a href="place.php?id='.$fourdata['pid'].'"><div class="centered">'.$fourdata['pname'].'</div></a>
							
							</div>
					</div>';
				$i++;
		
		
		}
		echo '</div>';
	}

	mysqli_close($con);
}



function getplace($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ORDER BY pid DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		$i=0;
		echo '<div class="item active"> <div class="row">';
		foreach ($result as $thefour => $fourdata) {
			
      	# code...
		
		
		
		if($i==3)
		{
			 $i=0;
		
			echo '</div></div><div class="item"> <div class="row">';
		}			
		echo ' <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="images/'.$fourdata['imgone'].'"></a>
				<a href="place.php?id='.$fourdata['pid'].'"><div class="centered">'.$fourdata['pname'].'</div></a>
              </div> ';
				$i++;
		
		
		}
		echo '</div></div>';
	}

	mysqli_close($con);
}

function getfour($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ORDER BY id DESC LIMIT 6";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		$i=0;
		echo '<div class="item active">';
		foreach ($result as $thefour => $fourdata) {
			
      	# code...
		
		
		
		if($i==3)
		{
			
		
			echo '</div><div class="item">';
		}			
		echo '<div class="col-md-4 news-grid">
					<div class="agile-news-grid-info">
						<div class="news-grid-info-img">
							<a href="single.php?id='.$fourdata['id'].'"><img width="136px" height="300px"  src="images/'.$fourdata['photo'].'" alt="" /></a>
						</div>
						<div class="news-grid-info-bottom">
							<div class="date-grid">
								<div class="admin">
									<a href="#"><i class="fa fa-user" aria-hidden="true"></i> '.$fourdata['author'].'</a>
								</div>
								<div class="time">
									<p><i class="fa fa-calendar" aria-hidden="true"></i>  '.$fourdata['date'].'</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="news-grid-info-bottom-text" style="overflow-wrap: break-word;">
								<a href="single.php?id='.$fourdata['id'].'">'.$fourdata['title'].'</a>
								<p>'.substr($fourdata['content'], 0, 100).'</p>
							</div>
						</div>
					</div>
				</div>';
				$i++;
		
		
		}
		echo '</div>';
	}

	mysqli_close($con);
}

function getonelatest($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ORDER BY id DESC LIMIT 1";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $onelatest => $onedata) {
      	# code...
			echo '<div class="item">
			<div class="wthree-offer-grid" style="background: url(images/'.$onedata['photo'].') no-repeat 0px 0px;background-size: cover;">
				<h4>'.$onedata['title'].'</h4>
				<p></p>
				<div class="click-button">
					<a href="single.php?id='.$onedata['id'].'">Click Here</a>
				</div>
			</div>
		</div>';
		}
	}

	mysqli_close($con);
}
function geteditorschoice($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ORDER BY id DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $edschoice => $choice) {
			#get actual blog post data
			$postid=$choice['blog'];
			$sql="SELECT * FROM blogs WHERE id='$postid'";
			if ($result=mysqli_query($con,$sql)) {
				# code...
				foreach ($result as $posts => $postdata) {
					# code...display actual posts
					echo '<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.php?id='.$postdata['id'].'">
										<img src="blogadmin/images/'.$postdata['photo'].'" class="img-fluid" alt="fantastic cms">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.php?id='.$postdata['id'].'"> '.$postdata['title'].'</a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> '.$postdata['date'].'</span>
									</div>
								</div>
								
							</div>';
				}
			}
      	# code...
		}
	}

	mysqli_close($con);
}
function getcategoryblogs($table,$id){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE category='$id' ORDER BY id DESC LIMIT 10";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Blogs To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $categories => $cdata) {
      		# code...
		$trimstring =0;
		if (strlen($cdata['content']) > 1000) {
$trimstring = substr($cdata['content'], 0, 1000);
} else {
$trimstring = $cdata['content'];
}
			echo '
			<article>
		        <div class="row">
		            <div class="col-sm-6 col-md-4">
		                <figure>
		                   <a href="single.php?id='.$cdata['id'].'">
			<img src="images/'.$cdata['photo'].'">
			</a>
		                </figure>
		            </div>
		            <div class="col-sm-6 col-md-8">
		                <span class="label label-success pull-right"><i class="glyphicon glyphicon-comment"></i>50</span>
		                <h4><a href="single.php?id='.$cdata['id'].'">'.$cdata['title'].'</a></h4>
		                <p style="overflow: hidden;" >'.$trimstring.'</p>
		                <section>
		                    <i class="glyphicon glyphicon-folder-open"></i>'.$cdata['tags'].'
		                    <i class="glyphicon glyphicon-user"></i>'.$cdata['author'].'
		                    <i class="glyphicon glyphicon-calendar"></i>'.$cdata['date'].'
		                    <i class="glyphicon glyphicon-eye-open"></i>10000
		                    <a href="single.php?id='.$cdata['id'].'" class="btn btn-primary btn-sm pull-right">More ... </a>
		                </section>
		            </div>
		        </div>
		    </article>'
		    ;
		}
	}

	mysqli_close($con);

}
function getpopularposts($table){
	require("database/db_connect.php");
	#get most viewed 3 pages from pagehits
	$sql="SELECT * FROM $table ORDER BY count DESC LIMIT 3";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Pots To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $pagehits => $hits) {
      	# code...get actual blog from blogs db
			$storepage=$hits['page'];
			$sql="SELECT * FROM blogs WHERE title='$storepage'";
			if ($result=mysqli_query($con,$sql)) {
				# code...
				foreach ($result as $allblogs => $specificblog) {
					# code...display the results
					echo '<div class="blog-grids row mb-3">
							<div class="col-md-5 blog-grid-left">
								<a href="single.php?id='.$specificblog['id'].'">
									<img src="images/'.$specificblog['photo'].'" class="img-fluid" width="136" height="100" style="padding-top:5px" alt="fantastic cms">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.php?id='.$specificblog['id'].'">'.$specificblog['title'].' </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> '.$specificblog['date'].'</span>
								</div>
							</div>
							
						</div>';
				}
			}
		}
	}

	mysqli_close($con);

}

function relatedposts($table,$tag){
	require("database/db_connect.php");
	#get most viewed 3 pages from pagehits
	$sql="SELECT * FROM $table where tags like '%$tag%'";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Pots To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $blogs => $hits) {
      	# code...get actual blog from blogs db
			
			if ($result=mysqli_query($con,$sql)) {
				# code...
				foreach ($result as $allblogs => $specificblog) {
					# code...display the results
					echo '<div class="blog-grids row mb-3">
							<div class="col-md-5 blog-grid-left">
								<a href="single.php?id='.$specificblog['id'].'">
									<img src="images/'.$specificblog['photo'].'" class="img-fluid" width="136" height="100" style="padding-top:5px" alt="fantastic cms">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.php?id='.$specificblog['id'].'">'.$specificblog['title'].' </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> '.$specificblog['date'].'</span>
								</div>
							</div>
							
						</div>';
				}
			}
		}
	}

	mysqli_close($con);

}



?>
