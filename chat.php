<?php 
	include "include/header.php";
	include "config/user.php";
	session_start();
	// $_SESSION['login'] = false; 
	$_SESSION['url'] = $_SERVER['REQUEST_URI']; 
	
 ?>
 <body class="bg-cloud">
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

        <?php 
        	if($user->get_session()){

        	         ?>
			   
 	<div class="bg-light wrappers">
 		
		  	
		<div style=" min-width: 300px; max-width: 300px;height: 90vh; overflow-y: hidden;">
			
	   
		<nav id="sidebar">
	        <div class="sidebar-header text-center" style="height: 9%;">
	            <a class="navbar-brand" href="#">
		           Forum Chat
		          </a>
	        </div>
	        <ul class="list-unstyled components">
	            <!-- <p>Active Users</p> -->

	            <?php 
	            	$row = $user->fetch_data("user");	

	            	foreach ($row as $person) {
	            		$filter_id = array("id"=>$person['id']);
	            		$account = $user->fetch_data_byId("user_info",$filter_id);
	            		if($person["id"] == $_SESSION['id']){
	            			continue;
	            		}else{
	            	
	             ?>
	            <li class="">
	                <a href="chat.php?id=<?php echo $person['id']; ?>">
	                	<div class="d-flex flex-row row-hl justify-content-around">
	                	<div class="profile item-hl" >
							<img class="avatar" style="width: 100px; height: 100px" src="http://demo.powowbox.com/powowbox/avatar_demo/Jane_0001.png" alt="">
						</div>
						<div class="item-hl align-self-center">
							<div class="flex-column row-hl">
								<h6><?php echo $account['first_name'] . " " . $account['last_name'];?></h6>
								<?php $recipient = $account['first_name'] ." " . $account['last_name']; ?>
								<h6 class="text-muted"><?php echo $person['title']; ?></h6>
							</div>
						</div>
						</div>
						
					</a>
	               
	            </li>

	        <?php }
	        	}
	         ?>
	         
	        </ul>
		</nav>
			</div> 
		<div id="content" style="width: 100%; height: 90vh; overflow-y: hidden;">
			<div class="bg-belize text-light px-1 pt-1" style="position: relative; z-index: 999; width: 100%; height: 9%;">

				<?php 
					$get_id = array("id"=>$_GET['id']);
	            	$info = $user->fetch_data_byId("user_info",$get_id);

				 ?>
							<p class="lead pl-5"><?php echo $info['first_name'] . " " . $info['last_name']; ?></p>
						</div>
			<div class="container bg-cloud pt-2" id="mess" style="width: 100%; height:75%; overflow-y: auto;">
				
				<div class="row">
					<div class="col-lg-12 w-100">
						<input type="hidden" id="userid" value="<?php echo $_GET['id']; ?>">
						
						<div id="messages"></div>

					</div>
				</div>
			
			</div>
			<div class="container bg-primary p-0 mx-auto" style="height: 16%; width: 100%;" >
				<div class="d-flex flex-row row-hl h-100">
					<textarea class="w-100 item-hl"  placeholder="Type your message here . . . " id="chat_message"></textarea>
					<button class="btn btn-outline-primary text-light" type="button" id="btn" style="width: 10%;" >Send</button>
				</div>
				
				
			</div>
		</div>
	</div>
		<?php } else{ ?>
		<section id="error_found" class="h-100" style="background: url('https://gamingbolt.com/wp-content/uploads/2017/09/assassins-creed-origins-screenshots.jpg') center center no-repeat;" >
			<div id="dark">
				
					<div class="container-fluid">
						<div class="row m-5">
							<div class="col-lg-12">
								<h1 class="display-4">You must be logged in to continue</h1>
								<p class="lead"><a href="login.php">Click here to login</a></p>
							</div>
							
						</div>
					</div>
				
				
			</div>
			
		</section>
			
		<?php } ?>
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
						$("#mess").scrollTop($("#mess")[0].scrollHeight);
					}
				);
		}

		function timer(){
				setInterval(showMessages, 1000);
			}


		$("#btn").click(function(){
				timer();
				if($("#chat_message").val() == ""){
					alert("Enter your message first");
				}else{
					$.post("send_message.php", {id :  $("#userid").val() , msg: $("#chat_message").val()},
					function(data, status){

						showMessages();
						$('textarea').val('');
					})
				}
				

			});
	});
</script>
<?php 
	include "include/footer.php";
 ?>