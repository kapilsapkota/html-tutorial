<?php 

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Session example</title>
</head>
<body>
	<h1>CREATING SESSION</h1>
	<?php 
	$_SESSION['name']= "anish";
	$_SESSION['color'] = "black";
	$_SESSION['age'] = "20";
	echo " Session variables are declared.";

	?>

	<h2>displaying the session variables</h2>
	<?php
		echo "Name is:".$_SESSION['name'];
		echo "<br>fav color is:".$_SESSION['color'];
		echo "<br>age is:".$_SESSION['age'];


	?>

</body>
</html>