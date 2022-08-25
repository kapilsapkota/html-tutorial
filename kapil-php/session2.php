<?php 
//start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Session Display Example</title>
</head>
<body>
	<h1>Session Display example</h1>
	<?php 
	//modify the session value simply call it and assign the value
	$_SESSION['name'] = "Binaya Sharma";
	$_SESSION['color'] = "red";
		$_SESSION['age'] = "12";

	// //unset all the key from Session
	// session_unset();

		//destroy the session
		// session_destroy();
		
	//display all information i.e. all keys and values
		print_r($_SESSION);

		//Display the session values
		echo "<br>Name is: ".$_SESSION['name'];
		echo "<br>Color is: ".$_SESSION['color'];
		echo "<br>Age is: ".$_SESSION['age'];
	?>
</body>
</html>