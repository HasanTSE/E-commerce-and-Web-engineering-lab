<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "d55";
 
	$conn = mysqli_connect($servername, $username, $password, $dbname);
 
	$id=$_GET['id'];
	$sql = "UPDATE info SET status='0' WHERE id='$id'";
	$result = $conn->query($sql);
	if($result){
		//echo "DATA DELETE SUCCESSFUL!";
		header("Location: view.php");
	}else{
		echo "DATA DELETE UNSUCCESSFUL!";
	}