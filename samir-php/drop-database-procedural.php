<!DOCTYPE html>
<html>
<head>
	<title>SQL Connection Procedural Example</title>
</head>
<body>
<h1>SQL Connection Procedural Approach</h1>
<?php
$serverName = "localhost";
$userName = "root";
$password = "";

//Connection to database using procedural approach
$conn = mysqli_connect($serverName,$userName,$password);

//Check the connection 
if($conn){
	echo "Connected Successfully!";

	//create sql
	$sql="DROP DATABASE csit_php_1";

	//create database
	if(mysqli_query($conn,$sql)){
		echo "Database csit_php_1 deleted Successfully";

	}else{
		echo "Could not delete the database".mysqli_error($conn);
	}
}else{
	die("Connection Failed!".mysqli_connect_error());
}
//closing the connection
//mysqli_close($conn);


?>
</body>
</html>