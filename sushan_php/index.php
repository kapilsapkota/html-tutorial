<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>First php class</title>
</head>
<body>
<?php 
$text= "hi Welcome";
//stirng length
echo "the length of text is";
$len =strlen($text);
echo $len."<br>";
//count no of words in string
$countWord =str_word_count($text);
echo "<br>the no of text is". $countWord;

//string position
$position =strpos($text,"welcome");
echo "<br>the position of $text is $position";

//capitalization
$capital = strtoupper($text);
echo "<br>the capitalized text is : $capital <br> ";

//lower case
$lowcase = strtolower($text);
echo "<br>th etext in small letter is $lowcase";

///reversing string
$reverse = strrev($text);
echo "<br>the reversed of $text is".$reverse;

//capital only first letter
$firstcapital =ucfirst($text);
echo "<br> the capitalized first letter of $text is.$firstcapital";

//capital last letter
$some ="HI guys";
$smallfirst = lcfirst($some);
echo " <b> <br>the lowercase  of first char of $some is $smallfirst </b>" ;	

//replacing string
$replace = str_replace('guys','friends',$some);
echo "<br> rplacing the string $some with  $replace";

#for single line comment

//for loop
for ($i=1; $i <4 ; $i++) { 
	#code...
	echo "<b><br><br><br><b>printing " .$i."  times<br></b>";
}

//tocheck integer
$x = 51;
$y=70.7;
echo var_dump($x);
echo var_dump($y)."<br>";

if(is_int($x)){
	echo "this is integer".$x;
}
if(is_int($y)){
	echo $x."<br>";
}
if(is_float($y)){
	echo  "<br>it is float<br>".$y;
}
if(is_float($x)){
	echo $x;
}

echo var_dump(is_int($x));
echo var_dump(is_int($y));

//checking wheteher its string or not
//isnumeric
$a=123;
$b="number";
/*
if(is_numeric(($a)){
echo $a. "is numeric<br>";
} else{
echo $a."is non numeric";
}
if(is_numeric(($b)){
echo $b."is  numeric<br>";
} else{
echo $b."is not numeric";
}
*/
//function to check numeric or not for long
function checkNumericVariable($variable){
	if (is_numeric($variable)) {
		echo $variable."<br>is numeric variable<br>";
	}else{
		echo $variable."is non numeric";
	}
}
checkNumericVariable($a);
checkNumericVariable($b);

//to check integer using function
$s=000;
$t="abc";

function checkinteger($variable){
	if (is_int($variable)){
		echo $variable."<br>is integer <br>";
	}else{
		echo $variable."is non integer";
	}

}
checkinteger($s);
checkinteger($t);

//function to print name

function printName($name=null){
	if ($name) {
	 echo "<br>Your name is ".$name;
	}else{
		 echo "<br>empty";

	}
}
printName("sushan");
printName();

///function printName($name=null){
	//$printing= $name ? "ypur name is ".$name : "empty";
	//echo $printing;
//	echo $name ? "ypur name is ".$name : "lamichhhane";
//}	
//sum div pro sub
function sum(int $a , int $b)
{
	$sum = $a + $b;
	echo "The sum of $a and $b is $sum <br>";
}
sum(2,3); 


function difference(int $a, int $b)
{
	$difference = $a - $b;
	echo "The difference of $a and $b is $difference <br>";
}	
difference(5,1);

function multiply(int $a, int $b)
{
	$multiply = $a * $b;
	echo "The multiplication of $a and $b is $multiply <br>";
}	
multiply(5,3);

function division(int $a, int $b)
{
	$division = $a / $b;
	echo "The division of $a and $b is $division <br>";
}	
division(15,3);

echo "<br><h1>hello world</h1>";
"<h2>learning backend server side programming </h2>";	
print("printing<br>");
 $text = "writing text";
 var_dump($text);

?>
<? php 
 $a=1;
$b=5;
$c=$a+$b;
echo "the sum of$a and $b is $c";
?>
*/

</body>
</html>