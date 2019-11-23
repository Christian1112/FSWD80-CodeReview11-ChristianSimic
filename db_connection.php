<?php 

	$mysqli = @mysqli_connect('localhost','root','', 'cr11_christian_simic_travelmatic');
	if (!$mysqli) {
	   die("Connection failed: " . mysqli_connect_error());
	}
?>