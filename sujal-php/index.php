<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>First PHP class</title>
</head>
<body>
	<?php
		echo("This is php<br>");
		$text = "This is the text";

		echo "<b>$text</b><br>";
		$len = strlen($text);
		echo "The length of the $text is ".$len."<br>";

		//to see the position of the text
		$position = strpos($text, "text");
		echo "The position of text in '$text' is $position";

		//to capitalize all the letter
		$capital = strtoupper($text);
		echo "<br> $text is capital: $capital";

		//to reverse the string
		$reverse = strrev($text);
		echo "<br> <b>$reverse </b>";

		//to make all the in lowercase
        $lowercase = strtolower($text);
        echo "<br> $text in small letter :<b> $lowercase</b>";

        //to make the first character capital
        $trial = "coPy";
        $firstCapital = ucfirst($trial);

        //to make the first character small
        $smallTrial = "COPY";
        $firstSmall = lcfirst($smallTrial);
        echo "<br> Capitalize of $trial is <b>$firstCapital</b>";
        echo "<br> Smallize of $smallTrial is <b>$firstSmall</b>"; 

        //example to replace any word by any other
        $replacedText = str_replace('text', 'replaced text', $text);
        echo "<br> $text is replaced as <b>$replacedText</b><br>";

        //for loop practice
        for ($i=0; $i <5 ; $i++) { 
        	// code...
        	echo "<b>Printed</b> ".$i." <b>times</b> <br>";
        }

        //is_int() function chceks either it is int or not and float or not
        $x= 531;
        $y= 65.89;

        if (is_int($x)) {
        	// code...
        	echo $x."69<br>";
        }
        if (is_int($x)) {
        	// code...
        	echo $x."72<br>";
        }
         if (is_int($y)) {
        	// code...
        	echo $y."75<br>";
        }
         if (is_float($x)) {
        	// code...
        	echo $x."78<br>";
        }
         if (is_float($y)) {
        	// code...
        	echo $y."34<br>";
        }
        echo var_dump(is_int($x));
        echo var_dump(is_int($y));

        //for numeric and string or not
        $a= 454;
        $b= 456.78;
        $c= "number";
        if (is_numeric($a)) {
        	// code...
        	echo  "<br>".$a." Is a numeric variable<br>";
        }else{
        	// code...
        	echo $a."is not numeric variable<br>";
        }
        if (is_numeric($b)) {
        	// code...
        	echo  $b."<br>Is=numeric variable<br>";
        }else{
        	// code...
        	echo $b."<br>is not numeric variable<br>";
        }
        if (is_numeric($c)) {
        	// code...
        	echo  $c."<br>Is=numeric variable<br>";
        }else{
        	// code...
        	echo $c."<br>is not numeric variable<br><br>";
        }


        //in order to min the code we use user defined function
        function checkNumerialVariable($variable){
        	if (is_numeric($variable)) {	
        		// code...
        		echo $variable. " is numeric variable <br>";

        	}else{
        		echo $variable. " is not numeric variable <br><br>";
        	}
        }
        	
        checkNumerialVariable($a);
        checkNumerialVariable($b);
        checkNumerialVariable($c);

        function checkFloatVariable($variable){
        	if (is_float($variable)) {	
        		// code...
        		echo $variable. " is float variable <br>";

        	}else{
        		echo $variable. " is not float variable <br>";
        	}
        }
        	checkFloatVariable($a);
        	checkFloatVariable($b);
        	checkFloatVariable($c);

        	function printName($name=null){
        		echo $name. " is my name<br><br>";
        	}
        	printName("sujal");
        	printName();

        	function printanName($name=null){
        	echo $name ? "Your name is ".$name : "<br>John Deep<br>";
        	
        	}
        	printanName("sujal");
        	printanName();

        	function sum(int $a ,int $c){
        		$sum = $a + $c; 
        		echo "The sum of ".$a. " and ".$c. " is =".$sum."<br>";
        	}
        	sum(3,4);

        	function sub(int $g, int $f){
        		return abs($g-$f);
        	}
        	echo "The subtraction is =".sub(2,7)."<br>";

            function product(int $x, int $y){
        		return $x*$y;
        	}
        	echo "The product is =".product(2,7)."<br>";
        	?>


        <h1>Navbar Example</h1>
        <ul>
        <?php
      	$nav=["Home" , "servies", "About Us", "Contact"];
      	foreach ($nav as $key => $value) {
        echo "<li> $value </li>";
      		// code...
      	}
        ?>
        </ul>
        <h2>Global variable Example</h2>
        <?php
        $x=5; 
        $y=6;
        $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
        echo $z;
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
        


        //$_server Example
         ?>    

</body>
</html>