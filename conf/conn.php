<?php
	$servername = "localhost:3306";
	$database = "project_1";
	$username = "root";
	$password = "";
	$mysqli=mysqli_connect($servername, $username, $password) or die('Connect Failed !!!');
	mysqli_select_db($mysqli,$database) or die('Database Not Found !!!');
?>
