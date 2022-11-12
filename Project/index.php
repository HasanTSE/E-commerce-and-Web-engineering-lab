<?php
include 'connect.php';
?>
<html>
	<head>
		 <title>HTML FORM DESIGN</TITLE>
	</head>
	<body>
		<form method="POST" action="insert.php">
			<label>Product-Name:</label>
			  <input type="text" name="name">
			<br><br>

             <label>Product-Category : </label>
		       <select name = "product_category">
		       <option value = "">Select Any One</option>
 
               <?php

				$query= "SELECT * FROM product_category";
 				 $rowcount=mysqli_query($conn, $query);

 				 // for($i=1;$i<=$rowcount;$i++)

  					while($row=mysqli_fetch_array($rowcount)) 
  					{
  					  
  					    echo "<option value=".$row['name'].">".$row['name']."</option>";


 					}
  			    ?>

  				</select> 
  				<br><br>


             <label>Product Brand-Name: </label>
		       <select name = "brand">
		       <option value = "">Select Any One</option>
 
               <?php
				$query= "SELECT * FROM product_brand";
 				 $rowcount=mysqli_query($conn, $query);
  					while($row=mysqli_fetch_array($rowcount)) 
  					{
  					    echo "<option value=".$row['id'].">".$row['name']."</option>";
 					}
  			    ?>	
  				</select> 
  				<br><br>

  				<label>Product-Price:</label>
			  <input type="number" name="product_price">
			  <br><br>
 
			<label>Product-availability:</label>
			<input type="radio" name="product_availability" value="">Yes
			<input type="radio" name="product_availability" value="Female">No
            <br><br>

			<!--  <input class="form-control" type="file" name="uploadfile" value="" />
			 <br><br> -->

			<input type="submit" name="submit" value="Save">

			 <br><br>
			 <a href="view.php">Data Grid</a>
		</form> 
	</body>
</html>