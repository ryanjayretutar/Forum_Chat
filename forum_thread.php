<?php 
	include "include/header.php";
	session_start();
	include_once "config/user.php";
	$_SESSION['url'] = $_SERVER['REQUEST_URI']; 
	if(isset($_POST['submit']) && !empty($_POST['comment'])){
		$thread = array("content"=>$_POST['comment'],
						"thread_id"=>$_POST['thread_id'],
						"user_id"=>$_POST['user_id'],
						"status"=>$_POST['status']);
		$user->insert_data("post", $thread);
			
		
	}

	// if(isset($_POST['reply_sub']) && !empty($_POST['reply'])){
	// 	$reply = array("content"=>$_POST['reply'],
	// 					"post_id"=>$_POST['post_id'],
	// 					"user_id"=>$_POST['user_id']);
	// 	$user->insert_data("replies", $reply);
	// }

 ?>
 
<body class="bg-cloud">
	<div class="	">
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
			            <?php include "include/nav.php"; ?>
			           
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

			    		if(isset($_GET['thread_id'])){
			    			$where2 = array("id"=>$_GET['thread_id']);
			    			$thread = $user->fetch_data_byId("thread",$where2);
			    			$where = array("id"=>$thread['user_id']);
			    			$info = $user->fetch_data_byId("user",$where);
			    			
			    			// $data = $user->fetch_data_byId("user_info",$where3);
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
			    				<?php 
			    					$where3 = array("thread_id"=>$_GET['thread_id']);
			    					$post = $user->fetch_data_Many("post", $where3);
			    					foreach($post as $comments){
			    						$postOf = array('id' => $comments['user_id'] );
			    						$post_user =  $user->fetch_data_byId("user", $postOf);
			    						$userInfo = array('user_id' => $comments['user_id']);
			    						$info =  $user->fetch_data_byId("user_info", $postOf);

			    				 ?>
			    				<div>
			    					<div class=" mt-3  bg-top" >
			    						<div class="text-white justify-content-between d-flex pl-3 row-hl">
			    							<small class="text-white justify-content-between d-flex pl-3 row-hl">
				    							<i class="fas fa-calendar item-hl align-self-center pr-2"></i>
				    							<span class="item-hl" style="font-size: 16px;"><?php echo $comments['created_at']; ?></span>
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
											<small><?php echo $info['first_name'] . " " . $info['last_name']; ?></small>
											<small class="text-muted"><?php echo $post_user['title']; ?></small>
										</div>
			    					</div>
			    					<div class="item-hl text-left w-75 px-3 pt-3">
			    						<div class="d-flex flex-column row-hl">
			    							<small class="text-muted d-flex flex-row row-hl">
			    							<i class="fas fa-clock item-hl"></i>
			    							<span class="item-hl" style="font-size: 16px;"><?php echo $comments['created_at']; ?></span>
				    						</small>
				    						<!-- <h3>
				    							<?php 
				    							echo $comments['subject'];
				    						 ?> -->
				    						</h3>
				    						<h6>
				    						<?php 
				    							echo $comments['content'];
				    						 ?>
				    						</h6>	
			    						</div>
			    						<div class="mt-2 d-flex flex-column row-hl">
			    							<div class="item-hl my-3 align-self-end"><button type="button" class="btn btn-sm btn-dark" data-toggle="collapse" data-target="#reply<?php echo $comments['id'];  ?>" aria-expanded="false" aria-controls="reply3"><i class="fa fa-reply">&nbsp;</i>Reply</button></div>
											<div class="item-hl">
												<div class="collapse" id="reply<?php echo $comments['id'];  ?>">
												<!-- <?php 

													$reply = array("post_id"=>$comments['id']);
													$replies = $user->fetch_data_Many("replies", $reply);
													foreach($replies as $rep){
														echo $rep['content'];
													}
												 ?> -->
												  <div class="card card-body border-0">
									
												   	<form action="" method="post">
													  <div class="form-group">					
													  <!-- <input type="hidden" name="post_id" value="<?php echo $comments['id']; ?>">
													   <input type="hidden" name="user_id" value="<?php echo $post_user['id']; ?>">	 -->			   
													    <textarea class="form-control" id="exampleFormControlTextarea1" name="reply" rows="3"></textarea>
													  </div>
													  <div class="form-group float-right">											   
													    <input type="submit" name="reply_sub" class="btn btn-dark" value="Submit">
													  </div>										
													</form>
												  </div>
												</div>
											</div>
			    						</div>
			    					</div>
			    				</div>
			    			</div>	



			    			<?php } ?>					
						</div>
			    </section>

			    <?php 


			    		}else{


			    	

			     ?>


			     <section id="error_found">
			     	<div class="container-fluid mt-5">
			     		<h1 class="display-4">404 Page not found	</h1>
			     	</div>
			     </section>


				<?php 

						}
					if($user->get_session()){
						$log_id = array('id' => $_SESSION['id'] );
						$logged = $user->fetch_data_byId("user", $log_id);
						$log_info = array('user_id' => $_SESSION['id'] );
						$userOf = $user->fetch_data_byId("user_info", $log_info);


				 ?>

					
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
											<small><?php echo $userOf['first_name'] . " " . $userOf['last_name'] ; ?></small>
											<small class="text-muted"><?php echo $logged['title']; ?></small>
										</div>
			    					</div>
			    					<div class="item-hl text-left w-75 p-1 ">

			    						<h6>Post your comments here</h6>
			    						<form action="" method="post" name="com">
			    							<textarea name="comment" id="editor"></textarea>
				    						<div class="mt-2 d-flex justify-content-end flex-row row-hl">
				    							<input type="hidden" name="thread_id" value="<?php echo $_GET['thread_id'] ?>">
				    							<input type="hidden" name="user_id" value="<?php echo $logged['id']; ?>">
				    							<input type="hidden" name="status" value="Comment">
				    							<div class="item-hl">
				    								<input type="submit" onclick="return(submitReg());" id="comments" name="submit" class="btn btn-sm btn-primary" value="Reply">
				    							</div>
				    							
				    						</div>
			    						</form>
			    						
			    					</div>
			    				</div>
									
							</div>
						</div>
					</div>
				</section>


			<?php }else{ ?>

							 <div class="container-fluid">
					<div class="row m-5">
						<div class="col-lg-6 offset-lg-6">
							<h6>You must be logged in to post comments or replies.

							<a href="login.php" style="color: green">Login Here.</a>
							</h6>
						</div>
					</div>
				</div>
			    


			<?php
			} ?>
			    
		</div>
	</div>


<script>

		function submitReg(){
			var form = document.com;
			if(form.comment.value == ""){
				alert("Enter a comment before posting");
				return false;
			}

		}
		

</script>
<?php 
	include "include/footer.php";
 ?>