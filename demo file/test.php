<?php
$url = "http://localhost/project/gym-final/php/gender_api.php";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
echo "My token: ". $json_data["access_token"];
var_dump($json_data);
?>