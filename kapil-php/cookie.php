<?php
$cookie_name = "user";
$cookie_name1 = "name";
$cookie_value = "John doe";
//setting the cookie named 'user'
setcookie($cookie_name,$cookie_value,time() + (86400 * 30),'/'); 

//Editing the cookie value named user
setcookie($cookie_name,'Something',time() + (86400 * 30),'/'); 

//setting the cookie named 'name'
setcookie($cookie_name1,$cookie_value,time() + (86400 * 30),'/');

//deleting the cookie
setcookie($cookie_name,$cookie_value,time() -3600,'/');
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
	}else{
		echo "Could not found!";
	}
	?>
</body>
</html>