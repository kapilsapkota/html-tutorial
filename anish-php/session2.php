<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>	
	<title> Session display</title>
</head>
<body>
	<h1>Session display</h1>
	<?php

	//unset all the key from the session
	//session_unset();


	//destroy the session .
	//session_destroy();

	//display the informations for all keys and values.
	//print_r($_SESSION);

	//display all the session values.
		echo "name is :".$_SESSION['name'];
		echo "<br>color is :".$_SESSION['color'];
		echo "<br>Age is :".$_SESSION['age'];



	?>

</body>
</html>