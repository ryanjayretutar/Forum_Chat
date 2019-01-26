<?php 

	include "config/user.php";
	session_start();
	$criteria = array("to_user_id"=>$_POST['id'],
					"from_user_id"=>$_SESSION['id']);
	$row = $user->fetch_data_Many("chat_message", $criteria);

	foreach ($row as $messages) {
		echo $messages['chat_message'];

	}







 ?>