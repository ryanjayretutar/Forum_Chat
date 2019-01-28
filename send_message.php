<?php 

	include "config/user.php";
	session_start();

	$message =  array("to_user_id"=>$_POST['id'],
					"from_user_id"=>$_SESSION['id'],
					"chat_message"=>$_POST['msg']);
	
	$user->insert_data("chat_message", $message);

	

	
 ?>