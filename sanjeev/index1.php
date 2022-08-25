<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<?php
	 	echo "hello";
	 	echo "My name is sanjeev ale magar";
	 	echo "hello my name is sanjeev";
	?>

	<?php
		echo "nav bar example";
		$nav = ["home","services","About us","Contact"];
		foreach ($nav  as $key => $value) {
			echo "<li>".$value."</li>";
		}


	?>

	<h2>global variable</h2>
	<?php
		$a = 12;
		$b =1234; 
		$GLOBALS['z'] = $GLOBALS['a'] +$GLOBALS['b'];
		echo $z;
	?>
	
</body>
</html>