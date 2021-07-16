<?php 
require_once 'model/Product_model.php';
if(isset($_POST['search']))
	$searched_data = searchProduct($_POST['prdt']);
	//header("Location: ../DisplaySearchedProduct.php");

	

?>