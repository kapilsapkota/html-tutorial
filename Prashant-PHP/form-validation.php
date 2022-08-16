<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Validation</title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>	
</head>
<body>

	<h1>Form Validation Example</h1>

<?php
	//initialize the empty variable to store form value and errors

	$name = $email = $address = $phone = $remarks = $gender = "";
	$nameError = $emailError = $addressError = $phoneError = $remarksError = $genderError = "";

?>
	<!-- Form Validation php-->

	<?php
		if($_SERVER["REQUEST_METHOD"]== "POST")
		{
				//Name Validation
				if (empty($_POST['name'])) {
					$nameError = "Name is required";
				}else{
					$name = checkInput($_POST['name']);
				}

				//E-mail Validation
				if (empty($_POST['email'])) {
					$emailError = "E-mail is required";
				}else{
					$email = checkInput($_POST['email']);
				}

				//Address Validation
				if (empty($_POST['address'])) {
					$addressError = "Address is required";
				}else{
					$address = checkInput($_POST['address']);
				}

				//Phone no. Validation
				if (empty($_POST['phone'])) {
					$phoneError = "Phone no. is required";
				}else{
					$phone = checkInput($_POST['phone']);
				}

				//Remarks Validation
				if (empty($_POST['remarks'])) {
					$remarksError = "remarks is required";
				}else{
					$remarks = checkInput($_POST['remarks']);
				}

				//Remarks Validation
				if (empty($_POST['gender'])) {
					$genderError = "Gender is required";
				}else{
					$gender = checkInput($_POST['gender']);
				}




		}

		function checkInput($data){

			$data = trim($data); //trim the whitespaces

			$data = stripslashes($data); //cut if any slashes

			$data = htmlspecialchars($data); //encodes html into encoded html form

			return $data;
		}
	?>
	<span class="error">* Required Field
	<br><br>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

		Name : <input type="text" name="name" value="<?php echo $name;?>">
		<span class="error">* <?php echo $nameError; ?></span>

		<br><br>

		E-mail : <input type="email" name="email" value="<?php echo $email;?>">
		<span class="error">* <?php echo $emailError; ?></span>

		<br><br>

		Address : <input type="text" name="address" value="<?php echo $address;?>">
		<span class="error">* <?php echo $addressError; ?></span>

		<br><br>

		Phone no. : <input type="number" name="phone" value="<?php echo $phone;?>">
		<span class="error">* <?php echo $phoneError; ?></span>

		<br><br>

		Remarks: <textarea name="remarks">
			
			<?php echo $remarks; ?>
		</textarea>

		<span class="error">* <?php echo $remarksError; ?></span>

		<br><br>


		Gender :

			<input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender == "male") { echo "checked";}?> value = "male">Male

			<input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender == "female") { echo "checked";}?> value = "female">Female

			<input type="radio" name="gender" value="others" <?php if (isset($gender) && $gender == "others") { echo "checked";}?> value = "others">Others

		<span class="error">* <?php echo $genderError; ?></span>

		<br></br>

		<input type="submit" value="submit">

	</form>

	<h2>Your Input is : </h2>

	<?php 
		echo $name."<br>".$address."<br>";
		echo $phone;
		echo "<br>";
		echo $phone;
		echo "<br>";
		
	?>
	</span>



</body>
</html>