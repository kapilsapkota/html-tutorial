<!DOCTYPE html>
<html>
<head>
	<title>	Insert POST Table Data  PHP</title>
</head>
<body>
	<h1>	Insert POST Table Data Object Oriented Approach</h1>
	<?php 
			$serverName = "localhost";
			$userName = "root";
			$password = "";
			$database = "csit_php";

			//create the connection to csit_php database
			$conn = new mysqli($serverName,$userName,$password,$database);
			//Check connection if error die and show error
			if ($conn->connect_error) {
				die("Could not connect! Connection Failed!"). $conn->connect_error;
			}else{

			//sql to insert data into posts table
			$sql = "INSERT INTO posts(title,slug,excerpt,status) VALUES ('PHP','php','This is php class',0)";
			
					$query = $conn->query($sql);
						if($query === TRUE){
							echo "Insert data into post table successfully!";
						}else{
							echo "Error inserting data table".$conn->error;
						}
			}
			//connection close
			$conn->close();
	?>
</body>
</html>