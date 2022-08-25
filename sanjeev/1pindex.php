<!DOCTYPE html>
<html>
<head>
	<title>php1</title>
</head>
<body>
	<?php
echo "hello";
?>

<br>

<?php
		$text = "hello my friend. ";
		$rev = "dneirf ym olleH";
		$small = "HELLO MY FRIEND";

		//to capatialize all number
		$capital = strtoupper($text);
		echo "<br> $text is capital: <b> $capital <br> </b> <br>";

		// to make all letters in lowercase
		$lowercase =strtolower($small);
		echo "<br> $small 's small letters --> <b> $lowercase </b>";
		//to check lenght of string
		
		echo  "The length of astring is:".strlen($text)."<br>";

		//to count no of string
		$count =str_word_count($text);
		echo "The number of word in  $text is ". $count."<br>";
		 ;

		//to reverse any string
		$reverse = strrev($rev);
		echo $reverse."<br>";

		//to find position of any text inside string
			$position = strpos($text, "text");
			echo "<br>The <br> position of text in $text is $position";

		

		//to make first character capital
		$trail = "copy";
		$firstCapital = ucfirst($trail);
		echo "<br> capatialize of $trail is <b> $firstCapital <b>";

		//to make first character lowercase
		$smalltrail = "COPY";
		$smallCapital = lcfirst($smalltrail);
		echo "<br> Lowercase of $smalltrail is <b> $smallCapital <b><br>";

		//example to replace any word by any other
		$replaceText = str_replace('text' ,'replaced text' , '$text');
		echo " $text is replaced as $replaceText <br>";

		for ($i=0; $i <5 ; $i++) { 
			# code...
			echo " printed ".$i." 5 times<br>";
		}

		//check whether the function is int or not
		$x =31;
		$y = 65;
		echo "var_dump($x)";
		echo "var_dump($y)";

?>
<!-- 
nav and global variables -->

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
		$b =14; 
		$GLOBALS['z'] = $GLOBALS['a'] +$GLOBALS['b'];
		echo $z;
	?>

	<?php
		echo $_SERVER['PHP_SELF'];
		echo "<br>";
		echo $_SERVER['SERVER_NAME'];
		echo "<br>";
		echo $_SERVER['HTTP_HOST'];
		echo "<br>";
		echo $_SERVER['HTTP_REFERER'];
		echo "<br>";
		echo $_SERVER['HTTP_USER_AGENT'];
		echo "<br>";
		echo $_SERVER['SCRIPT_NAME'];
?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   Name: <input type="text" name="fname">
   <input type="submit">
</form>

<?php
 	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	// collect value of input field
 	 $name = $_REQUEST['fname'];
 	if (empty($name)) {
   	       echo "Name is empty";
  	} else {
    	echo $name;
  	}
	}
?>

 
</body>
</html>