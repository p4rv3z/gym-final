<?php
	session_start();
	include '../php/database_connection.php';
	$database_include = TRUE;
	include '../php/database_services.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel</title>
	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../style/header.css">
	<script src="../javascript/admin_header.js"></script>
	<script src="../assets/jquery/jquery-3.1.1.min.js"></script>
</head>
<body>

<header>
<?php
	include 'header.php';
?>
</header>
<?php

?>


</body>
</html>
<?php
	$connection->close();
?>