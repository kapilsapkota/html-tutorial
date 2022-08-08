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

	for ($i=0; $i <5 ; $i++) { 
		// code...
		echo "Printed ".$i." times <br>";
	}
	?>

</body>
</html>