<?php  
require_once 'controller/productInfo.php';

$products = fetchProducts();


    include "navigation.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="1px">
	<thead>
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Image</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<tr>
				<td><a href="DisplayProduct.php?id=<?php echo $product['ID'] ?>"><?php echo $product['Name'] ?></a></td>
				<td><?php echo $product['Price'] ?></td>
				<td><?php echo $product['Quantity'] ?></td>
				<td><?php echo $product['image'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $product['image'] ?>" alt="<?php echo $product['Name'] ?>"></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>