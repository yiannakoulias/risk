<?php
	//we have to assess whether or not user has a cookie.  If they do, need to skip
	//over to the last section that redirects to the mainpage
	include 'cookie.php';
?>
<html>
<head>	

</head>
<body>
<h3>Welcome to RAG (the Risk Analysis Game)</h3>
<div>
<form action="insert_name.php" method="post">
  Last Name: <input type="text" name="d_lastname">
  Student number:<input type="text" name="d_studentnumber">
  <br>
  <input type="submit" value="Submit">
</form>
</div>
</body>
</html>