<?php
	include 'connect.php';

	//retrieve the identifier from the cookie to access table
	$user_identifier = $_COOKIE["user"];
	
	//query the database for time value
	$query = "SELECT location, wtp  FROM ".$user_identifier."";
	$result = mysqli_query($conn,$query) or die(mysql_error($conn));
	
	while($value = mysqli_fetch_array($result)){
		$d1 = $value['location'];
		$d2 = $value['wtp'];
	}
	$conn->close();
?>