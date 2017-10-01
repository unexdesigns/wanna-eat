<?php
	function query($query){
		if(!isset($query)) {
			die();
		}
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "wanna-eat_db";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// myqlsi_query("SET NAMES 'utf8'", $conn);
		mysqli_query($conn, "SET NAMES 'utf8'"); 
		
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql       =  $_POST["query"];
		$result    =  mysqli_query($conn, $sql);
		$response  =  [
			"data"    => [],
			"success" => true
		];
		
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				array_push($response["data"], $row);
			}
		} else {
			$response["data"] = "Nėra rezultatų";
			$response["success"] = false;
		}
		
		return $response;
		
		$conn->close();
	}