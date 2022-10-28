<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "d55";
 
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$id=$_GET['id'];
	$sql = "SELECT * FROM info WHERE id=$id";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
?>
<html>
	<head>
		 <title>EDIT FORM</TITLE>
	</head>
	<body>
		<form method="POST" action="update.php">
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<label>Enter Your Name:</label>
			<input type="text" name="name" value="<?php echo $row['name'];?>"> <br><br>
			<label>Enter Your Gender:</label>
			<input type="text" name="gender" value="<?php echo $row['gender'];?>"><br><br>
			<label>Select Your Department:</label>
			<input type="taxt" name="department" value="<?php echo $row['department'];?>"><br>
			<input type="submit" name="submit" value="Edit">
		</form> 
	</body>
</html>
<?php
	}
?>