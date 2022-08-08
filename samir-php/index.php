<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//This is the comment
echo "<h1>My Heading</h1>";
print("Testing<br><br>");
 ?>

 <?php
$text="This is the text";

var_dump($text);
$a=1;
$b=2;
$sum=$a+$b;
echo "<br><br>The sum of $a and $b is $sum<br>";

$len=strlen($text);
echo $len."<br>";
echo "$len<br>";

//to count the number of words in any string
$countWord=str_word_count($text);
echo "The number of word in '$text' is".$countWord."<br>";

//To reverse any string
$reverse=strrev($text);
echo "<br>$reverse<br>"."<br>";

//to find the position of any text inside string
$position=strpos($text,"text");
echo "The position of text in '$text' is $position"."<br><br>";

//to capitalize all the letter
$capital=strtoupper($text);
echo "<br>$text in capital: <br>$capital<br></b><br>";

//to make all letters in lowercase
$lowercase=strtolower($text);
echo"<br>$text in small letter : <b> $lowercase</b><br><br>";

//to make the first character capital
$trial = "coPy";
$firstCapital=ucfirst($trial);

//to make first character lowercase
$smallTrial="COPY";
$firstSmall=lcfirst($smallTrial);

echo "<br> Capitalize of $trial is <b>$firstCapital</b>";
echo"<br> First lowercase of $smallTrial is <b>$firstSmall</b><br><br>";

//example to replace any word by any other
$replacedText=str_replace('text', 'replaced text', $text);
echo "<br>'$text' is replaced as <b>$replacedText</b><br><br>";

//for loop practice
for($i=0;$i<5;$i++)
{
	#code...
	echo "printed ".$i." times<br>";
}

//is_int() function checks either it is int or not
$x= 531;
$y= 65.89;

echo "<br>y is made integer ".(int)$y."<br><br>";

echo var_dump($x);
echo var_dump($y)."<br><br>";

if(is_int($x)){
	echo "This is integer: ".$x."<br>";
}

if(is_int($y)){
	echo "This is integer: ".$y."<br>";
}

//is_float checks either it is integer or not and returns either true or false
if(is_float($x)){
	echo "This is float: ".$x."<br>";
}

if(is_float($y)){
	echo "This is float: ".$y."<br>";
}

echo var_dump(is_int($x));
echo var_dump(is_int($y))."<br><br>";

//is_numeric() checks whether the given string is numeric or not and returns either true or false
$a=454;
$b="454";
$c="number";
if(is_numeric($a)){
	echo $a." is numeric variable<br>";
}else{
	echo $a." is non numeric variable<br>";
}

if(is_numeric($b)){
	echo $b." is numeric variable<br>";
}else{
	echo $b." is non numeric variable<br>";
}

if(is_numeric($c)){
	echo $c." is numeric variable<br>";
}else{
	echo $c." is non numeric variable<br>";
}

checkNumericVariable($a);
checkNumericVariable($b);
checkNumericVariable($c);

function checkNumericVariable($variable){
	if(is_numeric($variable)){
	echo $variable." is numeric variable<br>";
	}else{
	echo $variable." is non numeric variable<br>";
	}
}

function checkfloat($variable){
	if(is_float($variable)){
	echo "This is float: ".$variable."<br>";
	}else{
		echo "This is not float: ".$variable."<br>";
	}
}

checkfloat($x);
checkfloat($y);



function printname($variable){
	echo "<br>Your name is: ".$variable."<br>";
}

printname('samir');

$fa='samir';
printname($fa);

function printYourName($name=null){
	//if($name)
	//	echo "your name is: ".$name;
	//else
	//	echo "<br>John doe<br>";

//OR

	//$printedName = $name ? "Your name is: ".$name : "John Doe";
	//echo $printedName;

//OR
	echo $name ? "Your name is ".$name :"Jon Doe";
}

printYourName("samm");
printYourName();

function summ($a,$b){
	$sum=$a+$b;
	echo "<br><br>The sum of $a and $b is: $sum";
}

summ(2,3);
 ?>

</body>
</html>