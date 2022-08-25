<html>
    <head></head>
    <body>
    <?php
        $file = fopen("text.txt","w")or die('could not open the file');

        $text = "My name\n";

        fwrite($file,$text);

       fclose($file);
    ?>

    <?php
     $file = fopen("text.txt","r")or die('could not read');

        fread($file,text.txt);

    fclose($file);
    ?>
    </body>
</html>