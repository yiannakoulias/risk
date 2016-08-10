<?php
	//connect to the database
	include 'connect.php';

	//retrieve the cookie
	$user_identifier = $_COOKIE["user"];
	
	// sql to create table
	$sql_create = "CREATE TABLE ".$user_identifier." (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	location INT(2) DEFAULT 1 NOT NULL,
	wtp INT(3) DEFAULT 0 NOT NULL,
	units INT(5) DEFAULT 10 NOT NULL,
	lastname VARCHAR(50),
	number VARCHAR(12),
	cookie VARCHAR(50)
	)";
	
	if ($conn->query($sql_create) === TRUE) {
		echo "Table '$user_identifier' created successfully";
	} else {
    echo "Error creating table: " . $conn->error;
	}
	
	//insert the  data into the new table that is named after the cookie
	$value_name = $_POST['d_lastname'];//the array
	$value_number = $_POST['d_studentnumber'];//the array
	$sql = "INSERT INTO ".$user_identifier." (lastname,number) VALUES ('$value_name','$value_number')";
	$conn->query($sql);
	$conn->close();
	
	//this will redirect user to the start of the game
	header('Location: mainpage.php');
?>