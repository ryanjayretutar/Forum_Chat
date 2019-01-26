<?php 
	include "include/header.php";
	session_start(); 
	$_SESSION['url'] = $_SERVER['REQUEST_URI']; 
	include_once "config/user.php";
	$user->session_check();
	if(isset($_POST['submit'])){
		$thread = array("subject"=>$_POST['subject'],
						"category"=>$_POST['category'],
						"user_id"=>$_SESSION['id']);
		$user->insert_data("thread", $thread);
		$post = array("content"=>$_POST['content'],
						"user_id"=>$_SESSION['id'],
						"thread_id"=>$user->get_last_id(),
						"status"=>"Waiting for Approval");
		$user->insert_data("post", $post);


		
		
	}
 ?>
 
<body class="bg-cloud">
	<div class="bg-light">
		 <div id="contents">
			 <nav class="navbar navbar-expand-lg navbar-light bg-light" >
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
			           
			          </div>        </nav>
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

			    <section id="create_post">
			    	<div class="container-fluid mt-5">
			    		<div class="row">
			    			<div class="col-lg-12">
			    				
			    					<nav aria-label="breadcrumb">
									  <ol class="breadcrumb">
									    <li class="breadcrumb-item"><a href="#">Home</a></li>
									    <li class="breadcrumb-item"><a href="#">Thread</a></li>
									    <li class="breadcrumb-item active" aria-current="page">New</li>
									  </ol>
									</nav>
			    			</div>
			    		</div>
			    		<div class="row m-2 thread">
			    			<div class="col-lg-9">
			    				<h3 class="m-2">Create New Thread</h3>
			    				<form action="" class="p-5" method="post">
			    					<div class="form-group ">
			    						<label for=""><h5>Select Thread Category</h5></label>
			    						<div class="row">
			    					  <select class="form-control col-lg-6" name="category">
			    					  	<?php 

			    							$category = $user->fetch_data("category");
			    							foreach($category as $row){
			    						 ?>
									      <option value="<?php echo $row['category_name']; ?>"><?php echo $row['category_name']; ?></option>
									     <?php } ?>
									    </select>
			    						</div>
			    					</div>
			    					<div class="form-group mt-2">
			    						<label for=""><h5>Title</h5></label>
			    						<div class="row">
			    							 <input type="text" class="form-control col-lg-6" id="exampleInputEmail1" name="subject" aria-describedby="emailHelp" placeholder="Enter title">
			    						</div>
			    					</div>
			    					<div class="form-group mt-2">

			    						<div class="row">	
			    							<div class="col-lg-12">
			    								<textarea class="form-control" id="editor" aria-describedby="emailHelp" placeholder="Enter initial content" name="content"></textarea>
			    							</div>
			    							 
			    						</div>
			    					</div>
			    					<div class="form-group mt-2">
										
			    						<div class="row">
			    							<div class="offset-lg-3 col-lg-6">
			    								<label for=""><h5>Select Tags</h5></label>
			    								<select class="selectpicker form-control" multiple data-live-search="true">
												  <option>RPG</option>
												  <option>Gaming</option>
												  <option>Strategy</option>
												</select>
			    							</div>
			    							 
			    						</div>
			    					</div>
			    					<div class="form-group mt-5">
			    						<div class="row">
			    							<div class="offset-lg-8 col-lg-4 form-inline">
						    					<input type="submit" name="submit" class="btn btn-primary form-control mr-2" value='Submit'>
												<button type="button" class="btn btn-primary form-control" data-toggle="button" aria-pressed="false" autocomplete="off"><i class="far fa-eye"></i>
												  Preview
												</button>
											</div>
										</div>
			    					</div>
			    				</form>
			    			</div>
			    			<div class="col-lg-3 sidebar mt-5">
			    				
					               <div class="container-fluid">
					                <div class="row text-justify">
					                  <div class="col-md-12">
					                    <div class="card">
					                    <div class="card-header bg-dark text-light">
					                      Featured
					                    </div>
					                    <div class="p-2">
					                      <img class="card-img-top" src="assets/images/dark.jpg" alt="Card image cap">

					                    </div>
					                  </div>
					                  </div>
					                </div>
					                <div class="row text-justify my-5">
					                  <div class="col-md-12">
					                    <div class="card">
					                    <div class="card-header bg-dark text-light">
					                      Featured
					                    </div>
					                    <div class="p-2">
					                      <div class="row">
					                        <div class="col-md-6">
					                          <img class="card-img-top h-100" src="assets/images/dark.jpg" alt="Card image cap">
					                        </div>

					                        <div class="col-md-6">
					                          <div class="card-body">
					                            <h6 class="card-title">Special title treatment</h6>
					                            
					                          </div>

					                        </div>
					                      </div>
					                      
					                      
					                      <hr>
					                      <div class="row">
					                        <div class="col-md-6">
					                          <img class="card-img-top h-100" src="assets/images/dark.jpg" alt="Card image cap">
					                        </div>

					                        <div class="col-md-6">
					                          <div class="card-body">
					                            <h6 class="card-title">Special title treatment</h6>
					                            
					                          </div>

					                        </div>
					                      </div>
					                      <hr>
					                      <div class="row">
					                        <div class="col-md-6">
					                          <img class="card-img-top h-100" src="assets/images/dark.jpg" alt="Card image cap">
					                        </div>

					                        <div class="col-md-6">
					                          <div class="card-body">
					                            <h6 class="card-title">Special title treatment</h6>
					                            
					                          </div>

					                        </div>
					                      </div>
					                    </div>
					                  </div>
					                  </div>
					                </div>

					                <div class="row text-justify my-5 sidegal">
					                  <div class="col-md-12">
					                    <div class="card">
					                    <div class="card-header bg-dark text-light">
					                      Featured
					                    </div>
					                    <div class="p-1">
					                      <div class="row">
					                        <div class="col-md-6">
					                          <img class="card-img-top h-100" src="assets/images/dark.jpg" alt="Card image cap">
					                        </div>

					                        <div class="col-md-6">                         
					                           <img class="card-img-top h-100" src="assets/images/dark.jpg" alt="Card image cap">
					                        </div>
					                      </div>
					                      
					                      
					                      <hr>
					                      <div class="row">
					                        <div class="col-md-6">
					                          <img class="card-img-top h-100" src="assets/images/dark.jpg" alt="Card image cap">
					                        </div>

					                        <div class="col-md-6">
					                            <img class="card-img-top h-100" src="assets/images/dark.jpg" alt="Card image cap">
					                        </div>
					                      </div>
					                      <hr>
					                      <div class="row">
					                        <div class="col-md-6">
					                          <img class="card-img-top h-100" src="assets/images/dark.jpg" alt="Card image cap">
					                        </div>

					                        <div class="col-md-6">
					                           <img class="card-img-top h-100" src="assets/images/dark.jpg" alt="Card image cap">
					                        </div>
					                      </div>
					                    </div>
					                  </div>
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