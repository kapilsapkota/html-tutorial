<!DOCTYPE html>
<html>
<head>
	<title>	Create Table From PHP</title>
</head>
<body>
	<h1>	Create User Table Object Oriented Approach</h1>
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

				//SQL to create table name users with column id,first_name,middle_name,last_name,password,email,address,created_at and updated_at
				$sql = "CREATE TABLE users( 
				id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				 first_name varchar(50) NOT NULL, middle_name varchar(50) DEFAULT NULL, 
				 last_name varchar(50) NOT NULL, password varchar(255) NOT NULL, 
				 address varchar(100) DEFAULT NULL,
				  email varchar(50), created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				   updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

					$query = $conn->query($sql);
						if($query === TRUE){
							echo "Users table created successfully!";
						}else{
							echo "Error creating table".$conn->error;
						}
			}
			//connection close
			$conn->close();
	?>
</body>
</html>