<?php 

//setting the cookie named 'samm'
$cookie_name="user";
$cookie_name1="name";
$cookie_value="John doe";
$cookie_value1="jonn";

//setting the cookie named 'user'
setcookie($cookie_name,$cookie_value,time()+(86400*30),'/');

//Editing the cookie named 'user'
setcookie($cookie_name,"something",time()+(3),'/');

//setting the cookie named 'name'
setcookie($cookie_name1,$cookie_value,time()+(86400*30),'/');

//deleting  the cookie
//setcookie($cookie_name1,$cookie_value,time()-3600,'/');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookie Example</title>
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
		echo "<br>";
		if (isset($_COOKIE[$cookie_name1])) {
			echo $_COOKIE[$cookie_name1];
		}
		else{
			echo "Could not found!";
		}
	?>
</body>
</html>