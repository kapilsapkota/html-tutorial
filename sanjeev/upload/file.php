<html>
    <head></head>
    <body>
    <?php
        $file = fopen("text.txt","w")or die('could not open the file');

        $text = "My name\n";

        fwrite($file,$text);
        $fclose($file);
    ?>
    </body>
</html>