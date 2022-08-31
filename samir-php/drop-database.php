<!DOCTYPE html>
<html>
<head>
	<title>SQL Connection Create Example</title>
</head>
<body>
<h1>SQL Connection Create Database MySQLi Object Oriented Approach</h1>
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

//create a sql
$sql="DROP DATABASE csit_php";

$query = $conn->query($sql);
if($query==TRUE){
	echo "Database csit_php deleted successfully!";
}else{
	echo"Error deleting Database".$conn->error;
}

//closing the connection
$conn->close();
?>
</body>
</html>