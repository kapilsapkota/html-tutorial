<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Drop Database</title>
</head>
<body>
	<h1>Dropping Database</h1>
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

	echo "Connected Sucessfully";

	$sql = "DROP DATABASE csit_php";
	$query = $conn->query($sql);
	if ($query===TRUE) {
		echo 
		"Database csit_php Deleting Sucessfully!";
	}else{
		echo "Error Deleting Database".$conn->error;
	}

	//closing the connection
	$conn->close();
	?>

</body>
</html>