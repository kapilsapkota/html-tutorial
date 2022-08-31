<!DOCTYPE html>
<html>
<head>
	<title>File Upload Example</title>
</head>
<body>
<h1>Uploading File on the server</h1>
<?php
function checkDirectoryExists($folder){
	if (!file_exists($folder)) {
		@mkdir($folder);
	}
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
	print_r($_FILES);
	$folder='images';
	$fileFolder='fileFolder';
	//check if we have folder or not
	checkDirectoryExists($folder);


	//getting the filename
	$file_name = $_FILES['image']['name'];
	$file_tye=$_FILES['image']['type'];
	$file_tmp_path=$_FILES['image']['tmp_name'];
	$file_size=$_FILES['image']['size'];
	$upload=1;

	$targetDir=$folder.'/';
	//taking the target file name inside target directory
	$targetFile=$targetDir.basename($file_name);

	//taking the extension from targetFile
	$fileExtension=strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

	//check the file extension and throw error
	if($fileExtension=='jpg'||$fileExtension=='jpeg'||$fileExtension=='gif'||$fileExtension=='png'){
		$upload=1;}
	else{
		$upload=0;
		echo "We accept only JPG,PNG,";
		}

	//check if file already exists
		if(file_exists($targetFile)){
			$upload = 0;
			echo "Sorry! File already exists!";
		}
	//checking the file size
		if($file_size>2097152){
			$upload =0;
			echo "Sorry! your file is greater than 2 MB";
		}

		//upload the image if all validation passes
		if($upload==0){
			echo"Sorry! Error Uploading Image!";
		}else{
			//upload the image
			if(move_uploaded_file($file_tmp_path, $targetFile)){
				echo"Successfully uploaded file ".$file_name;
			}else{
				echo "Error Uploading file ";
			}
		}
}


?>
<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	<label>Choose your image</label>
	<input type="file" name="image" id="image" accept="image/*">
	<br><br>
	<label>Choose your file</label>
	<input type="file" name="file" id="file" accept=".pdf">
	<br><br>
	<input type="submit" name="" value="upload">
</form>


</body>
</html>