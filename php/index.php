<?php
	// include "../includes/init.php"        // creates db SightDb
	// include "../includes/buildHotel.php"  // makes table Hotel
	// include "../includes/conn.php"  // connects to SciBowlSim Database in MySQL
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">

	<title>Sight</title>

	<!-- Bootstrap core CSS -->
	<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="css/index.css" rel="stylesheet">

	<script src="js/jquery.js"></script>
	<script src="divideByThree.js"></script>

	<script>

		$(document).ready(function() {
			$("#form").submit(function() {
				$.ajax({
					url: "getlocs.php",
					data: {
						// values posted in request
						// roomkey: $($_GET['roomkey']);
						// userkey: $($_GET['userkey']);
						roomkey:   "ABCDE";
						userkey:   "4PJX744";
						latitude:  $("#latitude").val();  // updated current values
						longitude: $("#longitude").val();
					},
					success: function(data) {
						for (var i = 0; i < (data.username).length; i++) {
							$("#username").append((data.usernames)[i]);
							$("#latitude").append((data.latitudes)[i]);
							$("#longitude").append((data.longitudes)[i]);
						}
					}
				});
				return false;
			});
		});

	</script>
	<title>Sight</title>
</head>
<body>
	<h1>Hello World</h1>
	
	<!-- Builds a fake room to the Hotel
	<form action="buildRoom.php" method="get">
		Room Key: <input type="text" name="roomkey"><br><br>
		Room Name: <input type="text" name="roomname"><br><br>
		Expire Time: <input type="text" name="expiretime"><br><br>
		<input type="submit" value="Build Fake Room">
	</form>
	<br><br>
	-->

	<!-- Adds a fake person to the room
	<form action="popRoom.php" method="get">
		User Key: <input type="text" name="userkey"><br><br>
		Username: <input type="text" name="username"><br><br>
		Latitude: <input type="text" name="latitude"><br><br>
		Longitude: <input type="text" name="longitude"><br><br>
		Expiretime: <input type="text" name="expiretime"><br><br>
		<input type="submit" value="Create Fake Person">
	</form>
	<br><br>
	-->

	<form id="form">
		Username: <input id="username" type="text">
		<br><br>
		Latitude: <input id="latitude" type="text">
		<br><br>
		Longitude: <input id="longitude" type="text">
		<br>
		<br><br>
		
		<!--
		Latitude: <span id="latitude"></span>
		<br>
		Longitude: <span id="longitude"></span>
		<br>
		<br><br>
		-->
		<input type="submit" value="Get Locs">
	</form>
</body>
</html>