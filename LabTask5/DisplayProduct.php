<?php  
require_once 'controller/productInfo.php';

$product = fetchProduct($_GET['id']);


    include "navigation.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="1px">
	<tr>
		<th>Product Name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="DisplayProduct.php?id=<?php echo $product['ID'] ?>"><?php echo $product['Name'] ?></a></td>
		<td><?php echo $product['Price'] ?></td>
		<td><?php echo $product['Quantity'] ?></td>
				<td><img width="100px"  src="uploads/<?php echo $product['image'] ?>" alt="<?php echo $product['Name'] ?>"></td>
				<td><a href="EditProduct.php?id=<?php echo $product['ID']?>"><button>Edit</button></a></td>
				<td><a href="controller/DeleteProduct.php?id=<?php echo $product['ID']?>"><button>Delete</button></a></td>
				
	</tr>

</table>


</body>
</html>