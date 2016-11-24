<html>
	<head>
	<title>Koneksi ke MySQL</title>
	</head>
	<body bgcolor="pink">
		<?php
		// Connecting, Selecting database
		$mysqli=mysqli_connect('localhost','<root>','')
		or die ('Could not connect: '.mysql_error());
		echo 'Connected Succesfully';
$mysqli = new mysqli("localhost", "root", "", 'ShowRoomMobil')
or die('Could not select database');
		?>
	</body>
</html>