<?php include 'cookie.php';?>
<html>
<head>	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript"></script>
	<script type="text/javascript" src="js/counter.js"></script>
	<script type="text/javascript" src="js/disable.js"></script>
	<script type="text/javascript" src="js/enable.js"></script>
	<style type="text/css"></style>
</head>

<body>
	<?php
	include 'retrieve_time.php';
	include 'retrieve_past_decisions.php';
	include 'retrieve_units.php';
	?>
<p>
<h4>Map navigation options</h4>
<div>
<button onclick="document.getElementById('myImage').src='img/basemap.png'">Base map</button>
<button onclick="document.getElementById('myImage').src='img/water.png'">Water map</button>
<button onclick="document.getElementById('myImage').src='img/riskmap.png'">Risk map</button>
<button onclick="document.getElementById('myImage').src='img/opportunity.png'">Opportunities map</button>
<button onclick="document.getElementById('myImage').src='img/options.png'">Relocation options map</button>
</div>
<div>
<img id="myImage" src="img/basemap.png" style="width:850px">
</div>
<div>
Current turn: <?php echo $current_turn; ?>
</div>
<div>
Countdown to next turn (60 seconds):
<span id="a_counter"></span><br>
</div>

<form action="insert_decisions.php" method="post">
  Location:<input type="text" name="d_location" value="<?php echo $d1 ?>">
  Willingness to pay:<input type="text" name="d_wtp" value="<?php echo $d2 ?>">
  <p>
  <input type="submit" value="Submit decisions">
</form><br>
  Money available: <?php echo $current_units; ?>
<p>
</body>
</html>
