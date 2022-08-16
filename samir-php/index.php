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

//function summ(int$a,int$b){
//	$sum=$a+$b;
//	echo "<br><br>The sum of $a and $b is: $sum.";
//}

//summ(3,3);
//summ(5,6);


function sum(int$a,int$b){
	return $a+$b;
	
}
echo "<br><br>The sum of 3 and 9 is: ".sum(3,9);

function difference(int$a,int$b){
	$diff=$a-$b;
	echo "<br><br>The diff of $a and $b is: $diff.";
}
difference(5,2);


function product(int$a,int$b){
	return $a*$b;
	
}
echo "<br><br>The product of 3 and 4 is: ".product(3,4);


function division(int$a,int$b){
	return $a/$b;
	
}
echo "<br><br>The division of 8 and 2 is: ".division(8,2);

 ?>




<h1>NavBar Example<h1>

<ul>
<?php

$nav=["Home","About","Services","Contact"];
foreach ($nav as $key => $value) {
	echo "<li> $value </li>";
	
}

?>
</ul>
<h2>Global Variable Example</h2>
<?php
	$x=5;
	$y=6;
	$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
	echo $z."<br><br>";

	//_$SERVER Example
	echo $_SERVER['PHP_SELF'];
	echo "<br><br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br><br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br><br>";
	//echo $_SERVER['HTTP_REFERRER'];
	echo "<br><br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br><br>";
	echo $_SERVER['SCRIPT_NAME'];
	echo "<br><br>";
	echo $_SERVER['SERVER_ADDR'];
	echo "<br><br>";
	echo $_SERVER['SERVER_SOFTWARE'];
	echo "<br><br>";

	echo $_SERVER['GATEWAY_INTERFACE'];
	echo "<br><br>";
	echo $_SERVER['SERVER_PROTOCOL'];
	echo "<br><br>";
	echo $_SERVER['REQUEST_METHOD'];
	echo "<br><br>";
	echo $_SERVER['REQUEST_TIME'];
	echo $_SERVER['QUERY_STRING'];
	echo "<br><br>";
	echo $_SERVER['HTTP_ACCEPT'];
	echo "<br><br><br><br>";

?>

//POST METHOD
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	 Name: <input type="text" name="fname">
	 Address: <input type="text" name="address">
	 <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//var_dump($_REQUEST);
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    $address = htmlspecialchars($_REQUEST['address']);
    if (empty($name)) {
        echo "<br>Name is empty";
    } else {
        echo "<br>Name is ".$name;
    }
    if (empty($address)) {
        echo "<br>Address is empty";
    } else {
        echo "<br>Address is ".$address;
    }
}
?>

//GET METHOD
<form method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	 Userame: <input type="text" name="username">
	 Class: <input type="text" name="class">
	 Phone No.: <input type="text" name="phone">
	 <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	//var_dump($_REQUEST);
    // collect value of input field
    $username = htmlspecialchars($_REQUEST['username']);
    $class = htmlspecialchars($_REQUEST['class']);
    $phone = htmlspecialchars($_REQUEST['phone']);
    if (empty($username)) {
        echo "<br>Userame is empty";
    } else {
        echo ".<br>Username is ".$username;
    }
    if (empty($class)) {
        echo ".<br>Class is empty";
    } else {
        echo ".<br>Class is ".$class;
    }
    if (empty($phone)) {
        echo ".<br>Phone No. is empty";
    } else {
        echo ".<br>Phone No. is ".$phone;
    }
    echo "<br><br>";
}
?>
<?php
//preg_match function
$str = "This is Nist College";
$pattern = "/nist/i";
echo "This is initial text: ".$str."<br>";
echo preg_match($pattern, $str)."<br>";

$check = preg_match($pattern, $str);
if($check==1)
{
	echo preg_replace($pattern, "My", $str);
}
else
{
	echo "<br><br>";
}
?>

</body>
</html>