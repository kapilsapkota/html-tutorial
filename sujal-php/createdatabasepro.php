<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SQL Connection Procedure Example</title>
</head>
<body>
	<h1>SQL Connection Procedure Example</h1>
	<?php
	$serverName = "localhost";
	$username = "root";
	$password = "";

	//connection to database using procedural apporach

	$conn = mysqli_connect($serverName,$username,$password);

	//check the conenction
	if($conn){
		echo "Connected Sucessfully";

		//create sql
		$sql = "CREATE DATABASE csit_php_1";

		//create databse
		if (mysqli_query($conn, $sql)) {
            echo "Could not create the database".
            mysql_error($conn);
			
		}
	}
		else{
			die("Connection failed".mysqli_connect_error());

		}
		//Closing the connection
		mysql_close($conn);
	
	?>

</body>
</html>