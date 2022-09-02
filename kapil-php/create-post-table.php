<!DOCTYPE html>
<html>
<head>
	<title>	Create POST Table From PHP</title>
</head>
<body>
	<h1>	Create POST Table Object Oriented Approach</h1>
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
				$sql = "CREATE TABLE posts( 
				id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				 title varchar(100) NOT NULL, 
				 slug varchar(150) NOT NULL,
				 excerpt varchar(1800) DEFAULT NULL,
				 status tinyint(1) DEFAULT 0,
				  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				   updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

					$query = $conn->query($sql);
						if($query === TRUE){
							echo "Posts table created successfully!";
						}else{
							echo "Error creating table".$conn->error;
						}
			}
			//connection close
			$conn->close();
	?>
</body>
</html>