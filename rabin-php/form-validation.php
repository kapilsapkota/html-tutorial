<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Validation</title>
	<style type="text/css"> 
		/*//css inside head internal css//*/
		.error{
			color: red;
		}
	</style>
</head>
<body>
	<h1>Form validation Example</h1>
	<?php
	$name = $email = $address = $phone = $remarks = $gender="";
	$nameError = $emailError = $addressError = $phoneError = $remarksError = $genderError="";
	?>
	<!--Form Validation php -->
	<?php

	//check either the request is get or post  
	if ($_SERVER['REQUEST_METHOD']=="POST") {
		// code...
		//name validation {
	if(empty($_POST['name'])){
			$nameError="Name is required";
		
	}else{
		$name =checkInput($_POST['name']);
	}


	if(empty($_POST['address'])){
			$addressError="address is required";
		
	}else{
		$address =checkInput($_POST['address']);
	}

	if(empty($_POST['email'])){
			$emailError="email is required";
		
	}else{
		$email =checkInput($_POST['email']);
	}

	if(empty($_POST['phone'])){
			$phoneError="phone is required";
		
	}else{
		$phone =checkInput($_POST['phone']);
	}
	if(empty($_POST['remarks'])){
			$remarksError="remarks is required";
		
	}else{
		$remarks =checkInput($_POST['remarks']);
	}

	if(empty($_POST['gender'])){
			$genderError="gender is required";
		
	}else{
		$gender =checkInput($_POST['gender']);
	}



	}
	function checkInput($data){
		//trim the whitespaces
		$data= trim($data);
		//cut if any slashes
		$data=stripcslashes($data);
		//encodes html into encoded html form 
		$data= htmlspecialchars($data);

		return $data;
	}
	?>
	<span class="error">*Required Field</span>
	<br><br>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		Name:<input type="text" name="name" value="<?php echo $name; ?>">
		<span class="error">*<?php echo $nameError; ?></span>
		<br><br>
		Email:<input type="email" name="email" value="<?php echo $email; ?>">
		<span class="error">*<?php echo $emailError;?></span>
		<br><br>
		Adress:<input type="text" name="address" value="<?php echo $address; ?>">
		<span class="error">*<?php echo $phoneError; ?></span>
		<br><br>
		Phone:<input type="number" name="phone" value="<?php echo $phone; ?>">
		<span class="error">*<?php echo $phoneError;?></span><br>
		<br><br>
		Remark:<textarea name="remarks">
			<?php echo $remarks; ?>
		</textarea>
		<span class="error">*<?php echo $remarksError; ?></span>
		<br><br>

		Gender:
		<input type="radio" name="Gender" <?php if (isset($gender)&&$gender=="male") {echo"checked";} ?> value="male">Male
		<input type="radio" name="Gender" <?php if (isset($gender)&&$gender=="female") {echo"checked";} ?> value="female">Female
		<input type="radio" name="Gender" <?php if (isset($gender)&&$gender=="others") {echo"checked";} ?> value="others">Others
		<span class="error">*<?php echo $genderError; ?></span>
		<br><br>
		<input type="submit" value="submit">




	</form>

	<h2>Your input is :</h2>
	<?php 
	echo $name."<br>".$address."<br>";
	echo $phone;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $remarks;
	echo "<br>";
	?>

</body>
</html>