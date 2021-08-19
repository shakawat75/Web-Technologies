<?php 
require_once '../Model/model.php';
if(isset($_POST['addShop']))
{
	
	$data['name'] = $_POST['sname'];
	$data['address'] = $_POST['sadd'];
	$data['type'] = $_POST['stype'];
	$data['email'] = $_POST['email'];
	$data['cnum'] = $_POST['Cnum'];
	$data['pass'] = $_POST['tpass'];
	
	if(add($data))
		echo "Successfully Added";
	
	
}?>