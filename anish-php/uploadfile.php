<!DOCTYPE html>
<html>
<head>	
	<title>File Upload</title>
</head>
<body>
	<h1>UPLOADING A FILE ON THE SERVER</h1>
<?php
function checkDirectoryExists($folder){
	if (!file_exists($folder)){
		@mkdir($folder);
	}
}
if ($_SERVER['REQUEST_METHOD']== 'POST'){
	$folder = 'uploads';
	//check if we have folder in server or not.
	if(!file_exists($folder)){
		@mkdir($folder);
	}
}
	$file_name = $_FILES['image']['name'];
	$file_type= $_FILES['image']['type'];
	$file_tmp_path= $_FILES['image']['tmp_name'];
	$file_size= $_FILES['image']['size'];
	$upload =1;

	$targetDir = $folder.'/';
	$targetFile= $targetDir.basename($file_name);
	$fileExtension = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
	//check the file extension throw error if any.
	if($fileExtension=='jpg' || $fileExtension=='jpeg' || $fileExtension == 'gif' || $fileExtension == 'png'){
		$upload=1;
	}else{
		$upload=0;
	}

	//check if the file already exist.
	if(file_exists($targetFile)){
		$upload=0;
		echo "file already exists!";
	}
	if($fileExtension=="jpg"){

	}
	//checking the file size.
	if($file_size > 2097152){
		$upload =0;
		echo "the file size must be less than 2 mb";
	}
	if($upload == 0){
		echo "error while uploading the file!";
	}else{
		//upload the image/file.
		if (move_uploaded_file($file_tmp_path, $targetFile)){
			echo "uploaded the file".$file_name;
		}else{
			echo " error occered";
		}
	}

//uploading the pdf.
$file_name = $_FILES['file']['name'];
	$file_type= $_FILES['file']['type'];
	$file_tmp_path= $_FILES['file']['tmp_name'];
	$file_size= $_FILES['file']['size'];
	$upload =1;

	$targetDir = $folder.'/';
	$targetFile= $targetDir.basename($file_name);
	$fileExtension = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
	//check the file extension throw error if any.
	if($fileExtension=='pdf')
	{
	$upload=1;
	}else{
		$upload=0;
	}

	//check if the file already exist.
	if(file_exists($targetFile)){
		$upload=0;
		echo "file already exists!";
	}

	//checking the file size.
	if($file_size > 2097152){
		$upload =0;
		echo "the file size must be less than 2 mb";
	}
	if($upload == 0){
		echo "error while uploading the file!";
	}else{
		//upload the image/file.
		if (move_uploaded_file($file_tmp_path, $targetFile)){
			echo "uploaded the file".$file_name;
		}else{
			echo " error occered";
		}
	}




?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
	<label>choose your image</label>
	<input type="file" name="image" id="image" accept="image/*">
	<br>
	<br>
	<label>choose your file</label>
	<input type="file" name="file" id="file" accept=".pdf">
	<br>
	<br>
	<input type="submit" name="" value="upload">

</form>
</body>
</html>