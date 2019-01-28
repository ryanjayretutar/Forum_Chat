<?php 
	include "include/header.php";
?>
<?php 
	session_start();
	
	
 	include_once "config/user.php";
	if (isset($_POST['submit'])) {
		if ($_POST['password'] == "" || $_POST['username'] == "") {
			unset($_SESSION['flash']);
			$_SESSION['flash'] = 'Username and Password are required'; 
		}else{
				$login = $user->check_login($_POST['username'], $_POST['password']);
				if($login){
					if(isset($_SESSION['url'])){
				   		$url = $_SESSION['url'];
				   		header("location: " . $url);
					}else{
						header("location: forum.php");
					}
					
				} else { 
					unset($_SESSION['flash']);
	    			$_SESSION['flash'] = 'Username or Password is incorrect'; 
				}
			}
		
		}
	if (isset($_SESSION['id'])) {
		if(isset($_SESSION['url'])){
				$url = $_SESSION['url'];
				 header("location: " . $url);
		}else {
			header("location: forum.php");
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
			           <?php include "include/nav.php"; ?>
			           
			          </div>
				</nav>


			    <section id="login">
			    	<div class="container-fluid mt-5">
			    		<div class="row">
			    			<div class="col-lg-12">
			    				
			    					<nav aria-label="breadcrumb">
									  <ol class="breadcrumb">
									    <li class="breadcrumb-item"><a href="#">Home</a></li>
									    <li class="breadcrumb-item active" aria-current="page"><a href="#">Login</a></li>
									  </ol>
									</nav>
			    			</div>
			    		</div>
			    		<h4 class="display-6 px-4">Login</h4>
			    		<div class="border border-dark"></div>
			    	</div>
			    	<div class="container">
			    		<div class="row m-2 ">
			    			<div class="col-lg-10 offset-lg-1" >
			    				<?php
			    				if(isset($_SESSION['flash']) && !empty($_SESSION['flash']))
									{
									echo '<div class="alert alert-warning" role="alert">
										'.$_SESSION['flash'].'
										</div>';
									   		unset($_SESSION['flash']);
									}
									?>
								<div class="thread">
									<div class="mt-3 bg-top m-0 p-2">
				    						Login Form
			    					</div>
			    					<div class="bg-cloud p-2 m-0" style="height: 2rem;">
			    						Enter your account credentials
			    					</div>
			    					<div class="container">
			    						<div class="row m-5">
			    							<div class="col-lg-12">
			    								<div class="container">
				    								<form action="" method="post" id="login">
						    							<div class="form-group row p-2">
														    <label for="username" class="col-sm-2 col-form-label">Username</label>
														    <div class="col-sm-10">
														      <input type="text" class="form-control" id="username" name="username" placeholder="Username or Email" >
														    </div>
														  </div>
														  <hr>
														  <div class="form-group row p-2">
														    <label for="password" class="col-sm-2 col-form-label">Password</label>
														    <div class="col-sm-10">
														      <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
														    </div>
														  </div>
														  <div class="form-group row p-2">
														   
														    <div class="col-sm-1">
														      <input type="checkbox" class="form-control" name="password" id="password">
														    </div>
														     <label for="password" class="col-sm-3 col-form-label">Remember me?</label>
														     <a href="#" class="col-sm-3 offset-sm-5 col-form-label">Forgot Password?</a>

														  </div>
															<div class="form-group row p-2">
															  <input type="submit" name="submit" class="btn btn-lg bg-top col-sm-2 offset-sm-10" value="Submit">
															</div>
				    								</form>
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


