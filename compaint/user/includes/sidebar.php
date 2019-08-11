<aside>
          <div id="sidebar"  class="nav-collapse "style='background:#101010;'>
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.php"><img src="assets/img/6.jpg" class="img-circle" width="100" height='100'></a></p>
                   <?php $query=mysqli_query($con,"select fullName from users where email='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?> 
              	  <h5 class="centered"><?php echo htmlentities($row['fullName']);?></h5>
                  <?php } ?>
              	  	
                  <li class="mt">
                      <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Account Setting</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="profile.php">Profile</a></li>
                          <li><a  href="change-password.php">Change Password</a></li>
                        
                      </ul>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Complaint</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="complaint.php">Coplaint Dashboard</a></li>
                          <li><a  href="register-complaint.php">Lodge Complaint</a></li>
                          <li><a  href="complaint-history.php">Complaint History</a></li>
                      </ul>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Blogs</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blog.php">Blog Dashboard</a></li>
						    <li><a  href="newblog.php">NewBlog</a></li>
							  <li><a  href="blog_categories_view.php">Blog Categories</a></li>
                          
                      </ul>
                  </li>
                 
                
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>