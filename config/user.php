<?php 
	include_once "database.php";
	class User extends Database
	{
		public function insert_data($table, $fields, $fname, $lname, $bdate){
			$sql = "";
			$sql .= "INSERT INTO " . $table;
			$sql .= " (" .implode(",", array_keys($fields)). ") VALUES ";
			$sql .= "('".implode("','", array_values($fields)). "')";
			$query = mysqli_query($this->con, $sql);
			if ($query) {
				$last_id = $this->con->insert_id;
				$sql2 = "INSERT INTO user_info SET user_id = '$last_id', first_name = '$fname', last_name = '$lname', birth_date = '$bdate'";
				$query2 = mysqli_query($this->con, $sql2);
				return true;
			}
		}
	}
	$user = new User();
 ?>