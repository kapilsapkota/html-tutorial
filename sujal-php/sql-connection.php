<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SOL Connection Example</title>
</head>
<body>
	<h1>SQL Connection MySQL Object Oriented Approach</h1>
	<?php
	$serverName = "localhost";
	$username = "root";
	$password = "";

	//create the connection to mysql database
	$conn = new MySQLi($serverName,$username,$password);

	//check connection if true return conencted
	if($conn->connect_error){
		die("could not connect! Connection Failed").$conn->conenct_error;
	}

	echo "Connected Sucessfully"

	?>

</body>
</html>