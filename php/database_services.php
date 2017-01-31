<?php
//after connecting database 
if (!isset($database_include)) {
	include '../php/database_connection.php';
}
class Login{
	function checkLogin($table_name,$email,$password){
		$sql = "SELECT * FROM `$table_name` WHERE email = '$email'";
		$result = $GLOBALS['connection']->query($sql);
		if ($result->num_rows==1) {
			$row = $result->fetch_assoc();//convert to array
			if($password==$row['password']){
				return TRUE;
			}else{
				return FALSE;
			}
		}else{
			return FALSE;
		}
	}
	/**
	* return single row of the table
	* return type arrey
	*/
	function retrieveData($table_name,$email){
		$sql = "SELECT * FROM `$table_name` WHERE email = '$email'";
		$result = $GLOBALS['connection']->query($sql);
		if ($result->num_rows==1) {
			$row = $result->fetch_assoc();//convert to array
			return $row;
		}else{
			return "Error from retrieveData";
		}
	}
}
?>