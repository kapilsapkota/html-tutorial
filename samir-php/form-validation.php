<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<style type="text/css">
		.error{
			color:red;
		}
	</style>
</head>
<body>

	<h1>Form Validation Example</h1>
	<?php
	//initialize the empty variable to store form value and errors
		$name = $email = $address = $phone = $remarks = $gender = "";
		$nameError = $emailError = $addressError = $phoneError =$remarksError = $genderError= "";
	?>
	<!-- Form Validation php -->
	<?php
	//check either the request is get or post
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			//Name Validation
			if(empty($_POST['name'])){
				$nameError = "Name is required";
			}
			else{
				$name = checkInput($_POST['name']);
				//username allows only alphabets and white space
				if(!preg_match("/^[a-zA-Z- ]*$/", $name)){
					$nameError="Only letters and whitespaces are allowed";
				}
			}

			//Address Validation
			if(empty($_POST['address'])){
				$addressError = "Address is required";
			}
			else{
				$address = checkInput($_POST['address']);
			}

			//Phone Validation
			if(empty($_POST['phone'])){
				$phoneError = "Phone is required";
			}
			else{
				$phone = checkInput($_POST['phone']);
				if(!filter_var($phone,FILTER_VALIDATE_INT)){
					$phoneError = "Please enter the integer";
				}
			}

			//Email Validation
			if(empty($_POST['email'])){
				$emailError = "Email is required";
			}
			else{
				$email = checkInput($_POST['email']);
				//check the email format
				if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					$emailError="Please enter valid email format";
				}
			}

			//Gender Validation
			if(empty($_POST['gender'])){
				$genderError = "Gender is required";
			}
			else{
				$gender = checkInput($_POST['gender']);
			}

			//Remarks Validation
			if(empty($_POST['remarks'])){
				$remarksError = "Remarks is required";
			}
			else{
				$remarks = checkInput($_POST['remarks']);
			}

		}
		function checkInput($data){
			//trim the white spaces
			$data = trim($data);
			//cut if any slashes
			$data = stripslashes($data);
			//encodes html into encoded html form
			$data = htmlspecialchars($data);

			return $data;
		}
	?>
	<span class="error">*Required Field</span>
	<br><br>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

		Name: <input type="text" name="name" value="<?php echo $name; ?>">
		<span class="error">* <?php echo $nameError; ?></span>
		<br><br>

		Email: <input type="text" name="email" value="<?php echo $email; ?>">
		<span class="error">* <?php echo $emailError; ?></span>
		<br><br>

		Address: <input type="text" name="address" value="<?php echo $address; ?>">
		<span class="error">* <?php echo $addressError; ?></span>
		<br><br>

		Phone: <input type="text" name="phone" value="<?php echo $phone; ?>">
		<span class="error">* <?php echo $phoneError; ?></span>
		<br><br>

		Remarks : <textarea name="remarks"><?php echo $remarks; ?></textarea>
		<span class="error">* <?php echo $remarksError; ?></span>
		<br><br>

		Gender : 
		<input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") {
			echo "checked";} ?> value="Male"> Male
		<input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") {
			echo "checked";} ?> value="Female"> Female
		<input type="radio" name="gender" <?php if (isset($gender) && $gender == "others") {
			echo "checked";} ?> value="Others"> Others
		<span class="error">* <?php echo $genderError; ?></span>
		<br><br>

		<input type="submit" value="submit">
	</form>
	<h2>Your input is :</h2>
	<?php 
		echo "Your name  is $name and address is $address.<br>";
		echo "Your phone is: ".$phone."<br>";
		echo "Your email is: ".$email.".<br>";
		echo "Gender is: ".$gender.".<br>";
		echo "Remarks is: ".$remarks.".<br>";
	?>
</body>
</html>