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
		$username = $class = $favourite = $skills = $date ="";
		$usernameError = $classError = $favouriteError = $skillsError = $dateError = "";
	?>
	
	<?php
	
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			
			if(empty($_POST['username'])){
				$usernameError = "Username is required";
			}
			else{
				$username = checkInput($_POST['username']);
				$username = ucfirst($username);
			}

			if(empty($_POST['date'])){
				$dateError = "Date is required";
			}
			else{
				$date = checkInput($_POST['date']);
			}

			if(empty($_POST['class'])){
				$classError = "Class is required";
			}
			else{
				$class = checkInput($_POST['class']);
			}

			if(empty($_POST['skills'])){
				$skillsError = "Skill is required";
			}
			else{
				$skills = checkInput($_POST['skills']);
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

		Date:
			<input type="date" name="date" value="<?php echo $date ?>">
			<span class="error">* <?php echo $dateError; ?></span>
		<br><br>

		Username: <input type="text" name="username" value="<?php echo $username; ?>">
		<span class="error">* <?php echo $usernameError; ?></span>
		<br><br>

		Class: <input type="text" name="class" value="<?php echo $class; ?>">
		<span class="error">* <?php echo $classError; ?></span>
		<br><br>

		Favourite:
				<select name="favourite">
						<option name="favourite" value="c+">c+<?php if (isset($favourite) && $favourite == "c+") {
					echo "selected";} ?></option>
						<option name="favourite" value="c++" >c++<?php if (isset($favourite) && $favourite == "c++") {
					echo "selected";} ?></option>
						<option name="favourite" value="python" >python<?php if (isset($favourite) && $favourite == "python") {
					echo "selected";} ?></option>
				</select>
				<span class="error">* <?php echo $favouriteError; ?></span>
		<br><br>

		Skills:
		<input type="checkbox" name="skills" value="PHP" <?php if (isset($skills) && $skills == "php") {
			echo "checked";} ?>>PHP
		<input type="checkbox" name="skills" value="HTML"<?php if (isset($skills) && $skills == "HTML") {
			echo "checked";} ?>>HTML
		<input type="checkbox" name="skills" value="CSS"<?php if (isset($skills) && $skills == "CSS") {
			echo "checked";} ?>>CSS
		<input type="checkbox" name="skills" value="JAVASCRIPT"<?php if (isset($skills) && $skills == "JAVASCRIPT") {
			echo "checked";} ?>>JAVASCRIPT

		<span class="error">* <?php echo $skillsError; ?></span>
		<br><br>
		
		<input type="submit" value="submit">
	</form>
	<h2>Your input is :</h2>
	<?php 
		echo "Date is $date<br>";
		echo "Your Username  is $username and class is $class.<br>";
		echo "Your favourite is: ".$favourite."<br>";
		echo "Your skills are: ".$skills."<br>";
	?>
</body>
</html>