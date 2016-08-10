<?php
	include 'connect.php';

	//retrieve the identifier from the cookie to access table
	$user_identifier = $_COOKIE["user"];

	//assign the decision data from the form into two constants
	$value1 = $_POST['d_wtp'];
	$value2 = $_POST['d_location'];
	
	//make a change to the unit total based on the decision
	$value3 = $current_units-$value1;
	
	//query the database for time value
	$sql = "INSERT INTO ".$user_identifier." (location,wtp,units) VALUES ('$value2','$value1','$value3')";
	$conn->query($sql);

	echo 'Click <a href="mainpage.php"> here</a> for next turn';
	$conn->close();
?>