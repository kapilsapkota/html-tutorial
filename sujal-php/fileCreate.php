<!DOCTYPE html>
<html>
<head>
	<title>File Create in php</title>
</head>
<body>
<h1>File Creating in php</h1>

<?php
//Create or open the file named newText.txt in write mode
$file = fopen("newText.txt", "w") or die('Could not write the file');

//string or sentence
$newText = "My Name \n";

//writing sentence in newText.txt
fwrite($file, $newText);

$newText = "My Name 2 \n";
fwrite($file, $newText);

// echo "Successfully written $newText in newText.txt";
//close the file after completing work
fclose($file);

?>

<?php
//Create or open the file named newText.txt in write mode
$file = fopen("newText.txt", "w") or die('Could not write the file');

//string or sentence
$newText = "My new file \n<br>";

//writing sentence in newText.txt
fwrite($file, $newText);
$limit = 10;
while ($limit != 0) {
	$limit = $limit -1;
	$newText1 ="WEB DEVELOPMENT \n PHP \n SYMFONY \n CODEIGNITOR \n LARAVEL \n<br>";
fwrite($file, $newText1);
}


// echo "Successfully written $newText1 in newText.txt";
//close the file after completing work
fclose($file);

?>


<?php
	//opening file in read mode to read the content
	$file = fopen('newText.txt', "r") or die('Could not read');

	//read until the filesize of given file
	echo fread($file, filesize('newText.txt'));

	fclose($file);
?>
</body>
</html>