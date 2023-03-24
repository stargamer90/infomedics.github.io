<?php require_once("..\config\connection.php");
session_start();
?>
<div class="top-bar-area">
            <div class="container">
                <div class="row">
                    <div 	>
                        <div  style="padding-left:-20px;margin-left:10px;width:30px;" >
                            <a href="index.php"><img src="logo.png"  alt="Welfare Foundation" height="80" width=""/></a>
							
                        </div>
						
                    </div>
                    
            </div>
        </div>
        <!-- // Top bar  -->
        <!-- == Navbar  ==-->
        <div class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav id="menuzord" class="menuzord">
                            <ul class="menuzord-menu">
                                <li><a href="index.php" class="active">Home</a>
                                </li>
                                <li><a href="about.php">About</a>
                                </li>
                                <li><a href="#">Events</a>
                                   
                                </li>
                                <li><a href="category.php">NGO - Category</a>
                                    <ul class="dropdown">
                                    <li>
							</li>   
													
                                    </ul>
                                </li>
                         
                                <li><a href="../login/login.php">Donate</a>
								 <ul class="dropdown">
                                     <li><a href="#">Give Donation</a></li>
                                        <li><a href="#">View Donation</a>
                                    </ul>
								</li>
								<li ><a href="#">Post</a>
                                </li>
                              
								 <li><a href="gallery.php">Gallery</a></li>
								 <li><a href="logout.php" alt="logout"><i class="fa fa-power-off"></i></a></li>
								 <li><div class="col-sm-6">
						
						
					</div>  </li>
					
								  
								<li><div class="col-xs-8 text-right">
                        
                                                                
                         
                        </nav>
                      	
                    </div>
				
                    <div class="top-search-input-wrap">
                         <i class="ion-android-close close-icon"></i>
                         <div class="top-search-overlay"></div>
                         <form action="#" method="post">
						 
                             <div class="search-wrap">
                                 <div class="search  pull-right educon-top-search">
                                     <div class="sp_search_input"><?php
									 $sql="select * from ngo ";
							
							$result= mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result))
							{}
									 ?>
                                     <input name="searchword" maxlength="200" class="pull-right" placeholder="Search Here" type="text"/></div>
                                     <input name="task" value="search" type="hidden">
                                 </div>
                             </div>
                         </form>
                     </div><!--/.top-search-input-wrap-->
                </div>
            </div>
        </div>
       <!-- // Navbar  -->