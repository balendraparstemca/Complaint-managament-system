<?php

function getbottomsliderposts($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE posted='publish' ORDER BY id DESC LIMIT 3";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $sliderposts => $slideritem) {
      	# code...fetch actual category from categories table
			$category_id=$slideritem['category'];
			$sql="SELECT * FROM blog_categories WHERE id='$category_id'";
			if ($result=mysqli_query($con,$sql))
			{
				foreach ($result as $results => $actualcategory) {
					$ctgry=$actualcategory['name'];
				}
			}
				#code...display the results
			echo '
				<div class="col-md-4 news-grid">
					<div class="agile-news-grid-info">
						<div class="news-grid-info-img">
							<a href="single.php?id='.$slideritem['id'].'"><img src="blogadmin/images/'.$slideritem['photo'].'" alt="" /></a>
						</div>
						<div class="news-grid-info-bottom">
							<div class="date-grid">
								<div class="admin">
									<a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a>
								</div>
								<div class="time">
									<p><i class="fa fa-calendar" aria-hidden="true"></i> May 09,2016</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="news-grid-info-bottom-text">
								<a href="single.html">Quisque gravida, nunc eu interdum porta</a>
								<p>Aliquam erat volutpat. Duis vulputate tempus laoreet. Integer viverra eleifend neque, eget dictum lectus. Quisque eu tempor dolor.</p>
							</div>
						</div>
					</div>
				</div>
				';
		}
	}

	mysqli_close($con);
}
?>