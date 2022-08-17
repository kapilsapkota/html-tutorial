<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>First PHP Class</title>
</head>
<body>
  <?php
< HEAD
echo "<h1>Ale magar </h1>";
print("here <br>");
$text="This is the text";
echo "$text <br>";
$a=1;
$b=2;
$sum=$a+$b;
echo "the sum of $a and $b is $sum <br> ";
function printName($name=null){
	echo $name," is my name<br>";
}
printName("rijesh");
function sum(int $a, int $b){
	return $a+$b;}
	echo"the sum of 2 and 3 is ".sum(2,3)." <br>";

      echo "<h1>sanjeev</h1>";
      print("here <br>");
      $text="This is the text";
      echo "$text <br>";
      $a=1; 
      $b=2;
      $sum=$a+$b;
      echo "the sum of $a and $b is $sum <br> ";
      function printName($name=null){
      	echo $name," is my name<br>";
      }
      printName("sanjeev  ");
      function sum(int $a, int $b){
      	return $a+$b;}
      	echo"the sum of 2 and 3 is ".sum(2,3)." <br>";
  

      	function difference(int $a, int $b){
      		return $a-$b;
      	}
      	echo "the difference of 3 & 2 is".difference(3,2)."<br> ";
      function product(int $a , int $b)
      {
      return $a*$b;
      }
      echo "the product of 2 and 3 is ".product(2,3)."<br>";
        ?>
        <H1>NAVBAR EXAPMLE</H1>
        <ul>
  <?php
      $nav=["HOME","SERVICES","ABOUT US","CONTACT"];
       foreach ($nav as $key => $value) {
       	echo "<li> $value </li>";
       }
      ?>

    </ul>
    <h2>Global Variable Example</h2>

<?php
        $x=5;
        $y=6;
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        echo $z;
        //$_SERVER EXAMPLE
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
        ?>
        <form method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        	Name: <input type="text" name="fname">
        	Address: <input type="text" name="address">
        	<input type="submit">
        </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
    	var_dump($_SERVER['REQUEST_METHOD']);

        // collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name ;
            echo "<br>";
        }
            $address = htmlspecialchars($_REQUEST['address']);
        if (empty($address)) {
            echo "Address is empty";
        } else {
            echo $address;
        }
    }

?>

<?php
      // preg_match() example   
      $str = "nist is my college ";
      echo "this is inital string:" .$str."<br>";
      $pattern ="/nist/i";
      echo preg_match($pattern, $str);//output 1

      $check = preg_match($pattern, $str);
      if ($check == 1) {
        echo preg_replace($pattern, "hello", $str);
      }
      else{
        echo "nist is my college";
      }

?>
</body>
</body>
</html>