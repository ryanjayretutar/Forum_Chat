<?php 
	include "include/header.php";
 ?>

 <?php 

 	include_once "config/user.php";
 	extract($_POST);
 	if(isset($_POST['submit'])){
		$credentials = array("username"=>$_POST['username'],
						"password"=>md5($_POST['password']),
						"email"=>$_POST['email'],
						"title"=>"newbie",
						"status"=>"inactive");
		if($user->check_duplicate($username, $email)){
			$user->insert_data("user", $credentials);
			$info = array("user_id"=>$user->get_last_id(),
							"first_name"=>$_POST['firstName'],
							"last_name"=>$_POST['lastName'],
							"birth_date"=>$_POST['birth_date']);
			$user->insert_data("user_info", $info);
		}
			
	}

  ?>
 
<body class="bg-cloud">
	<div class="bg-light">
		 <div id="contents">
		 	
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
			    <nav class="navbar navbar-expand-lg navbar-dark bg-top">
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

				<form action="" method="post" id="register">
			    <section class="register">
			    	<div class="container-fluid mt-5">
			    		<div class="row">
			    			<div class="col-lg-12">
			    				
			    					<nav aria-label="breadcrumb">
									  <ol class="breadcrumb">
									    <li class="breadcrumb-item"><a href="#">Home</a></li>
									    <li class="breadcrumb-item active" aria-current="page"><a href="#">Registration</a></li>
									  </ol>
									</nav>
			    			</div>
			    		</div>
			    		<h4 class="display-6 px-4">Registration</h4>
			    		<div class="border border-dark"></div>
			    	</div>
			    	<div class="container-fluid">
			    		<div class="row m-2 ">
			    			<div class="col-lg-12">
								<div class="thread">
									<div class="mt-3 bg-top m-0 p-2">
				    						Registration Form
			    					</div>
			    					<div class="bg-cloud p-2 m-0" style="height: 2rem;">
			    						Fill out all the required information
			    					</div>
			    					<div class="container">
			    						<div class="row mx-5 mt-5">
			    							<div class="col-lg-12">
			    								
					    							<div class="form-group row p-2">
													    <label for="username control-label" class="col-sm-2 col-form-label">Username</label>
													    <div class="col-sm-6">
													      <input type="text" class="form-control" id="username" name="username" >
													    </div>
													  </div>
													  <hr>
													  <div class="form-group row p-2">
													    <label for="password control-label" class="col-sm-2 col-form-label">Password</label>
													    <div class="col-sm-6">
													      <input type="password" class="form-control" name="password" id="password">
													    </div>
													  </div>
													  <div class="form-group row p-2">
													    <label for="confirmPass control-label" class="col-sm-2 col-form-label">Confirm Password</label>
													    <div class="col-sm-6">
													      <input type="password" class="form-control" id="confirmPass" name="confirmPass">
													    </div>
													  </div>
														  <hr>
													  <div class="form-group row p-2">
													    <label for="email" class="col-sm-2 col-form-label control-label">Email Address</label>
													    <div class="col-sm-6">
													      <input type="email" class="form-control" id="email" name="email">
													    </div>
													  </div>
													  <div class="form-group row p-2">
													    <label for="confirmEmail" class="col-sm-2 col-form-label control-label">Confirm Email</label>
													    <div class="col-sm-6">
													      <input type="email" class="form-control" id="confirmEmail" name="confirmEmail">
													    </div>
													  </div>

			    							
			    							</div>
			    							
			    						</div>
			    					</div>
			    					<div class="bg-cloud p-2 m-0" style="height: 2rem;">
			    						Required Personal Information
			    					</div>
									<div class="container">
			    						<div class="row mx-5 mt-5">
			    							<div class="col-lg-12">
			    								
					    							<div class="form-group row p-2">
													    <label for="firstName" class="col-sm-2 col-form-label control-label">First Name</label>
													    <div class="col-sm-6">
													      <input type="text" class="form-control" id="firstName" name="firstName">
													      
													    </div>
													  </div>
													  <div class="form-group row p-2">
													    <label for="lastName" class="col-sm-2 col-form-label control-label">Last Name</label>
													    <div class="col-sm-6">
													      <input type="text" class="form-control" id="lastName" name="lastName">
													    </div>
													  </div>
													  <hr>
													  <div class="form-group row p-2">
													    <label for="date" class="col-sm-2 col-form-label control-label">Birthdate</label>
													    <div class="col-sm-6">
										                        <input type="date" id="demo-desktop" name="birth_date" class="form-control" data-input-style="box" placeholder="Please Select..." />
													    </div>
													  </div>
													 

			    								
			    							</div>
			    							
			    						</div>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    		<div class="row m-2 ">
			    			<div class="col-lg-12">
								<div class="thread">
									<div class="mt-3 bg-top m-0 p-2">
				    						Registration Form
			    					</div>
			    					<div class="bg-cloud p-2 m-0" style="height: 2rem;">
			    						Fill out all the required information
			    					</div>
			    					<div class="container">
			    						<div class="row mx-5 mt-5">
			    							<div class="col-lg-12">
			    								<p class="lead">In order to proceed, you must agree to the following rules: </p>
			    								<div class="termsx">
			    									<h5>Forum Rules</h5>

													<p>Registration to this forum is free! We do insist that you abide by the rules and policies detailed below. If you agree to the terms, please check the 'I agree' checkbox and press the 'Complete Registration' button below. If you would like to cancel the registration, click here to return to the forums index.</p>

													<p>Although the administrators and moderators of theRPGSite will attempt to keep all objectionable messages off this site, it is impossible for us to review all messages. All messages express the views of the author, and neither the owners of theRPGSite, nor vBulletin Solutions, Inc. (developers of vBulletin) will be held responsible for the content of any message.</p>

													<p>By agreeing to these rules, you warrant that you will not post any messages that are obscene, vulgar, sexually-oriented, hateful, threatening, or otherwise violative of any laws.</p>

													<p>The owners of theRPGSite reserve the right to remove, edit, move or close any content item for any reason.<p>


			    								</div>
			    								<div class="mt-3">
								                    <label for="cb_rules_agree" class="control-label"><input type="checkbox" name="agree" id="cb_rules_agree" tabindex="1" value="1"> <strong>I have read, and agree to abide by the theRPGSite rules.</strong></label>
								                </div>	
								                <div class="form-group mt-2">
						    						<div class="row">
						    							<div class="offset-lg-8 col-lg-4 form-inline">
									    					<input type="submit" name="submit" class="btn btn-primary form-control mr-2">
															<button type="button" class="btn btn-primary form-control" data-toggle="button" aria-pressed="false" autocomplete="off"><i class="far fa-reset"></i>
															  Reset Fields
															</button>
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
			 	</form>


		 </div>
	</div>
<?php 
	include "include/footer.php";
 ?>


