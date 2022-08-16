<html>
    <head>
        <title>php toutrial</title>
    </head>
    <body>
        <?php
            $characterName = "ram";
            $characterAge = 20;
            echo "<p>this is my friend $characterName </p><br>";
            echo  "He is $characterAge  ";
            echo "<h1>$characterName</h1>";
            
        ?>
        <!-- datatypes in php -->
        <?php
            $phrase = "to be or not to be";
            $age = 30;
            $gpa = 2.67;
            $isMale = false;
        ?>

        <!-- strings in php -->
        <?php
        $phrase ="My Academy";
            echo "$phrase";
             // lower and upper case and sstring length
        echo strtolower($phrase)."<br>";
        echo strtoupper($phrase)."<br>";
        echo "The length of the string is:".strlen($phrase)."<br>";
?>
<?php
       $phrase = "Sanjeev";
        // shows the position of the $phrase
        echo $phrase[0]."<br>";
        echo "sanjeev"[6]."<br>";

         $phrase[0] = "R";
        echo $phrase."<br>";

        //string replace
        echo str_replace("jeev","ijuu",$phrase)."<br>";

        //substractimng the 
        echo substr($phrase,3,2);
        ?>
    </body>
</html>