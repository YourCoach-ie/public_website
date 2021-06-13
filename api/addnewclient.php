<?php

error_reporting(E_ALL); 
ini_set('display_errors', 1);

// Constants 
  	const ServerName = "localhost";
  	const DbUser = "yourcoachstudio";
  	const DbPass = "fm!(AvLFoXzG";
  	const DbName = "YourCoachStudio";

// Get raw POST data from api call
		$body = file_get_contents('php://input');

if (!empty($body)) {
    $data = json_decode(urldecode($body), true);
    var_export($data);
	
		$password = $data['Password'];
		$source = $data['Source'];
		$name = $data['Customer']['Name'];
		$email = $data['Customer']['Email'];
	
		$mysqli = new mysqli(ServerName, DbUser, DbPass, DbName);
	
		if ($mysqli->connect_errno) {
				printf("Connect failed: %s\n", $mysqli->connect_error);
				exit();
		}
	
		else{
				$stmt = $mysqli->prepare("
					INSERT INTO `Customers` (`Name`, `Email`, `Source`) 
					VALUES (?, ?, ?);
				");
				$stmt->bind_param('sss', $name, $email, $source);	
				$stmt->execute();
				$stmt->close();
				$mysqli->close();
		} // SQL working
		
} // If post is empty
else{
	echo "Empty or incorrect Post data";	
}


	
	$message= "XXX";


?>