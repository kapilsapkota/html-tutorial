<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>File Create in php</title>
</head>
<body>
	<h1>File Creating in php</h1>
	<?php
	$file = fopen("newText.txt", "w") or die('Could not write the file');

	//stringnor sentance
	$newText = "My Name \n";
	//Writing sentences in newText.txt
	fwrite($file, $newText);

    //another text written
	$newText = "My Name 2 \n";
	fwrite($file, $newText);

	//extra text for read operation
	$newText1 = "Web development \n PHP \n Symfony \n Codeignitor \n Laravel \n";
	fwrite($file, $newText1);

	

	//echo "Successfully written $newText in $file";

	//close the file after completing work
	fclose($file);
	?>
	<?php
	$file = fopen('newText.txt', "r");
	while (!feof($file)){
		fread($file, filesize("newText.txt"));
	}
	fclose($file);

	?>

</body>
</html>