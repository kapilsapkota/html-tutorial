<!DOCTYPE html>
<html>
<head>
	<title>form validation</title>
	<style type="text/css">
		.error{
			color:red;
		}
	</style>
</head>
<body>
	<h1>for the form validation </h1>
	<?php
//initializing the variales to be empty.
	$name = $email = $phone = $remarks = $date= $address = $gender ="";
	$nameError = $emailError = $phoneError = $dateError= $remarksError = $addressError = $genderError = "";


	?>	
	<!-- Form validation php -->

	<?php
	//checks either the request is get or post.
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		#code....
		//name validation .
		if (empty($_POST['name'])){
			$nameError ="Name is required";
		}
		else{
			$name = checkInput($_POST['name']);
			//user name consists of alphabets and white spaces only.
			if(!preg_match("/^[a-z A-Z-]*$/", $name)){
				$nameError = "only letters and white spaces are allowed";
			}
		}
		IF(empty($_POST['email'])){
			$emailError = "Email required";
		}else{
			$email = checkInput($_POST['email']);
			//check the format of the email.
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$emailError = "please enter a valid email";
				}
		}
		IF(empty($_POST['date'])){
			$dateError = "date required";
		}else{
			$date = checkInput($_POST['date']);
		}

		IF(empty($_POST['remarks'])){
			$remarksError = "give the remarks";
		}else{
			$remarks = checkInput($_POST['remarks']);
		}
		IF(empty($_POST['phone'])){
			$phoneError = "number required";
		}else{
			$phone = checkInput($_POST['phone']);
			if(!filter_var($phone,FILTER_VALIDATE_INT)){
				$phoneError = "Please enter the integers only";
			}
		}
		IF(empty($_POST['address'])){
			$addressError = "address required";
		}else{
			$address = checkInput($_POST['address']);
		}



	}

	function checkinput($data){
		//trim the data.
		$data = trim($data);
		//cut the slashes.
		$data = stripcslashes($data);
		//encodes html into encoded html form.
		$data = htmlspecialchars($data);
		return $data;

	}

  	
	?>


	<span class ="error">*Required Field</span>
	<br><br>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
		Username : <input type="text" name="name" value="<?php echo $name;?>">
		<span class ="error">*<?php echo $nameError; ?></span>
		<br><br>
		Email of the user : <input type="email" name="email" value="<?php echo $email;?>">
		<span class ="error">*<?php echo $emailError; ?></span>
		<br><br>
		Permanent Address : <input type="text" name="address" value="<?php echo $address;?>">
			<span class ="error">*<?php echo $addressError; ?></span>
			<br><br>
			DOB :<input type ="date" name = "date" value = "<?php echo $date ?>">
			<span class="error" >*<?php echo $dateError;?></span>
			<br><br>
			Phone no. : <input type="number" name="phone" value="<?php echo $phone;?>">
			<span class ="error">*<?php echo $phoneError; ?></span>
			<br><br>
			Remarks : <textarea name="remarks">
				<?php echo $remarks;?>
			</textarea>
			<span class ="error">*<?php echo $remarksError; ?></span>
			<br><br>

			Gender :
			<input type="radio" name ="gender"  <?php if (isset($gender) && $gender =="male"){echo "checked";}?>value="male"> Male
			<input type="radio" name ="gender"  <?php if (isset($gender) && $gender =="male"){echo "checked";}?>value="female"> Female
			<input type="radio" name ="gender"  <?php if (isset($gender) && $gender =="male"){echo "checked";}?>value="others"> others
			<span class ="error">*<?php echo $genderError; ?></span>
			

			<input type="submit" value="submit">

		</form>
		<h2>Your inputs are:</h2>
		<?php
		echo $name."<br>".$address."<br>";
		echo $phone;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $date;
		echo "<br>";
		echo $remarks;
		echo "<br>";
		echo $gender;
		echo "<br>";

		?>





</body>
</html>