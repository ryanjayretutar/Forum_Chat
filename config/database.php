<?php 

	include_once "config.php";

	class Database
	{
		public $con;
		function __construct()
		{
			$this->open_connection();
		}

		public function open_connection(){

			$this->con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		}
	}

	$db = new Database();



 ?>