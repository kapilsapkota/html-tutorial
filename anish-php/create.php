<!DOCTYPE html>
<html>
<head>
	<title>File creating in php</title>
</head>
<body>
	<h1>creating a file in php</h1>

<?php

//opening a file named newText.txt.
$file = fopen("newText.txt", "w") or die ('could not write a file');

//string or sentence.
$newText = "Anish\n";

//writing sentences in the file.
fwrite ($file,$newText);
echo " returning the text in the file in anish.php";
fclose($file);

?>



<?php

//opening a file named newText.txt.
$file = fopen("newText.txt", "a") or die ('could not write a file');

//string or sentence.
$newText = "Anish ghorshaine\n";

//writing sentences in the file.
fwrite ($file,$newText);
echo " <br>returning the text in the file in anish.php again";
fclose($file);

?>

</body>
</html>