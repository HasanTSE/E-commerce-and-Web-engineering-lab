<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "d55";
 
	$conn = mysqli_connect($servername, $username, $password, $dbname);
 
 
	$sql = "SELECT * FROM info WHERE status=1";
	$result = $conn->query($sql);
	$i=1;
	if ($result->num_rows > 0) {
		echo 
		"<table border='1'>
			<tr>
				<th>Serial Number</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Department</th>
				<th>Action</th>
			</tr>";
		while($row = $result->fetch_assoc()) {
			echo 
			"<tr>
				<td>".$i."</td>
				<td>".$row["name"]."</td>
				<td>".$row["gender"]."</td>
				<td>".$row["department"]."</td>
				<td><a href='../d55/edit.php?id=".$row["id"]."'>EDIT</a>/<a href='../d55/delete.php?id=".$row["id"]."'>DELETE</a></td>
			</tr>";
			$i++;
		}
		echo "</table>";
	} else {
		echo "0 results";
	}
	$conn->close();
?>