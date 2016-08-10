<?php
	//connect to the server
	$dbhost = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'floodgame';
	
	$conn=new mysqli($dbhost,$username,$password,$db);
	if(!$conn){
		die('Could not connect to server'. mysql_error());
	}
?>