<?php 

require_once ('model/Product_model.php');

function fetchProducts(){
	return showProducts();

}
function fetchProduct($id){
	return showProduct($id);

}