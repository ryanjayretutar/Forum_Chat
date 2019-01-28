<?php 
	include_once "database.php";
	class User extends Database
	{
		/*Method for inserting data into table*/
		public function insert_data($table, $fields){
				$sql = "";
				$sql .= "INSERT INTO " . $table;
				$sql .= " (" .implode(",", array_keys($fields)). ") VALUES ";
				$sql .= "('".implode("','", array_values($fields)). "')";
				$query = mysqli_query($this->con, $sql);
				if ($query) {
					return true;
				}
				// echo $sql;
		}
		/*End of insert_data method*/

		/*Check duplicate username or email*/
		public function check_duplicate($username, $email){
			$sql = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";
			$result = mysqli_query($this->con, $sql);
			$count_row = $result->num_rows;
			if($count_row == 0) { return true; } else { return false; }
		}
		/*End of check_duplicate method*/


		/*Get last inserted id*/
		public function get_last_id(){
			return $this->con->insert_id;
		}
		/*End of get_last_id method*/

		/*Start of check login*/
		public function check_login($user, $password){
			$password = md5($password);
			$sql = "SELECT id from user WHERE username ='$user' OR email='$user' AND password = '$password'";
			$result = mysqli_query($this->con, $sql);
			$user_data = mysqli_fetch_array($result);
			$count_row = $result->num_rows;
			if ($count_row == 1) {
				$_SESSION['login'] = true;
				$_SESSION['id'] = $user_data['id'];
				return true;
			}else{
				return false;
			}
		}
		/*end of check_login*/

		public function session_check(){
			$uid = $_SESSION['id'];
			if(!$this->get_session()){
				header("location: login.php");
			} 
		}

		public function get_session(){

			return $_SESSION['login'];
		}

		public function user_logout(){
			session_destroy();
			session_start();
			$_SESSION['login'] = false;
			
		}

		public function fetch_data($table){
			$sql = "SELECT * FROM " . $table;
			$array = array();
			$query = mysqli_query($this->con, $sql);
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
		}
		public function fetch_data_byId($table, $where){
			$sql = "";
			$condition = "";
			foreach ($where as $key => $value) {
				$condition .= $key . "='" . $value . "' AND ";
			}
			$condition = substr($condition, 0, -5);
			$sql .= "SELECT * FROM " . $table . " WHERE ". $condition;
			$query = mysqli_query($this->con, $sql);
			$row = mysqli_fetch_assoc($query);
			return $row;
		}
		public function fetch_data_Many($table, $where){
			$sql = "";
			$condition = "";
			foreach ($where as $key => $value) {
				$condition .= $key . "='" . $value . "' AND ";
			}
			$condition = substr($condition, 0, -5);
			$sql .= "SELECT * FROM " . $table . " WHERE ". $condition;
			$query = mysqli_query($this->con, $sql);
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			return $array;
		}

		public function fetch_query($table, $where){
			$sql = "";
			$condition = "";
			foreach ($where as $key => $value) {
				$condition .= $key . "='" . $value . "' AND ";
			}
			$condition = substr($condition, 0, -5);
			$sql .= "SELECT * FROM " . $table . " WHERE ". $condition;
			$query = mysqli_query($this->con, $sql);
			if($query){
				return $sql;
			}
			return false;
			
		}

		public function union($sql1, $sql2){
			$sql = $sql1 . "UNION " . $sql2 . " ORDER BY timestamp";
			$query = mysqli_query($this->con, $sql);
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}

			if(empty($array)){
				return false;
			}else{
				return $array;
			}
			
		}



	} //End of User Clas
	$user = new User();
 ?>