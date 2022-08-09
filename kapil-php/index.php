<!DOCTYPE html>
<html>
<head>
	<title>First PHP CLASS</title>
	<link rel="stylesheet" type="text/css" href="s">
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

//is_int() function checks either it is integer or not and retuns either true or false
$x= 531;
$y = 65.89;

echo (int)$y;

if(is_int($x)){
	echo "This is integer 69: ".$x."<br>";
}
if(is_int($y)){
	echo "This is integer 72: ".$y."<br>";
}
//is_float() function checks either it is integer or not and retuns either true or false

if(is_float($x)){
	echo "This is float 75: ".$x."<br>";
}
if(is_float($y)){	
	echo "This is float 78: ".$y."<br>";
}
//is_numeric() checks whether the given string is numeric or not and returns either true or false
$a = 454;
$b = "454";
$c = "number";
//checks either $a is numeric or not
if(is_numeric($a)){
	echo $a. " is numeric variable <br>";
}else{
	echo $a. " is non numeric variable <br>";
}

if(is_numeric($b)){
	echo $b." is numeric variable <br>";
}else{
	echo $b." is non numeric variable <br>";
}
if(is_numeric($c)){
	echo $c." is numeric variable <br>";
}else{
	echo $c." is non numeric variable <br>";
}

//in order to minimize the code we use user defined function
function IsNumeric($variable){
	if(is_numeric($variable)){
		echo $variable. " is numeric variable <br>";
	}else{
		echo $variable. " is non numeric variable <br>";
	}
}
function IsFloat($variable){
	if(is_float($variable)){
		echo $variable. " is float variable <br>";
	}else{
		echo $variable. " is non float variable <br>";
	}
}
IsNumeric("School");
IsNumeric($b);
IsNumeric($c);
IsFloat(1.85);
IsFloat(1);

function printYourName($name=null){
	// if($name)
	// 	echo "Your Name is ".$name;
	// else 
	// 	echo "John Doe";

	// $printedName = $name ?  "Your Name is ".$name : "John Doe";
	// echo $printedName;
	echo $name ?  "Your Name is ".$name."<br>" : "John Doe <br>";
}
printYourName("Kapil Sapkota");
printYourName();

function sum(int $a , int $b){
	return  $a + $b;
}
function difference(int $a , int $b){
	return $a - $b;
}
function product(int $a, int $b){
	return $a * $b;
}
function quotient(int $a, int $b)
{
	return $a/$b;
}
echo "The sum of 2 and 3 is ".sum(2,3)."<br>";




?>

<h1> nav bar example</h1>
<ul>
	<?php 

$nav=["HOME", "SERVIES","ABOUT US" ," CONTACT"];
foreach ($nav as $key => $value) {
	echo "<li> $value </li>";
}

?>
</ul>
<h2>Global Variable Example</h2>
<?php 
	$x = 5;
	$y = 6;
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
	echo $z;

	//$_SERVER Example
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
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo $_SERVER['SERVER_PROTOCOL'];
echo "<br>";


?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	 Name: <input type="text" name="name" value="">
	 Address: <input type="text" name="address">
	 MobileNo: <input type="text" name="mobile_no">
  <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	echo "<br>";
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']);
    $address = htmlspecialchars($_REQUEST['address']);
    if (empty($name)) {
        echo "Name is empty";
        echo "<br>";
    } else {
        echo "Name is ".$name;
         echo "<br>";
    }
    if (empty($address)) {
        echo "Address is empty";
         echo "<br>";
    } else {
        echo "Address is ".$address;
         echo "<br>";
    }
}
?>

</body>
</html>