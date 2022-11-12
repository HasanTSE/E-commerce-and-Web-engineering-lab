<!DOCTYPE html>
<html lang="en">
<head>
  <title>Website File</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<!-- code goes here -->
<div class="container">
 <form method="POST" action="insert.php">

	<label>Enter Your Name : </label>
	<input type = "text" name = "name"> <br> <br>
	<label>Enter Your Password : </label>
	<input type = "password" name = "password"> <br> <br>
	<label> Select your Gender : </label>
	<input type= "radio" name = "gender" value = "Male">Male
	<input type= "radio" name = "gender" value = "Female">Female <br> <br>
	<label> Select Your Country : </label>
		<select name = "country">
		<option value = "">Select Any One</option>
		<option value = "Bangladesh">Bangladesh</option>
		<option value = "SWEDEN">Sweden</option>
		 
	</select> <br><br>
	<label> Select Ypur Hobby : </label>
	<input type = "checkbox" name = "hobby" value = "Cricket">Cricket
   <input type = "checkbox" name = "hobby" value = "Football">Football
   <input type = "checkbox" name = "hobby" value = "Tennis">Tennis <br> <br>
 <input type = "submit" name = "submit" value = "Save">
 
 </form>
 </div>
<!-- code finish here -->

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>