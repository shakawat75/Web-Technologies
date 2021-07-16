<?php 
require_once "../model/Product_model.php";
  
  deleteProduct($_GET['id']);
  header("Location:../DisplayProducts.php");