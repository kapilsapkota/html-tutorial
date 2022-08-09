<!DOCTYPE html>
<html>
<head>
	
	<title> First Php class</title>
</head>
<body>
	<?php
	echo "<h1>My Heading</h1>";
	print("myau myau biralo");
	
	?>
	<br>
	<?php
	$text ="this is me biralo";
	$len = strlen($text);
	echo $len."<br>";

	$countWord = str_word_count($text);
	echo "the number of word in $text is". $countWord;

	//to reverse any string
	$reverse = strrev($text);
	echo "<b>$reverse</b>"."<br>";

	//to find the position of any text
	$position = strpos($text, "text");
	echo "the position of text in '$text' is $position";

	//to make all letter capital
	$capital = strtoupper($text);
	echo "<br> $text in capital: <b>$capital<br></b><br>";

	//to make all letters in lowercase
	// $lowercase = strtolower($text)
	// echo "<br> $text in small letter : <b> $lowercase </b>";

	//to male first character capital
	$trial = "coPy";
	$firstCapital = ucfirst($trial);

	//to make first character lowercase 
	$smallTrial = "COPY";
	$firstSmall = lcfirst($smallTrial);

	echo "<br> Capitialixe of $trial is <b>$firstCapital</b>";
	echo "<br> First lowercase of $smallTrial is <b>$firstSmall </b><br>";

	//example to replace any word by other
	$replacedText = str_replace('text', 'replaced text','$text');
	echo "<br> $text is replaced as <b>$replacedText</b>";

	//for loop replaced
	for ($i=0; $i <5 ; $i++) { 
		// code...
		echo "Printed ".$i." times <br>";

	}
	function sum(int $a, int $b){
		$sum = $a + $b;
		echo "the sum of $a and $b is $sum <br>";

	}
	function difference(int $a, int $b){
	    return $a - $b;
	}
	echo "the difference of 4 & 3 is".difference(4,3)."<br>";


	sum(3,4)
	


	?>
	
<h1>nav bar example </h1>
<ul>
	<?php

   $nav = ["HOME","SERVICES","ABOUT US"];
   foreach ($nav as $key => $value) {
   	echo "<li> $value </li>";
   }
?>
</ul>

	 

</body>
</html>