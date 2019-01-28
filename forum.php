<?php 
	include "include/header.php";
	include "config/user.php";
	session_start();
	$_SESSION['url'] = $_SERVER['REQUEST_URI']; 
	
 ?>
  <body class="bg-cloud">
      
      <!-- Navigation Bar -->


     <!--  <div class="wrapper">
        <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-12"> -->
       

        <div class="bg-light">
    <!-- Sidebar -->
		  <!--   <nav id="sidebar">
		        <div class="sidebar-header text-center">
		        	
		            <a class="navbar-brand" href="#">
			            RP
			            <img src="assets/images/g-logo.jpg" width="30" height="30" class="d-inline-block" alt="" >
			            ame
			          </a>

		        </div>

		        <ul class="list-unstyled components">
		            <p>Game Discussions</p>
		            <li class="active">
		                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Latest Thread</a>
		                <ul class="collapse list-unstyled" id="homeSubmenu">
		                    <li>
		                        <a href="#">Home 1</a>
		                    </li>
		                    <li>
		                        <a href="#">Home 2</a>
		                    </li>
		                    <li>
		                        <a href="#">Home 3</a>
		                    </li>
		                </ul>
		            </li>
		            <li>
		                <a href="#">Forum</a>
		            </li>
		            <li>
		                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
		                <ul class="collapse list-unstyled" id="pageSubmenu">
		                    <li>
		                        <a href="#">Page 1</a>
		                    </li>
		                    <li>
		                        <a href="#">Page 2</a>
		                    </li>
		                    <li>
		                        <a href="#">Page 3</a>
		                    </li>
		                </ul>
		            </li>
		            <li>
		                <a href="#">Latest News</a>
		            </li>
		            <li>
		                <a href="#">Trending</a>
		            </li>
		        </ul>
		    </nav> -->
			<section id="cover">
			      <div id="cover-caption">
			        <div class="container">
			          <div class="row">
			            <div class="col-md-12">

			                <h1 class="display-4"> Welcome to RPGames Forum</h1>
			                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores molestias et eos architecto autem, earum temporibus! Maxime officia consequatur quod alias, laboriosam distinctio sed cumque optio ex non earum dicta.</p>              
			            </div>
			          </div>
			        </div>
			      </div>
			    </section>
		    <div id="content">			 
			    <nav class="navbar navbar-expand-lg navbar-dark bg-top" >
          <a class="navbar-brand" href="#">
            RP
            <img src="assets/images/g-logo.jpg" width="30" height="30" class="d-inline-block" alt="" >
            ame
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
			             <?php include "include/nav.php"; ?>
			           
			          </div>
        </nav>
				

			    <section id="main">

			    	<div class="container-fluid mt-5">
			    		<div class="row">
			    			<div class="col-lg-12">
			    				<h1 class="display-7">Gaming Discussions</h1>
			    				<p class="text-muted small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi omnis totam optio nulla ducimus architecto eveniet consequuntur, similique aperiam, fugit suscipit vel rerum. Perspiciatis, corrupti distinctio, illo cum consectetur porro.</p>


			    			</div>
			    		</div>
			    		<div class="row">
			    			<div class="col-lg-12">
			    				<div class="clearfix">
			    					<ul class="nav nav-tabs nav-fill w-75 mr-auto float-left" id="myTab" role="tablist">
									  <li class="nav-item">
									    <a class="nav-link bg-dark text-light active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Recent</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Popular</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Latest News</a>
									  </li>
									</ul>
									 <a class="btn bg-top text-white float-right" href="post_new.php" type="button">Post Thread</a>
			    				</div>
								
								
								

								<div class="tab-content cont" id="myTabContent">
								  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
										<div class="d-flex flex-row justify-content-start row-hl">
											<div class="p-4 item-hl w-50"><b>Topic/Subject</b></div>
											<div class="p-4 item-hl" style="width: 16%;"><b>Posted By</b></div>
											<div class="p-4 item-hl" style="width: 16%;"><b>Latest Reply</b></div>	
											<div class="p-4 item-hl" style="width: 16%;"><b>Comments</b></div>

										</div>

										<?php 
											$thread = $user->fetch_data("thread");
											foreach($thread as $row){

										 ?>
										<div class="d-flex p-3 flex-row justify-content-around row-hl">
											<div class="p-2 item-hl w-50">
												<div class="flex-row">
													<h5 class="item-hl">

														<a href="forum_thread.php?thread_id=<?php echo $row['id'];?>" ><?php echo $row['subject']; ?></a>

														</h5>
													<h6 class="text-muted">2 days ago</h6>
												</div>						
													
											</div>										
											<div class="p-2  item-hl" style="width: 16%;">
												<div class="d-flex flex-row justify-content-start">
													<div class="profile">
														<img class="avatar" src="http://demo.powowbox.com/powowbox/avatar_demo/Jane_0001.png" alt="">
													</div>
													<div class="flex-column row-hl">
														<?php
															$where = array("user_id"=>$row['user_id']); 
															$creator = $user->fetch_data_byId("user_info", $where);
														 ?>
														
														<small class="item-hl"><?php echo $creator['first_name'] . " ". $creator['last_name'] ?></small><br>
														<!-- <small class="text-muted item-hl"><?php echo $creator['title'] ?></small> -->
													</div>
													
												</div>											
											</div>
											<div class="p-2 item-hl" style="width: 16%;">
												<div class="d-flex flex-row justify-content-start">
													<div class="profile" >
														<img class="avatar" src="http://demo.powowbox.com/powowbox/avatar_demo/Jane_0001.png" alt="">
													</div>
													<div class="flex-column row-hl">
														<small>John Doe Smith Jr.</small>
														<small class="text-muted">Moderator</small>
													</div>

												</div>
											</div>
											<div class="p-2 item-hl" style="width: 16%;">
												<div class="flex-column row-hl">
													<div class="flex-row row-hl item-hl">
														<i class="fas fa-comments pr-2 item-hl"></i><span class="item-hl">635</span>
													</div>
													<div class="flex-row row-hl item-hl">
														<i class="far fa-eye pr-2 item-hl"></i><span class="item-hl">1,152</span>
													</div>
													
												</div>
													
											</div>
										</div>

										<?php 

											}
										 ?>

										
										
								  </div>
								  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
								  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
								</div
			    				
			    			</div>
			    		</div>
			    	</div>
			    	
			    </section>



			</div>


		</div>

<?php 
	include "include/footer.php";
 ?>