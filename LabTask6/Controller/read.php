<?php 
session_start();
require_once 'Model/model.php';
$profile = fetchProfile($_SESSION['email']);
?>