<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP class</title>
</head>
<body>
    <?php
        $text="This Is The Text";
        echo "<h1>My heading</h1>";
        print("hello<br>");
        echo("$text<br>");
        $len=strlen($text);
        echo $len."<br>";
        print("<br>");
        $wordcount= str_word_count($text);
        echo "this is word length in  '$text'=".$wordcount."<br>";
        $reverse= strrev($text);
        $position = strpos($text, "the");
        print("<br> the position is $position<br>");
        $lowercase=strtolower($text);
        $firstcapital= ucfirst($lowercase);
        echo "here 1st letter is capital '$firstcapital'"."<br>";
        $firstsmall=lcfirst($text);
        echo "here is 1st smalll '$firstsmall'<br>";
        echo "<b>$lowercase</b> <br>";
        $replace= str_replace('Text', 'no text',$text);
        echo "text is replaced '$replace'<br>";
        echo $reverse; 
        for($i=0; $i<5; $i++){
            echo "<br>this is repeated $i <br>";
        }
        //is_int function
        $x=531;
        $y=65.89;
        echo var_dump($x);
        echo var_dump($y)."<br>"; 
        if(is_int($x)){
            echo "hello ".$x."is int<br>";
        }
        if(is_float($y)){
            echo "hello ".$y."is float<br>";
        }
        //is_numeric() function gives true value if the string is numeric
        $a=456;
        $b="456";
        $c="asdasd";
        function CheckNumericVar($variable){
        if(is_numeric($variable)){
            echo $variable." is numeric<br><br>";
        }
        else {
            echo $variable." IS NOT NUMERIC<br><br>";
        }
        }
        function isNum($variable){
            if(is_int($variable)){
                echo $variable." is integer<br>";
            }
            else if(is_float($variable)){
                echo $variable." is  float<br>";
            }
            else{
                echo "i dont know";
            }
        }
        function printMyName($name=null){
            // if($name){
            //     echo "given name is ".$name."<br>";
            // }
            // else{
            //     echo "youu are john doe<br>";
            // }
            echo $prntedName = $name ? "given name is ".$name."<br>" : "youu are john doe<br>";
    
    }
        printMyName("asim");
        printMyName(); 
        isNum($x);
        isNum($y);
        CheckNumericVar($a);
        CheckNumericVar($b);
        CheckNumericVar($c);

        echo var_dump(is_int($x));  
        echo var_dump(is_int($y))."<br>";     
        $a=1;
        $b=2;
        $sum=$a+$b;
        echo("<bR>sum = $sum");
    ?>
</body>
</html>