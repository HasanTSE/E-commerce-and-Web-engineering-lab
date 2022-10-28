<?php

$servername="localhost";
$username="root";
$password="";
$database="d55";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Id, Name, Gender, Department FROM info";
$result = $conn->query($sql);
$i=1;

if ($result->num_rows > 0) {
  echo "<table border='1'>
  <tr>
  <th>ID</th>
  <th>Name</th>
  <th>Gender</th>
  <th>Department</th>
  <th>Action</th>
  </tr>";
 

  while($row = $result->fetch_assoc()) {
    echo "<tr>
	<td>".$i."</td>
	 
	<td>".$row["Name"]."</td>
	<td>".$row["Gender"]."</td>
	<td>".$row["Department"]."</td>
	<th><a href=''>Edit</a><a href=''>Delete</a></th>
	
	</tr>";
	 $i++;
  }

    echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
 