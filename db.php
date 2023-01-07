<?php
	function dbconnect(){
		$servername = "localhost";
		$username = "admin";
		$password = "passwordformoodledude";
		$db = "kbtc_oid";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $db);

		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		// echo "Connected successfully";
		return $conn;
	}
?>