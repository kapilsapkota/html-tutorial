<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>First php class</title>
</head>
<body>

<?php
//Normal Comment
echo "<h1>Hello</h1>";

print("Nepal <br>");

$text = "This is the text";
var_dump($text);

$a =1;
$b = 2;
$sum = $a + $b;
echo "The sum of $a and $b is $sum <br>";

//string length
echo "The length of text is";
$len = strlen($text);
echo $len."<br>";


//to count the no. of words in any string

$countWord = str_word_count($text);
echo "The number of word in $text is " . $countWord;


//to reverse any string

$reverse = strrev($text);
echo $reverse; "<br>";



//to find the position of any text inside a string

$position = strpos($text,"text");
echo "The position of text in '$text' is $position";


//to capitalize all the letters

$capital = strtoupper($text);
echo "<br> $text in capital: <b>$capital<br></br>";



//to smallize all the letters

$lowercase= strtolower($text);
echo " $text in small letter is: <b>$lowercase<br>";


//to capitalize only one letter

$firstcapital= ucfirst($text);
echo " $text in first capital is: <b>$firstcapital<br>";

/*$trial = "coPy";*/

//to smallize only one letter

$firstsmall= lcfirst($text);
echo " $text in first small is: <b>$firstsmall<br>";


//to make first char lowercase
$trial = "coPy";
$firstcapital = ucfirst($trial);
echo " $trial in first capital is: <b>$firstcapital<br>";

//example to replace any word by any other 

$replaceText = str_replace('text','replaced text', $text);
echo "<br> $text is replaced as : <b>$replaceText </b> <br>";

//for loop example
for ($i=1; $i<=5 ; $i++) { 

	echo "Printed ".$i. " times <br>";
}



?>





</body>
</html>