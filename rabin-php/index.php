<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>First PHP class</title>
</head>
<body>
	<?php 
	echo "<h1>My heading</h1>";
	print("Here<br>");
	$text="This is the text";
	var_dump($text)
	?>
	<br>
	<?php
	$text="This is the text";
	//to check the length of the string
	$len=strlen($text);
	echo  "the length of $text is".$len."<br>";

	//to count the number of words in any string
	$countword=str_word_count($text);
	echo "The number of word in $text is". $countword."<br>";

	//to reverse any string
	$reverse=strrev($text);
	echo $reverse."<br>";

	//to find the position of any text inside string
	$position = strpos($text, "text");
	echo "the position of text in '$text' is $position";

	//to capitalize all the letter 
	$capital=strtoupper($text);
	echo"<br>$text in capital: <b>$capital<br></b><br>";

	//to make all letters in lowercase
	$lowercase=strtolower($text);
	echo"<br> $text in small letter :<b> $lowercase</b><br>";

	//to make the first character capital 
	$trial="coPy";
	$firstCapital=ucfirst($trial);

	//to make first character lowercase
	$smallTrial="COPY";
	$firstSmall=lcfirst($smallTrial);

	echo "<br> Capitalize of $trial is <b>$firstCapital</b>";
	echo"<br> First lowercase of $smallTrial is <b> is $firstSmall</b><br>";

	//example to replace any word by any other
	$replacedText =str_replace('text','replaced text',$text);
	echo "<br> $text is replaced as <b>$replacedText</b><br>";
    
    //for loop practice
	for ($i=0;$i<5;$i++){
		#code...
		echo "printed".$i."times<br>";
	}

	//is_int() function checks either it is int or not
	$x=531;
	$y=65.89;
	echo var_dump($x);
	echo var_dump($y)."<br>";
	
	if (is_int($x)) {
		echo"This is integer 69:".$x."<br>";
	}

	if(is_int($y)){
		echo"This is integer 72:".$y."<br>";
	}
	if (is_float($x)) {
		echo"This is float 75:".$x."<br>";
		// code...
	}
	if (is_float($y)) {
		echo "This is float 78:".$y."<br>";
		// code...
	}

	//is_numeric() checks whether the given string is numeric or not and returns either true or false
	$a=454;
	$b="454";
	$c=111;
	if (is_numeric($a)) {
		echo $a."is numeric variable <br>";
	}else{
		echo $a."is non numeric variable<br>";
	}


	if (is_numeric($b)) {
		echo $b."is numeric variable <br>";
	}else{
		echo $b."is non numeric variable<br>";
	}

	if (is_numeric($c)) {
		echo $a."is is_numeric variable <br>";
	}else{
		echo $a."is non numeric variable<br>";
	}

    //in order to minimize the code we use user defined function
    function IsNumeric($variable){
    	if(is_numeric($variable)){
    		echo $variable. "is numeric variable <br>";
    	}else{
    	echo $variable. "is non numeric variable <br>";
    }
}


    IsNumeric($a);
    IsNumeric($b);
    IsNumeric($c);
	





	echo var_dump(is_int($x));
	echo var_dump(is_int($y));



	$a=1;
	$b=2;
	$sum=$a+$b;
	echo "The sum is $a and $b is $sum<br>";

	function printName($name=null){
		echo $name," is my name<br>";
	}
	printName("rabin");
	
	function printYourName($name=null){
	//	if($name)
	//		echo "your Name is ".$name;
	//	else
	//		echo"Viper";
	//$printedName=$name? "Your Name is".$name:"Viper";
	//echo $printedName;
	}
	printYourName("Rabin Shrestha");
	printYourName();

	function sum(int $a, int $b){
		return $a+$b;
	}
	echo "The sum of 2 and 3 is ".sum(2,3)."<br>";
     
    function difference(int $a, int $b){
    	return $a-$b;
    }
    echo"The difference of 2 and 3 is ".difference(2,3)."<br>";
    
    function product(int $a, int $b){
    	return $a*$b;
    }
    echo"The product of 2 and 3 is ".product(2,3)."<br>";
    
     ?>

     <h1>Nav Bar Examples</h1>
     <ul>
     <?php
       $nav=["Home","Services","About us","contact"];
       foreach($nav as $key => $value){
       	echo"<li> $value </li>";

       }

     ?>
 </ul>
 <h2>Global Variable Examples</h2>
 <?php
 $x=5;
 $y=6;
 $GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'] ;
 echo $z;

 //$_SERVER Examples
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

 ?>



</body>
</html>