<?php
	include 'connect.php';

	//retrieve the identifier from the cookie to access table
	$user_identifier = $_COOKIE["user"];

	//insert the decision data from the form into the database
	$value1 = $_POST['d_wtp'];//the array
	$value2 = $_POST['d_location'];//the array
	
	//query the database for time value
	$query = "INSERT INTO ".$user_identifier." (location,wtp) VALUES ('$value2','$value1')";
	$result = mysqli_query($conn,$query) or die(mysql_error($conn));

	if(!mysql_query($sql)){
		die('Error:' . mysql_error());
	}

	echo 'Click <a href="/interface"> here</a> for next turn';
	$conn->close();
?>