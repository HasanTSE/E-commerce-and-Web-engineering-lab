<?php

include 'connect.php';  

if(isset($_POST['submit']))
{ 
$product_name=$_POST['product_name'];
$product_category=$_POST['product_category'];
$brand=$_POST['brand'];
$product_price=$_POST['product_price'];
$product_availability=$_POST['product_availability'];
$image=$_POST['image'];
$status=$_POST['status'];
 
 
$sql = "INSERT INTO product_info(product_name, product_category, brand, product_price, product_availability, image, status) VALUES ('$product_name', '$product_category', '$brand', '$product_price', '$product_availability', '$image', '$status')";
if (mysqli_query($conn, $sql)) 
 	{
	echo "INSERTED SUCCESSFULLY!";
	 }else{
	echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>