
<?php
	$cookie_name = "user";
	$cookie_value = "sanjeev";
	//SETTING the cookies named"user"
	setcookie($cookie_name,$cookie_value,time()+(86400 *30),'/');
	

	//editing the cookie value name user
	setcookie($cookie_name,$cookie_value,time() -3600,'/');

	//deleting the cookie
	setcookie($cookie_name,$cookie_value,time() -3600,'/');
	
?>

<html>
	<head>
		<title>Cookies Example</title>
	</head>
	<body>
		<h1>Example of cookies</h1>
		<?php
			if(isset($_COOKIE['user'])){
				echo $_COOKIE['user'];
			}else{
				echo "could not found!";
			}
		?>
	</body>
</html>