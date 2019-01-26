<?php 
	include "include/header.php";
	include "config/user.php";
	session_start();
	
 ?>
 <body class="bg-cloud">
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
 	<div class="bg-light wrappers">
 		
		  	
		    
		<nav id="sidebar">
	        <div class="sidebar-header text-center">
	            <a class="navbar-brand" href="#">
		           Forum Chat
		          </a>
	        </div>
	        <ul class="list-unstyled components">
	            <!-- <p>Active Users</p> -->
	            <li class="">
	                <a href="chat.php?id=1">
	                	<div class="d-flex flex-row row-hl justify-content-around">
	                	<div class="profile item-hl" >
							<img class="avatar" style="width: 100px; height: 100px" src="http://demo.powowbox.com/powowbox/avatar_demo/Jane_0001.png" alt="">
						</div>
						<div class="item-hl align-self-center">
							<div class="flex-column row-hl">
								<h6>John Doe Jr.</h6>
								<h6 class="text-muted">Moderator</h6>
							</div>
						</div>
						</div>
						
					</a>
	               
	            </li>
	            <li>
	                <a href="chat.php?id=2">
	                	<div class="d-flex flex-row row-hl justify-content-around">
	                	<div class="profile item-hl" >
							<img class="avatar" style="width: 100px; height: 100px" src="http://demo.powowbox.com/powowbox/avatar_demo/Jane_0001.png" alt="">
						</div>
						<div class="item-hl align-self-center">
							<div class="flex-column row-hl">
								<h6>John Doe Jr.</h6>
								<h6 class="text-muted">Moderator</h6>
							</div>
						</div>
						</div>
						
					</a>
	            </li>
	            <li>
	                 <a href="#homeSubmenu">
	                	<div class="d-flex flex-row row-hl justify-content-around">
	                	<div class="profile item-hl" >
							<img class="avatar" style="width: 100px; height: 100px" src="http://demo.powowbox.com/powowbox/avatar_demo/Jane_0001.png" alt="">
						</div>
						<div class="item-hl align-self-center">
							<div class="flex-column row-hl">
								<h6>John Doe Jr.</h6>
								<h6 class="text-muted">Moderator</h6>
							</div>
						</div>
						</div>
						
					</a>
	            </li>
	            <li>
	                 <a href="#homeSubmenu">
	                	<div class="d-flex flex-row row-hl justify-content-around">
	                	<div class="profile item-hl" >
							<img class="avatar" style="width: 100px; height: 100px" src="http://demo.powowbox.com/powowbox/avatar_demo/Jane_0001.png" alt="">
						</div>
						<div class="item-hl align-self-center">
							<div class="flex-column row-hl">
								<h6>John Doe Jr.</h6>
								<h6 class="text-muted">Moderator</h6>
							</div>
						</div>
						</div>
						
					</a>
	            </li>
	            <li>
	                 <a href="#homeSubmenu">
	                	<div class="d-flex flex-row row-hl justify-content-around">
	                	<div class="profile item-hl" >
							<img class="avatar" style="width: 100px; height: 100px" src="http://demo.powowbox.com/powowbox/avatar_demo/Jane_0001.png" alt="">
						</div>
						<div class="item-hl align-self-center">
							<div class="flex-column row-hl">
								<h6>John Doe Jr.</h6>
								<h6 class="text-muted">Moderator</h6>
							</div>
						</div>
						</div>
						
					</a>
	            </li>
	        </ul>
		</nav>
		<div id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<input type="hidden" id="userid" value="<?php echo $_GET['id']; ?>">
						<div id="messages"></div>
					</div>
				</div>
			</div>
	</div>
<script>
	$(document).ready(function(){
		showMessages();
		function showMessages(){
			
			$.post(
					"fetch_messages.php",
					{
						id: $("#userid").val()
					},
					function(data){
						$("#messages").html(data);
					}
				);
		}
	});
</script>
<?php 
	include "include/footer.php";
 ?>