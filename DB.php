<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "workeddb";

	$conn = mysqli_connect($host, $user, $pass, $db);
	if (!$conn) {
		die("error in connection!");
	}
?>