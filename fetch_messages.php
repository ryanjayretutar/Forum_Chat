<?php 

	include "config/user.php";
	session_start();
	$criteria1 = array("to_user_id"=>$_POST['id'],
					"from_user_id"=>$_SESSION['id']);
	$criteria2 = array("to_user_id"=>$_SESSION['id'],
					"from_user_id"=>$_POST['id']);
	$row1 = $user->fetch_query("chat_message", $criteria1);
	$row2 = $user->fetch_query("chat_message", $criteria2);
	$row = $user->union($row1, $row2);
	$criteria3 = array("user_id"=>$_POST['id']);
	$acc = $user->fetch_data_byId("user_info", $criteria3);

	

	
 ?>

		
			<?php 
			if(!$row){
				unset($_SESSION['flash']);
			$_SESSION['flash'] = 'Start New Conversation with ' . $acc['first_name'] . " " . $acc['last_name']; 
			if(isset($_SESSION['flash']) && !empty($_SESSION['flash']))
				{
				echo '<div class="text-center mt-5">
					'.$_SESSION['flash'].'
					</div>';
				   		unset($_SESSION['flash']);
				}
									
			}else{


			foreach ($row as $messages) { ?>
			
			
 			<div class="flex-column d-flex row-hl mb-3">
 				

					<?php if($messages['to_user_id'] == $_SESSION['id'] ){ ?>
					<div class="flex-row d-flex row-hl justify-content-start">
 						<div class="profile item-hl mr-3" >
							<img class="avatar" src="http://demo.powowbox.com/powowbox/avatar_demo/Jane_0001.png" alt="">	
						</div>
						<div class="item-hl align-self-center">
							<div class="bg-top p-2 text-light" style="border-radius: 50px; font-size: 14px;">
								<?php echo $messages['chat_message']; ?>
							</div>
							<p class="text-muted" style="font-size: 12px;"><?php echo $messages["timestamp"]; ?></p>
						</div>	
					</div>

					<?php } else { ?>
					<div style="width: 100%;">
						<div class="flex-row d-flex row-hl justify-content-end">	
							<div class="item-hl align-self-center">
								<div  class="bg-top p-3 text-light from" style="border-radius: 50px; font-size: 14px; max-width: 300px; line-height: 150%;word-wrap: break-word; ">
									<?php echo $messages['chat_message']; ?>
								</div>
								<p class="text-muted" style="font-size: 12px;"><?php echo $messages["timestamp"]; ?></p>
							</div>	
							<div class="profile item-hl mr-3" >
								<img class="avatar" src="http://demo.powowbox.com/powowbox/avatar_demo/Jane_0001.png" alt="">
							</div>
						</div>
					</div>
					<?php } ?>

 				

 			</div>

			<?php 	
							
				}
			}
				
			 ?>


		