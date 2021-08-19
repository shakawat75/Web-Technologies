<?php 
session_start();
require_once '../Model/model.php';
if(isset($_POST['Change']))
{
	changePass($_POST['npass'],$_SESSION['email']);
}
echo "Password changed:)";?>