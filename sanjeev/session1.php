<?php
    session_start();
?>
<html>

<head>
    <titler>Session example</title>
</head>
<body>
<h2>Display session variable</h2>
<?php
    echo "Name is:".$_SESSION['name'];
    echo "color is:".$_SESSION['color'];
    echo "age is:".$_SESSION['age'];

?>
</body>
</html>