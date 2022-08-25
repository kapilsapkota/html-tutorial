<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<?php
	 	echo "hello";
	 	echo "My name is sanjeev ale magar";
	 	echo "hello my name is sanjeev";
	?>

	<?php
		echo "nav bar example";
		$nav = ["home","services","About us","Contact"];
		foreach ($nav  as $key => $value) {
			echo "<li>".$value."</li>";
		}


	?>

	<h2>global variable</h2>
	<?php
		$a = 12;
		$b =1234; 
		$GLOBALS['z'] = $GLOBALS['a'] +$GLOBALS['b'];
		echo $z;
	?>
	<form method="get" action="#" >
			
				<label>Name</label><br>
				<input type="text" name="name" placeholder="Enter your Name"><br>
			
			

			<label>E-mail</label><br>
			<input type="text" name="email" placeholder="Enter yout e-mail"><br>

			<label>Password</label><br>
			<input type="password" name="name" placeholder="Enter your password"><br>

`			<label>Mobile Number</label><br>
			<input type="number" name="number" placeholder="Enter your Mobile Number"><br>

			<label>D.o.B</label><br>
			<input type="Date" name="name"><br>

			<label name="Role" id="Role">Role</label><br>
			<select>
				<option>--Choose one--</option>
				<option value="SuperAddmin">SuperAdmin</option>
				<option value="Admin">Admin</option>
				<option value="user">user</option>
				<option value="Member">Member</option>
			</select><br>

			<label>Gender</label><br>
			<input type="radio" name="Male">Male
			<input type="radio" name="Female">Female
			<input type="radio" name="other">other<br>

			<label>skills</label><br>
			<input type="checkbox" name="php">php
			<input type="checkbox" name="css">css
			<input type="checkbox" name="javascript">javascript<br>

			<label>Remarks</label><br>
			<textarea name="Remarks" id="Remarks" rows="3"></textarea><br>
			<button class="ram" type="Submmit" name="name">Submmit here</button>
		</form>
</body>
</html>