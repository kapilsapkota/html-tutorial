<!doctype html>
	<!DOCTYPE html>
	<html>
	<head>
		

		<title>First PHP CLASS</title>
	</head>
	<body>
	
	<?php

	echo "<h1>My Heading</h1>";
	print("hello");
	$text = "This is the text";
	//var_dump($text);
	?>
	<br>
<?php
	$text = "This is the text";
	//to  check the length of string
	$len = strlen($text);
	echo  "The length of $text is ".$len. "<br>";

	//to count the number of words in any string
	$countWord = str_word_count($text);
	echo "The number of word in $text is ". $countWord. "<br>";

	//to reverse any string
	$reverse = strrev($text);
	echo $reverse. "<br>"; 

	//to find the position of any text inside string
	$position = strpos($text, "text");
	echo "The position of text in 'text' is $position"."<br>";

	//to capitalize all the letter
	$capital = strtoupper($text);
	echo "<br> $text in capital: <b> $capital<br></b><br>";

	//to make all the letters in lowercase
	$lowercase = strtolower($text);
	echo "<br> $text in small letter: <b> $lowercase </b>"."<br>";

	//to make a first character capital
	$trial = "coPy";
	$firstCapital = ucfirst($trial);

	//to make a first character lowercase
	$smallTrial = "COPY";
	$firstsmall = lcfirst($smallTrial);
	echo "<br> Capitalize of $trial is <b>$firstCapital</b>";
	echo "<br> First lowercase of $smallTrial is <b>$firstsmall</b><br>";

	//example to replace any word by any other 
	$replacedText = str_replace('text', 'replaced text', $text);
	echo "<br>  $text is replaced as <b>$replacedText</b><br>";

//for loop
	for ($i=0 ; $i <5  ; $i++ ) { 
		echo "Printed".$i." times <br>";
	}
	//is_int() function to check either it is int or not
	$x = 53;
	$y = 55.67;
	//echo var_dump($x);
	//echo var_dump($y)."<br>";
//echo var_dump(is_int($x));
//echo var_dump(is_int($y))."<br>";

if (is_int($x)) {
	echo "This is integer 69: " .$x."<br>";
}
if (is_int($y)) {
	echo "This is integer 72: " .$y."<br>";
}
//is_float()

if (is_float($x)) {
	echo  "This is float 75: " .$x."<br>";
}
if (is_float($y)) {
	echo "This is float 78: " .$y."<br>";
}

//is_numeric() checks the given string is numeric or not and returns either true or false
$a = 45;
$b = "45";
$c = "number";
//checks either $a is numeric or not
if(is_numeric($a));
if(is_numeric($a)){
echo $a. " is numeric variable"."<br>";
}else{
	echo $a. " is not numeric variable"."<br>";
}

if(is_numeric($b)){
	echo $b. " is numeric variable"."<br>";
		}else{echo $b. " is not numeric variable"."<br>";
	}
if(is_numeric($c)){
	echo $c. " is numeric variable"."<br>";
		}
		else{echo $c. " is not numeric variable"."<br>";
	}

	function checkNumericVariable($variable){
		if(is_numeric($variable)){
	echo $variable. " is numeric variable"."<br>";
		}
		else{
			echo $variable. " is not numeric variable"."<br>";
		}
	}
	checkNumericVariable($a);
	checkNumericVariable($b);
		checkNumericVariable($c);



function IsFloat($variable){
		if(is_float($variable)){
	echo $variable. " is float variable"."<br>";
		}
		else{
			echo $variable. " is not float variable"."<br>";
		}
	}
	IsFloat($a);
	IsFloat($b);
	IsFloat($c);


	$a= 1;
	$b= 2;
	$sum= $a+$b;
	echo "The sum is $sum<br>";

?>
<br>

</body>
	</html>