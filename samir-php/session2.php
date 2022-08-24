<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session Display Example</title>
</head>
<body>

	<h2>Display session variables</h2>
	<?php
	//modify the session value simply call it and assign the value
	$_SESSION['name']="samm";

	//unset all the keys from session
	//session_unset();

	//destroy the session
	//session_destroy();

	//display all information i.e. all keys and values
	print_r($_SESSION);
	echo "<br><br>";
		echo "Name is: ".$_SESSION['name'];
		echo "<br>Color is: ".$_SESSION['color'];
		echo "<br>Age is: ".$_SESSION['age'];
		
		
	?>
</body>
</html>