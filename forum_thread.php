<?php 
	include "include/header.php";
	session_start();
	include_once "config/user.php";

 ?>
 
<body class="bg-cloud">
	<div class="bg-light">
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
		 <div id="contents">			 
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
			            <ul class="nav nav-tabs mr-auto">
						   <li class="nav-item ">
			                <a class="nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
			              </li>
			              <li class="nav-item">
			                <a class="nav-link" href="latest.html">Latest Posts</a>
			              </li>
			               <li class="nav-item">
			                <a class="nav-link" href="news.html">Trending</a>
			              </li>
			              <li class="nav-item">
			                <a class="nav-link" href="about.html">My Threads</a>
			              </li>
			              <li class="nav-item">
			                <a class="nav-link" href="contact.html">Contact</a>
			              </li>
						</ul>
						<form class="form-inline my-2 my-lg-0">
							<ul class="nav nav-tabs mr-auto">
						   <li class="nav-item ">
						   
			                <a class="nav-link active" href="index.html">Login<span class="sr-only">(current)</span></a>
			              </li>
			              <li class="nav-item">
			                <a class="nav-link" href="latest.html">Register</a>
			              </li>
			               <li class="nav-item">
			                <a class="nav-link" href="Logout">Logout</a>
			              </li>
			            
						</ul>
					     
					      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
					    </form>
			           
			          </div>
        </nav>
				

			    <section id="thread">
			    	<div class="container-fluid mt-5">
			    		<div class="row">
			    			<div class="col-lg-12">
			    				
			    					<nav aria-label="breadcrumb">
									  <ol class="breadcrumb">
									    <li class="breadcrumb-item"><a href="#">Home</a></li>
									    <li class="breadcrumb-item"><a href="#">Thread</a></li>
									    <li class="breadcrumb-item active" aria-current="page">Post</li>
									  </ol>
									</nav>
			    			</div>
			    		</div>

			    		<?php 
			    			$where2 = array("id"=>$_GET['thread_id']);
			    			$thread = $user->fetch_data_byId("thread",$where2);
			    			$where = array("id"=>$thread['user_id']);
			    			$info = $user->fetch_data_byId("user",$where);
			    			$where3 = array("user_id"=>$thread['user_id']);
			    			$data = $user->fetch_data_byId("user_info",$where3);
			    			
			    		 ?>
			    		<div class="row m-5">
			    			<div class="col-lg-12">
			    				<h4 class="display-6"><?php echo $thread['subject']; ?></h4>
			    				<div class="d-flex flex-row row-hl">
			    					<i class="fas fa-user item-hl pr-3"></i>
			    					<span class="pr-3 item-hl"><?php echo $info['username']; ?></span>
			    					<i class="fas fa-clock pr-3 item-hl"></i>
			    					<span class="item-hl pr-3"><?php echo $thread['created_at']; ?></span>
			    					<i class="fas fa-comments pr-3 item-hl"></i>
			    					<span>0</span>
			    				</div>
			    				<div class="border border-dark"></div>
			    				<div>
			    					<div class=" mt-3  bg-top" >
			    						<div class="text-white justify-content-between d-flex pl-3 row-hl">
			    							<small class="text-white justify-content-between d-flex pl-3 row-hl">
				    							<i class="fas fa-calendar item-hl align-self-center pr-2"></i>
				    							<span class="item-hl" style="font-size: 16px;">Jan. 10, 2019</span>
			    							</small>
			    							<span class="item-hl" style="font-size: 16px;">#1</span>
			    						</div>
			    					</div>
			    					<div class="d-flex  flex-row justify-content-around row-hl thread">
			    					<div class="item-hl w-25 p-3 border-right border-3">
			    						<div class="d-flex flex-row row-hl justify-content-center">
											<div class="profiles item-hl">
												<img class="avatar" src="http://demo.powowbox.com/powowbox/avatar_demo/Jane_0001.png" alt="">
											</div>											
				    					</div>
				    					<div class="d-flex flex-column align-items-center row-hl">
											<small><?php echo $data['first_name'] . " " . $data['last_name']; ?></small>
											<small class="text-muted">Thread Creator</small>
										</div>
			    					</div>
			    					<div class="item-hl text-left w-75 px-3 pt-3">
			    						<div class="d-flex flex-column row-hl">
			    							<small class="text-muted d-flex flex-row row-hl">
			    							<i class="fas fa-clock item-hl"></i>
			    							<span class="item-hl" style="font-size: 16px;">Jan. 10, 2019</span>
				    						</small>
				    						<h6>
				    							<?php $post = array("thread_id"=> $_GET['thread_id']);
				    							  $list = $user->fetch_data_byId("post", $post);
				    							  echo $list['content'];
				    						 ?>
				    						</h6>
				    						
				    						
			    						</div>
			    						
			    						<div class="mt-2 d-flex justify-content-between flex-row row-hl">
			    							<div class="item-hl">
			    								<i class="fas fa-warning"></i>
			    								<span>Report</span>
			    							</div>
			    							<div class="item-hl">
			    								<i class="fas fa-comments"></i>
			    								<span>Reply</span>
			    							</div>
			    							
			    						</div>
			    						
			    					</div>
			    			</div>

			    				</div>
			    			<div>
			    				<div class=" mt-3  bg-top" >
			    					<div class="text-white justify-content-between d-flex pl-3 row-hl">
			    							<small class="text-white justify-content-between d-flex pl-3 row-hl">
			    							<i class="fas fa-calendar item-hl align-self-center pr-2"></i>
			    							<span class="item-hl" style="font-size: 16px;">Jan. 10, 2019</span>

			    						</small>

			    							<span class="item-hl" style="font-size: 16px;">#1</span>
			    					</div>
			    				</div>
			    				<div class="d-flex  flex-row justify-content-around row-hl thread">
			    					<div class="item-hl w-25 p-3">
			    						<div class="d-flex flex-row row-hl justify-content-center">
											<div class="profiles item-hl">
												<img class="avatar" src="http://demo.powowbox.com/powowbox/avatar_demo/Jane_0001.png" alt="">
											</div>											
				    					</div>
				    					<div class="d-flex flex-column align-items-center row-hl">
											<small>John Doe Smith Jr.</small>
											<small class="text-muted">Moderator</small>
										</div>
			    					</div>
			    					<div class="item-hl text-left w-75 p-3">
			    						<div class="d-flex flex-column row-hl">
				    						<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus laudantium labore fugiat eligendi, numquam veritatis ut tempore quibusdam unde a! Ea quos, officia minima, veniam ex quo nihil reprehenderit non.</h6>

				    					</div>
				    					<div class="mt-2 d-flex justify-content-between  flex-row row-hl ">
			    							<div class="item-hl">
			    								<i class="fas fa-warning"></i>
			    								<span>Report</span>
			    							</div>
			    							<div class="item-hl">
			    								<i class="fas fa-comments"></i>
			    								<span>Reply</span>
			    							</div>
			    							
			    						</div>



			    					</div>
			    			</div>
			    			</div>	
			    			
			    			<div class="d-flex  flex-row justify-content-around row-hl mt-3 thread">
			    					<div class="item-hl w-25 p-3">
			    						<div class="d-flex flex-row row-hl justify-content-center">
											<div class="profiles item-hl">
												<img class="avatar" src="http://demo.powowbox.com/powowbox/avatar_demo/Jane_0001.png" alt="">
											</div>											
				    					</div>
				    					<div class="d-flex flex-column align-items-center row-hl">
											<small>John Doe Smith Jr.</small>
											<small class="text-muted">Moderator</small>
										</div>
			    					</div>
			    					<div class="item-hl text-left w-75 p-3">
			    						<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus laudantium labore fugiat eligendi, numquam veritatis ut tempore quibusdam unde a! Ea quos, officia minima, veniam ex quo nihil reprehenderit non.</h6>
			    					</div>
			    			</div>
			    			<div class="d-flex  flex-row justify-content-around row-hl mt-3 thread">
			    					<div class="item-hl w-25 p-3">
			    						<div class="d-flex flex-row row-hl justify-content-center">
											<div class="profiles item-hl">
												<img class="avatar" src="http://demo.powowbox.com/powowbox/avatar_demo/Jane_0001.png" alt="">
											</div>											
				    					</div>
				    					<div class="d-flex flex-column align-items-center row-hl">
											<small>John Doe Smith Jr.</small>
											<small class="text-muted">Moderator</small>
										</div>
			    					</div>
			    					<div class="item-hl text-left w-75 p-3">
			    						<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus laudantium labore fugiat eligendi, numquam veritatis ut tempore quibusdam unde a! Ea quos, officia minima, veniam ex quo nihil reprehenderit non.</h6>

			    					</div>
			    			</div>
			    			<div class="d-flex  flex-row justify-content-around row-hl mt-3 thread">
			    					<div class="item-hl w-25 p-3">
			    						<div class="d-flex flex-row row-hl justify-content-center">
											<div class="profiles item-hl">
												<img class="avatar" src="http://demo.powowbox.com/powowbox/avatar_demo/Jane_0001.png" alt="">
											</div>											
				    					</div>
				    					<div class="d-flex flex-column align-items-center row-hl">
											<small>John Doe Smith Jr.</small>
											<small class="text-muted">Moderator</small>
										</div>
			    					</div>
			    					<div class="item-hl text-left w-75 p-3">
			    						<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus laudantium labore fugiat eligendi, numquam veritatis ut tempore quibusdam unde a! Ea quos, officia minima, veniam ex quo nihil reprehenderit non.</h6>
			    					</div>
			    			</div>




									
						</div>
			    </section>

			    <section id="comments" >
			   		<div class="container-fluid mt-5">
			    		<div class="row m-5">
			    			<div class="col-lg-12">
			    				<div class="d-flex  flex-row justify-content-around row-hl mt-3 thread">
			    					<div class="item-hl w-25 p-3 border-right border-3 ">
			    						<div class="d-flex flex-row row-hl justify-content-center">
											<div class="profiles item-hl">
												<img class="avatar" src="http://demo.powowbox.com/powowbox/avatar_demo/Jane_0001.png" alt="">
											</div>											
				    					</div>
				    					<div class="d-flex flex-column align-items-center row-hl">
											<small>John Doe Smith Jr.</small>
											<small class="text-muted">Moderator</small>
										</div>
			    					</div>
			    					<div class="item-hl text-left w-75 p-1 ">
			    						<h6>Post your comments here</h6>
			    						<textarea name="" id="editor"></textarea>
			    						<div class="mt-2 d-flex justify-content-end flex-row row-hl">
			    							
			    							<div class="item-hl">
			    								<button type="button" class="btn btn-sm btn-primary"><i class="fas fa-comments"></i>
			    								<span>Reply</span></button>
			    							</div>
			    							
			    						</div>
			    					</div>
			    				</div>
									
							</div>
						</div>
					</div>
				</section>
			    
		</div>
	</div>


<?php 
	include "include/footer.php";
 ?>