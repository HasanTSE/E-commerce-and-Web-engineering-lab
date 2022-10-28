<html>
	<head>
		 <title>HTML FORM DESIGN</TITLE>
	</head>
	<body>
		<form method="POST" action="insert.php">
			<label>Enter Your Name:</label>
			<input type="text" name="name"> <br><br>
			<label>Enter Your Password:</label>
			<input type="password" name="password"><br><br>
			<label>Select Your Gender:</label>
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female <br><br>
			<label>Select Your Department:</label>
			<select name="department">
				<option value="CSE">CSE</option>
				<option value="EEE">EEE</option>
				<option value="BBA">BBA</option>
			</select> <br><br>
			<label>Select Your Hobby:</label>
			<input type="checkbox" name="hobby" value="Cricket">Cricket
			<input type="checkbox" name="hobby" value="Football">Football
			<input type="checkbox" name="hobby" value="Tennis">Tennis <br><br>
			<input type="submit" name="submit" value="Save">
		</form> 
	</body>
</html>