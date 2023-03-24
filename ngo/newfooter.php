									 <!--footer section start-->
										
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="home.php"> <span id="logo"></span> 
					<!--<img id="logo" src="LOGO.jpeg"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="logo.png"><img src="logo.png" height="80" width="80"></a>
									  <a href="home.php"><span class=" name-caret">Welfare Foundation</span></a>
									 <p>Administrator</p>
									<ul>
									<li><a class="tooltips" href="profile.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										
										<li><a class="tooltips" href="logout.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										
									
									 <li id="menu-academico" ><a href="donation.php"><i class="fa fa-money"></i> <span>Donation</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 
									 </li>
							<li id="menu-academico" ><a href="events.php"><i class="fa fa-spinner"></i> <span>Events</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 </li>
							 <li id="menu-academico" ><a href="post.php"><i class="fa fa-comment"></i> <span>Post</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 </li>
							<li id="menu-academico" ><a href="gallery.php"><i class="fa fa-camera-retro"></i> <span>Gallery</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 </li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>