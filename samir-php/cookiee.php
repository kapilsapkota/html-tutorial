<?php 

$cookie_name="myappname";

$cookie_value="my first php app";


setcookie($cookie_name,$cookie_value,time()+(86400*30),'/');


?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookiee Example</title>
</head>
<body>
	<h1>Example of Cookie</h1>
	<?php
		if (isset($_COOKIE[$cookie_name])) {
			echo $_COOKIE[$cookie_name];
		}
		else{
			echo "Could not found!";
		}
	?>
</body>
</html>