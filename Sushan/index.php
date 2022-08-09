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



//is_int() integer function checks either it is int or not

$x = 531;
$y = 65.89;

echo var_dump($x);
echo var_dump($y)."<br>";

echo var_dump(is_int($x));
echo var_dump(is_int($y));

if(is_int($x)){
	echo $x."<br>";

}

/*is_int() function either checks either it's int or not & returns either 
	it's true or false */

if(is_int($x))
{
	echo "This is integer 69 : ".$x. "<br>";

}

if(is_int($y))
{
	echo "This is integer 72 : ".$y. "<br>";

}

if(is_float($x))
{
	echo "This is float 75 : ".$x. "<br>";

}


if(is_float($y))
{
	echo "This is float 78 : ".$y. "<br>";

}

/*is_numeric() checks whether the given string is numeric or not and
	returns either true or false*/

$a = 454;
$b = "454";
$c = "number";	

if(is_numeric($a)){
	echo $a. " is numeric variable <br>";
}else{
	echo $a. " is non numeric variable <br>";
}

if(is_numeric($b)){
	echo $b. " is numeric variable <br>";
}else{
	echo $b. " is non numeric variable <br>";
}

if(is_numeric($c)){
	echo $c. " is numeric variable <br>";
}else{
	echo $c. " is non numeric variable <br>";
}

function checkNumberVariable($variable){
	if(is_numeric($variable)){
		echo $variable. " is numeric variable <br>";
	}else{
		echo $variable. " is non numeric variable <br>";
	}
}
checkNumberVariable($a);
checkNumberVariable($b);
checkNumberVariable($c);

//function to check float var
$e = 55.20;
$f = 55;
$g = 3.2;
function validFloat($variable){
	if(is_float($variable)){
		echo $variable. " is float variable <br>";
	}else{
		echo $variable. " is not a float variable <br>";
	}
}
validFloat($e);
validFloat($f);
validFloat($g);


//function to print name
function printMyName($name=null){
	/*if($name){
		echo "Your name is : ".$name;
	}else{
		echo "No name given ";
	}*/

	$printedName = $name ? "Your Name is ".$name : " Kasula <br>";
	echo $printedName;
}
printMyName("Prashant");
printMyName();


//


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

function moddivision(float $a, float $b)
{
	$moddivision = $a % $b;
	echo "The  modular division of $a and $b is $moddivision <br>";
}	
moddivision(19,3);

function rasiepower(float $a, float $b)
{
	$rasiepower = $a ** $b;
	echo "The  power rasie of $a by $b is $rasiepower <br>";
}	
rasiepower(3,2);

//

<ul>

$nav =["Home","About us","Services","Contact"];
foreach ($nav as $key => $value) {
	echo "<li> $value </li>";
}

</ul>

<ul>
<h2>Global var example</body>h2>
$x=5;
$y=6;
$$GLOBALS['z'] = $GLOBLAS['x']+  $GLOBALS['y'] ;
echo $z;

//server example
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
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";



//GLOBAL REQUEST

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  Address: <input type="text" name="address">
  <input type="submit">
</form>

?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  Address: <input type="text" name="address">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	var_dump($_SERVER['REQUEST_METHOD'])
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
       $address = htmlspecialchars($_REQUEST['address']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
    if (empty($address)) {
        echo "address is empty";
    } else {
        echo $address;
    }
}
?>


</body>
</html>