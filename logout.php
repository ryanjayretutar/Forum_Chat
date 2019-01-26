<?php 
	session_start();
	include_once "config/user.php";
	$user->user_logout();
	header("location: login.php");

 ?>