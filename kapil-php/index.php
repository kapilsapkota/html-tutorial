<!DOCTYPE html>
<html>
<head>
	<title>First PHP CLASS</title>
</head>
<body>
<?php 
//Normal Comment
echo "<h1>My Heading</h1>";
print("Here"); 
?>
<br>
<?php
$text = "This is the text";
//to check the length of string
$len = strlen($text);
echo "The length of $text is ".$len."<br>";

//to count the number of words in any string

$countWord = str_word_count($text);
echo "The number of word in $text is ". $countWord."<br>";

//to reverse any string
$reverse = strrev($text);
echo "<b>$reverse</b>"."<br>";

//to find the position of any text inside string
$position = strpos($text, "text");
echo "<br> The position of text in '$text' is $position";

//to capitalize all the letter
$capital = strtoupper($text);
echo "<br> $text in capital: <b>$capital<br></b><br>";

//to make all letters in lowercase
$lowercase = strtolower($text);
echo "<br> $text in small letter : <b> $lowercase </b>";

//to make the first character uppercase 
$trial = "coPy";
$firstCapital = ucfirst($trial);

//to make first character lowercase
$smallTrial = "COPY";
$firstSmall = lcfirst($smallTrial);

echo "<br> First uppercase of '$trial' is <b>$firstCapital</b>";
echo "<br> First lowercase of $smallTrial is <b>$firstSmall</b><br>";

//example to replace any word by any other
$replacedText = str_replace('text', 'replaced text', $text);
echo "<br> $text is replaced as <b>$replacedText</b><br>";

//for loop practice
for ($i=0; $i <5 ; $i++) { 
	# code...
	echo "Printed ".$i." times <br>"; 
}

 ?>
</body>
</html>