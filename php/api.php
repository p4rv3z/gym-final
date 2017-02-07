<?php
	session_start();
	include '../php/database_connection.php';
	$database_include = TRUE;
	include '../php/database_services.php';
?>
<?php
if (!empty($_SESSION["user_email"]) && !empty($_SESSION["user_password"])) {
	$email = $_SESSION["user_email"];
	$query = new DatabaseHelper();
	$sql = "SELECT * FROM `user_activities` WHERE email = '$email'";
	$result = $query->runQuery($sql);
	$length = $result->num_rows;
	$i = 0;
	echo "[";
	while($row=$result->fetch_array()){
		$i++;
		$data = array();
		$date = $row['date'];
		$value = calculateBMI($row);
		$data[$date] = $value;
		print json_encode($data);
		if ($length==$i) {
			
		}else{
		echo ",";
		}
	}
	echo "]";

	$result->close();
	}
		function calculateBMI($row){
		$bmi_height = ($row['height']/100);
		$bmi_weight = $row['weight'];
		$bmi_status = number_format((float)($bmi_weight/($bmi_height*$bmi_height)), 1, '.', '');
		return $bmi_status;
		}
?>