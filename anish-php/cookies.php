<?php
$cookie_name = "name";
$cookie_name1 = "name1";
$cookie_name2 = "my_app_php";
$cookie_value= "Anish";
$cookie_value1= "Anish Ghorasaine";
$cookie_value2 = "the app";

//setting the cookie for the file for user name 'user'.
setcookie($cookie_name,$cookie_value,time()+(86400*30),'/');
setcookie($cookie_name1,$cookie_value1,time()+(86400*30),'/');
setcookie($cookie_name2,$cookie_value2,time()+(86400*30),'/');


//deleting the cookie.
//setcookie($cookie_name,$cookie_value,time() -86400*30,'/');
//setcookie($cookie_name1,$cookie_value,time() -86400*30,'/');
//setcookie($cookie_name2,$cookie_value,time() -86400*30,'/');



?>
<!DOCTYPE html>
<html>
<head>
	<title>cookie file</title>
</head>
<body>
	<h1>Example of cookie</h1>
	<?php
	if(isset($_COOKIE['name'])){
		echo $_COOKIE['name']."<br>";
	}else{
		echo "nothing found"."<br>";
	}
	if(isset($_COOKIE['name1'])){
		echo $_COOKIE['name1']."<br>";
	}else{
		echo "nothing found"."<br>";
	}
	if(isset($_COOKIE['my_app_php'])){
		echo $_COOKIE['my_app_php']."<br>";
	}else{
		echo "nothing found";
	}


	?>

</body>
</html>