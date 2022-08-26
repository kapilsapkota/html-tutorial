<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session Example</title>
</head>
<body>
	<h1>Session Set Example</h1>
	<?php
		$_SESSION['name'] = "John Doe";
		$_SESSION['color'] = "red";
		$_SESSION['age'] = "12";
		echo "Session Variables are set!";
	?>
	<h2>Display session variables</h2>
	<?php 
		echo "Name is: ".$_SESSION['name'];
		echo "<br>Color is: ".$_SESSION['color'];
		echo "<br>Age is: ".$_SESSION['age'];
	?>
</body>
</body>
</html>