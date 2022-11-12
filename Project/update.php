<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "d55";
 
	$conn = mysqli_connect($servername, $username, $password, $dbname);
 
	$id=$_POST['id'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$department=$_POST['department'];
	$sql = "UPDATE info SET name='$name', gender='$gender', department='$department' WHERE id='$id'";
	$result = $conn->query($sql);
	if($result){
		//echo "DATA UPDATED SUCCESSFUL!";
		header("Location: view.php");
	}else{
		echo "DATA UPDATE UNSUCCESSFUL!";
	}
 