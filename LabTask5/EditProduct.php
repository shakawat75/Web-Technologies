<?php 

require_once 'controller/ProductInfo.php';
$product = fetchProduct($_GET['id']);


 include "navigation.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/UpdateProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Product Name:</label><br>
  <input value="<?php echo $product['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="price">Price:</label><br>
  <input value="<?php echo $product['Price'] ?>" type="text" id="price" name="price"><br>
  <label for="quantity">Quantity:</label><br>
  <input value="<?php echo $product['Quantity'] ?>" type="text" id="quantity" name="quantity"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateProduct" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>