<?php 
	
	function db_connect(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$conn = mysqli_connect($servername, $username, $password,"chat");
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		return $conn;		
	}

	function execute_query($sql, $conn){
		return $conn->query($sql);
	}