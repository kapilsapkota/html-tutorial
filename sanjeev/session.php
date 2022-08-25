<?php
    session_start();
?>
<html>

    <head>
        <title>Session example</title>
    </head>
    <body>
    <?php
        //destroy the session 
        //session_destroy();
        $_SESSION['name'] = "sanjeev";
        $_SESSION['color'] = "red";
        $_SESSION['age'] = "10";
        echo "Session variable are set!";
    ?>
    <h2>Display session variable</h2>
    <?php
        echo "Name is:".$_SESSION['name'];
        echo "color is:".$_SESSION['color'];
        echo "age is:".$_SESSION['age'];

    ?>
    </body>
</html>