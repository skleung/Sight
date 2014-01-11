<?php
	// Create TABLE $_GET['roomkey'] on submit of "Create Room" form
	// Accepts parameter "roomkey", used to name the TABLE

	// Accepts a "key" parameter from the GET request, which serves
	// as the name of the TABLE

	$roomkey    = $_GET['roomkey'];
	$roomname   = $_GET['roomname'];
	$expiretime = $_GET['expiretime'];

	$con = mysqli_connect("localhost", "root", "mysql", "SightDb");

	// Populate the Hotel TABLE with the roomkey and roomname
	$sql = "INSERT INTO Hotel (roomkey, roomname, expiretime) VALUES ('$roomkey', '$roomname', '$expiretime')";
	mysqli_query($con, $sql);


	// Create Table
  	// mysql_query("DROP TABLE IF EXISTS $_GET['key'].'ROUND1'")

  	$sql = "CREATE TABLE $roomkey(userkey CHAR(8), username CHAR(32), latitude FLOAT(16), longitude FLOAT(16), expiretime CHAR(64))";

  	if (mysqli_query($con, $sql)) {
  		echo "<script>alert('TABLE $roomkey created successfully');</script>";
  	}
  	else {
  		echo "<script>alert('Error creating TABLE $roomkey')</script>";
  	}
?>