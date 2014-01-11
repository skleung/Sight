<?php
	// Called when a user follows a link to a room and submits user form
	// request for name and expiretime

	$roomkey    = $_GET['roomkey'];
	$userkey    = $_GET['userkey'];
	$username   = $_GET['username'];
	$latitude   = $_GET['latitude'];
	$longitude  = $_GET['longitude'];
	$expiretime = $_GET['expiretime'];

	$con = mysqli_connect("localhost", "root", "mysql", "SightDb");
	// Populate the Hotel TABLE with the roomkey and roomname
	$sql = "INSERT INTO $roomkey (userkey, username, latitude, longitude, expiretime) VALUES ('$userkey', '$username', '$latitude', '$longitude', 'expiretime')";
	mysqli_query($con, $sql);
?>