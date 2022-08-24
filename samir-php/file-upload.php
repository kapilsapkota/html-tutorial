<!DOCTYPE html>
<html>
<head>
	<title>File Upload Example</title>
</head>
<body>
<h1>Uploading File on the server</h1>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$folder='images';
	//check if we have folder or not
	if (!file_exists($folder)) {
		@mkdir($folder);
	}
	$target=$folder.'/';
	var_dump($_FILES);
}
?>
<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	<label>Choose your file</label>
	<input type="file" name="image" id="image">
	<br><br>
	<input type="submit" name="" value="upload">
</form>


</body>
</html>