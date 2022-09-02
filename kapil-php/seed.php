<!DOCTYPE html>
<html>
<head>
    <title>SQL Connection Create Example</title>
</head>
<body>
<h1>Full Database and tables </h1>
<?php
$serverName = "localhost";
$userName = "root";
$password = "";

//Create the connection to mySql Database
$conn = new MySQLi($serverName,$userName,$password);

//Check connection  if true return connected
if ($conn->connect_error) {
    die("Could not connect! Connection Failed!"). $conn->connect_error;
}else{

//create a sql
    $sql = "CREATE DATABASE csit_php_2";

    $query = $conn->query($sql);
    if($query === TRUE){
        //Closing the connection
        $conn->close();
        echo "Database csit_php created successfully!";
        $database = "csit_php_2";

        //Connection to database
        $newConn = new MySQLi($serverName, $userName, $password,$database);
        if ($newConn->connect_error) {
            die("Could not connect! Connection Failed!"). $newConn->connect_error;
        }

        $userSql = "CREATE TABLE users( 
				id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				 first_name varchar(50) NOT NULL,
				 middle_name varchar(50) DEFAULT NULL, 
				 last_name varchar(50) NOT NULL,
				 password varchar(255) NOT NULL, 
				 address varchar(100) DEFAULT NULL,
				  email varchar(50), 
				  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				   updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
                $query = $newConn->query($userSql);
                            if($query === TRUE){
                                echo "Users table created successfully!";
                            }else{
                                echo "Error creating table".$newConn->error;
                            }

            $postSQL = "CREATE TABLE posts( 
				id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				 title varchar(100) NOT NULL, 
				 slug varchar(150) NOT NULL,
				 excerpt varchar(1800) DEFAULT NULL,
				 status tinyint(1) DEFAULT 0,
				  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
				   updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

					$query = $newConn->query($postSQL);
						if($query === TRUE){
							echo "Posts table created successfully!";
						}else{
							echo "Error creating table".$newConn->error;
						}

                        $newConn->close();
    }else{
        echo "Error Creating Database".$conn->error;
        //Closing the connection
        $conn->close();
    }

//Closing the connection
    $conn->close();

}

?>
</body>
</html>