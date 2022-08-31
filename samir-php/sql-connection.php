<!DOCTYPE html>
<html>
<head>
	<title>SQL Connection Example</title>
</head>
<body>
<h1>SQL Connection MySQLi Object Oriented Approach</h1>
<?php
$serverName = "localhost";
$userName = "root";
$password = "";

//Create the connection to mySql Database
$conn = new MySQLi($serverName,$userName,$password);

//Check connection if true return connected
if($conn->connect_error){
	die("Could not connect! Connection Failed!").$conn->connect_error;
}

echo "Connected Successfully!";
?>
</body>
</html>