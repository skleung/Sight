<?php
	// Two purposes: 1) Update TABLE with the new (latitude, longitude)
	// and 2) Retrieve the updated locations of the other users in the
	// room.

	// set MIME type
	header("Content-type: application/json");

	$roomkey    = $_GET['roomkey'];
	$userkey    = $_GET['userkey'];
	$latitude   = $_GET['latitude'];
	$longitude  = $_GET['longitude'];

	// Update table with posted data
	$con = mysqli_connect("localhost", "root", "mysql", "SightDb");
	$sql = "UPDATE $roomkey SET latitude='800', longitude='919' WHERE userkey=$userkey";
	mysql_query($con, $sql);

	// Retrieve the desired row in the Hotel TABLE
	$sql = sprintf("SELECT * FROM Hotel WHERE roomkey='%s'",
		mysql_real_escape_string($_GET['roomkey']));
	$mysql_result = mysqli_query($con, $sql);
	$hotel_row = mysqli_fetch_assoc($mysql_result);
	$roomname   = $hotel_row["roomname"];
	$expiretime = $hotel_row["expiretime"];

	// Retrieve the desired row in the $_GET['roomkey'] TABLE
	$sql = sprintf("SELECT * FROM $_GET['roomkey']");
	$mysql_result = mysqli_query($con, $sql);
	$room = mysqli_fetch_assoc($mysql_result);

	// must iterate through TABLE in $room, create arrays to encode in JSON
	
	$username_arr[];
	$latitude_arr[];
	$longitude_arr[];

	/* Something like
	for each row in $room {
		array_push($username_arr, $row['username']);
		array_push($latitude_arr, $row['latitude']);
		array_push($longitude_arr, $row['longitude']);
	}
	*/

	$username_arr = json_encode(/* PHP array */);
	$latitude_arr = json_encode(/* PHP array */);
	$longitude_arr = json_encode(/* PHP array */);

	// JSON maps ... 
	//  1) username to an array of usernames of people in the room
	//  2) latitude to an array of latitudes of people in the room
	//  3) longitude to an array of longitudes of people in the room
	
	print("{usernames: '$username_arr', latitudes: '$latitude_arr', longitudes: '$longitude_arr'}");
?>