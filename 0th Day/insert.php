
	<?php

$query= "SELECT * FROM country";
 

  $rowcount=mysqli_query($conn, $query);
 
 
for($i=1;$i<=$rowcount;$i++)
{
 
$row=mysqli_fetch_array($rowcount);
	  ?>
 
 		<option value="<?php echo $row["id"] ?>"><?php echo $row["name"] ?></option>
<?php
}
  ?>	






	<?php

$query= "SELECT * FROM country";
 

  $result = $conn->query($query);
 
 
while($row = $result->fetch_assoc()) {
{
 
//$row=mysqli_fetch_array($rowcount);
	  
 		<option value ="<?php echo $row["id"]; ?>"> <?php echo $row["name"]; ?></option>
 		<?php
 }
  ?>	
