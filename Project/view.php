<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "d55";
 
	$conn = mysqli_connect($servername, $username, $password, $dbname);
 
 
	$sql = "SELECT * FROM product_info WHERE status=1";
	$result = $conn->query($sql);
	$i=1;
	if ($result->num_rows > 0) {
		echo 
		"<table border='1'>
			<tr>
				<th>Serial Number</th>
				<th>product_name</th>
				<th>product_category</th>
				<th>brand</th>
				<th>product_price</th>
				<th>product_availability</th>
				<th>image</th>
				<th>Action</th>
			</tr>";
		while($row = $result->fetch_assoc()) {
			echo 
			"<tr>
				<td>".$i."</td>
				<td>".$row["product_name"]."</td>
				<td>".$row["product_category"]."</td>
				<td>".$row["brand"]."</td>
				<td>".$row["product_price"]."</td>
				<td>".$row["product_availability"]."</td>
				<td>".$row["image"]."</td>
				 
				<td><a href='../project/edit.php?id=".$row["id"]."'>EDIT</a>/<a href='../project/delete.php?id=".$row["id"]."'>DELETE</a></td>
			</tr>";
			$i++;
		}
		echo "</table>";
	} else {
		echo "0 results";
	}
	$conn->close();
?>