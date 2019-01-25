<?php 
	include_once "database.php";
	class User extends Database
	{
		
		public function insert_data($table, $fields){
				$sql = "";
				$sql .= "INSERT INTO " . $table;
				$sql .= " (" .implode(",", array_keys($fields)). ") VALUES ";
				$sql .= "('".implode("','", array_values($fields)). "')";
				$query = mysqli_query($this->con, $sql);
				if ($query) {
					// $last_id = $this->con->insert_id;
					// $sql2 = "INSERT INTO user_info SET user_id = '$last_id', first_name = '$fname', last_name = '$lname', birth_date = '$bdate'";
					// $query2 = mysqli_query($this->con, $sql2);
					return true;
				}
			
		}

		public function check_duplicate($username, $email){
			$sql = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";
			$result = mysqli_query($this->con, $sql);
			$count_row = $result->num_rows;
			if($count_row == 0) { return true; } else { return false; }
		}

		public function get_last_id(){
			return $this->con->insert_id;
		}
	}
	$user = new User();
 ?>