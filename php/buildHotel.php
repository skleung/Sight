<?php
	// Create TABLE Hotel on site launch
	// TABLE Hotel contains three columns:
	//  1) key:        unique room key
	//  2) roomname:   name of the room
    //  3) expiretime: room expiration time

	$con = mysqli_connect("localhost", "root", "mysql");
	mysqli_select_db($con, "SightDb");
	
	// mysql_query("DROP TABLE IF EXISTS 'SightDb', 'Hotel'")

	// Call buildRoom.php and add another column pointing to this table
	$sql = "CREATE TABLE Hotel(roomkey CHAR(16), roomname CHAR(32), expiretime CHAR(64))";

	if (mysqli_query($con, $sql)) {
		echo "<script>alert('TABLE Hotel created successfully');</script>";
	}
	else {
		echo "<script>alert('Error create TABLE Hotel')</script>";
	}
?>