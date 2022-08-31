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
}else{
	die("Connection Failed!".mysqli_connect_error());
}
//closing the connection
//mysqli_close($conn);

?>
</body>
</html>