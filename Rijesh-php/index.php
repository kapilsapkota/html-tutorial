<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>First PHP Class</title>
</head>
<body>
  <?php
echo "<h1>my heading </h1>";
print("here <br>");
$text="This is the text";
$len =strlen($text);
echo "$text <br>";
echo "the length of the string is".$len."<br>";
$countWord = str_word_count($text);
echo "The number of word in $text is".$countWord."<br>";
// to reverse and string
$reverse = strrev($text);
echo $reverse."<br>";
// to find the postion of any text inside string
$position = strpos($text, "text");
echo "The  Postion Of text in 'text' is $position <br>";
// to capitalize the letter
$capital = strtoupper($text);
echo "$text is capital: <b>$capital</b><br>";
// to make all the lowercase
$lower = strtolower($text);
echo "$text is lower : <b>$lower</b><br>";
//to make the first letter capital
$trial ="rijESH";
$firstcapital=ucfirst($trial);
// to make first letter lower
$smalltrail = "RIJESH";
$firstsmall=lcfirst($smalltrail);
echo "capital of firsttrial $trial is: <b>$firstcapital</b> <br> lower of first small $smalltrail is  : <b>$firstsmall</b><br>";
// example to replace any word than other
$replacedtext=str_replace('text','replaced text', $text);
echo "$text replaced as <b>$replacedtext</b><br>";
//for loop trial
for ($i=0; $i <5 ; $i++) { 
	#code...
	echo"printed".$i."times <br>";
	}
$a=1;
$b=2;
$sum=$a+$b;
echo "the sum of $a and $b is $sum ";

  ?>
</body>
</html>