<!DOCTYPE html>
<html>
<head>
	<title>File Upload Example</title>
</head>
<body>
<h1>Uploading File on the server</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
	<label>Choose your image</label>
	<input type="file" name="image" id="image" accept="image/*">
	<br>
	<br>
	<label>Choose your file</label>
	<input type="file" name="file" id="file" accept="">
	<br>
	<br>
	<input type="submit" name="" value="Upload">
</form>
<?php 

function checkDirectoryExists($folder){
	// check if we have folder in server or not
	if(!file_exists($folder)){
		@mkdir($folder);
	}
}
function checkFileSize($file_size,$exact_file_size, $message, $checkingVariable){
	if($file_size > $exact_file_size){
		$checkingVariable = 0 ;
		echo $message;
	}
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$folder = 'images';
	// check if we have folder in server or not
	checkDirectoryExists($folder);

	//getting the imagename
	$file_name = $_FILES['image']['name'];
	$file_type =$_FILES['image']['type'];
	$file_tmp_path = $_FILES['image']['tmp_name'];
	$file_size = $_FILES['image']['size'];
	$upload = 0;

	$targetDir = $folder.'/';
	//taking the target file name inside target directory 
	$targetFile = $targetDir.basename($file_name);
	
	//taking the extension from targetFile
	$fileExtension = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

	//check the file extension and throw error
	if($fileExtension == 'jpg' || $fileExtension == 'jpeg' || $fileExtension == 'gif' || $fileExtension == 'png' ){
		$upload = 1;
	}else{
		$upload = 0;
		echo "We accept only JPG, PNG, JPEG, GIF extension";
	}

	//check if file already exists
	if(file_exists($targetFile)){
		$upload = 0;
		echo "Sorry! File already exists!";
	}

	//checking the file size
	checkFileSize($file_size,2097152,"Sorry! your file is greater than 2 MB",$upload);


	//upload the image if all validation passes
	if ($upload == 0) {
		echo "Sorry! Error Uploading Image!";
	}else{
		//upload the image 
		if (move_uploaded_file($file_tmp_path, $targetFile)) {
			# code...
			echo "Successfully Uploaded file ".$file_name;
		}else{
			echo "Error Uploading Image";
		}
	}


	$fileFolder = 'files';
	//files folder check and create
	checkDirectoryExists($fileFolder);
	
	//getting the filename
	$file_name_file = $_FILES['file']['name'];
	$file_typ_file =$_FILES['file']['type'];
	$file_tmp_path_file = $_FILES['file']['tmp_name'];
	$file_size_file = $_FILES['file']['size'];
	$uploadFile = 0;
	$targetDirFile = $fileFolder.'/';
	//taking the target file name inside target directory 
	$targetFileFile = $targetDirFile.basename($file_name_file);
	
	//taking the extension from targetFile
	$fileExtensionFile = strtolower(pathinfo($targetFileFile,PATHINFO_EXTENSION));

	//check the file extension and throw error
	if($fileExtensionFile == 'pdf' ){
		$uploadFile = 1;
	}else{
		$uploadFile = 0;
		echo "We accept only PDF extension";
	}

	//check if file already exists
	if(file_exists($targetFileFile)){
		$uploadFile = 0;
		echo "Sorry! File already exists!";
	}

	//checking the file size
	checkFileSize($file_size_file,5242880,"Sorry! your file is greater than 5 MB",$uploadFile);
	// if($file_size_file > 5242880){
	// 	$uploadFile = 0 ;
	// 	echo "Sorry! your file is greater than 5 MB";
	// }

	//upload the image if all validation passes
	if ($uploadFile == 0) {
		echo "Sorry! Error Uploading PDF file!";
	}else{
		//upload the image 
		if (move_uploaded_file($file_tmp_path_file, $targetFileFile)) {
			# code...
			echo "Successfully Uploaded PDF file ".$file_name_file;
		}else{
			echo "Error Uploading PDF file";
		}
	}
}
?>

</body>
</html>