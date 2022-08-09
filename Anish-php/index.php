<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>First php class</title>
</head>
<body>

<?php
echo "<h1>The Heading</h1>";
print("hello php world<br>");
?>
<?php
//to print the message.
$text = "this is my message";
//define the message for length of the string.
$length = strlen($text);
echo $length."<br>";
//to count the number of the words in a string in the given text
$countWord = str_word_count ($text);
echo "the  of no of words in the text is ".$countWord."<br>";
//to reverse any string
$reverse = strrev($text);
echo "<br>$reverse"."<br>";

//to find the position of the text inside the string
$position = strpos($text,"text");
echo " the position of the text in '$text' is $position'<br>'"; 
//change to upper case letters
$capital = strtoupper($text);
echo "<br> $text in capital: <b>$capital<br></b><br>";
//change the text to lower text.
$lowercase = strtolower($text);
echo "<br> $text in small letter :<b> $lowercase </b>";
//to make the first character capital.
$trial = "copy";
$firstCapital = ucfirst($trial);

//to make first character lowercase
$smallTrial = "COPY";
$firstSmall = lcfirst($smallTrial);

echo "<br> Capatilize of $trial is  <b>$firstCapital</b>";
echo "<br> First lowercase of $smallTrial is <b>$firstSmall</b><br>";
// to replace any word by other word within the string
$replacedText = str_replace('text','text replaced',$text);
echo "<br> $text is replaced by <b>$replacedText </b><br>";
for ($i=0; $i<5 ; $i++) {
	
	echo "prints the ".$i."times<br>";
}
//is_int() function for checking the given data is integer or not
$x= 345;
$y= 526.67;
echo var_dump($x);
echo var_dump($y)."<br>";
if(is_int($x)){
	echo "the number is integer=".$x."<br>";
}
if(is_int($y)){
	echo "the number is integer=".$y."<br>";
}
if(is_float($y)){
	echo "the number is float=".$y."<br>";
}
if(is_float($x)){
	echo "the number is float=".$x."<br>";
}

{
	echo var_dump(is_int($x));
		echo var_dump(is_int($y));
}


$a=1;
$b=3;
$sum=$a+$b;
echo "<br>"."the sum of a and b is $sum\n";
echo "$text<br>";
var_dump($text);


//php functions.

//is numeric =this checks whether the function is numeric value or not and returns values true or false.
$a=13.1;
$b="31";

	

function checkthenumbers($variable){
	if (is_numeric($variable)){
	echo "<br>".$variable." the value is numeric<br>";
}
	else{
		echo $variable." the value is not numeric";
	}
	if(is_numeric($variable)){

		echo $variable." the value is numeric";
	}
		else{
			echo $variable." the value is not numeric";
		}

}
checkthenumbers($a);
checkthenumbers($b);

function checkfloat($variable){
	if (is_float($variable)){
		echo "<br>".$variable." is float";
	}
	else{
		echo "<br>".$variable." is not float";
	}
}
checkfloat($a);


function Myname($variable){
	if($variable){
		echo "<br>".$variable." is my name";
	}
	else{
		echo "none";
	}
	$nameprint=$variable ? "My name is ".$variable : "none";
	echo $nameprint;
	
}
Myname("Anish");






?>




</body>
</html>