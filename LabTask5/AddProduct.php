<?php include 'navigation.php'?>
<!doctype html>
<html>
<body>
<fieldset>
<legend>Add product</legend>
<form action="controller/createProduct.php" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>Product Name:</td> <td><input type="text" name="pname"></td>
</tr>
<tr>
<td>Price(MRP Tk.):</td> <td><input type="text" name="prc"></td>
</tr>
<tr>
<td>Quantity:</td> <td><input type="text" name="qnt"></td>
</tr>
<tr>
<td></td><td align="right"><input type="submit" name="createProduct"></td>
<td></td><td align="right"><input type="file" name="image"></td>
</tr>
</table>
</form>
</fieldset>


</body>
</html>