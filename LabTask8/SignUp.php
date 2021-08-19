<!doctype html>
<html>
<head>
</head>
<body>
<?php 
require_once 'head.php'?>
<?php
$isValidate = 0;
$error = $message = "";
$name_err=$email_err=$add_err=$contact_err=$pass_err=$cpass_err="";
if($_SERVER["REQUEST_METHOD"]=="POST"){

if(isset($_POST["addShop"]))
{
	if(empty($_POST['sname']))
		$name_err = "*Shop name is required";
	else
	 {
		 $name = $_POST["sname"];
		if(!preg_match("/^[a-zA-Z-0-9 ]{2,}$/",$name))
				$name_err = "*Name must contain at least two characters";
			else
				$name_err = "";
	 }
	if(empty($_POST['sadd']))
		$add_err = "*Shop location is required";
	if(empty($_POST['email']))
		$email_err = "*Email is required";
    else {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
      $email_err = "*Invalid email format";
      }
	if(empty($_POST['Cnum']))
		$contact_err = "*Contact number is required";
	else
	 {
		 $num = $_POST["Cnum"];
		if(!preg_match("/^(?:\+88|88)?(01[3-9]\d{8})$/",$num))
				$contact_err = "*Invalid phone number must start with(+88/01)";
			else
				$contact_er = "";
	 }
	if(empty($_POST['tpass']))
		$pass_err = "*Password is required";
	 else{
		  if(!preg_match("/^(?=.*?[A-Z0-9])(?=.*?[a-z0-9])(?=.*?[$@&#%]).{8,}$/",$_POST['tpass']))
		  
				$pass_err = "*Password must contain at least one uppercase,one lowercase,one number and one special character";
			else
				$pass_err = "";
			}
	if(empty($_POST['cpass']))
		$cpass_err = "*You need to confirm your password!";
	else{
		  if($_POST["cpass"]!=$_POST["tpass"])
			  $cpass_err = "*Mismatched password.. Try again.";
	  }
	  if($name_err == "" && $email_err == "" && $add_err == "" && $contact_err == "" && $pass_err == "" && $cpass_err == "")
	$isValidate = 1;
}
}?>
<div class="box">
<form id="signup" name="signup-form" action="<?php if($isValidate==1) echo 'controller/create.php';?>" method="post">
<center><h1>Registration</h1></center>
<table>
<tr><td>Shop Name:</td> <td><input type="text" name="sname" value="<?php if(isset($_POST['sname'])) echo $_POST['sname']; ?>"><div class="error"><h5 id="name_err"></h5></div></td></tr>
<tr><td>Shop Address:</td><td><input type="text" name="sadd" value="<?php if(isset($_POST['sadd'])) echo $_POST['sadd']; ?>"><div class="error"><h5 id="add_err"></h5></div></td></tr>
<tr><td>Shop Type:</td><td><select name="stype">
<option value="Grocery">Grocery</option>
<option value="Stationary">Stationary</option>
<option value="Sweets and Bakery">Sweets and Bakery</option>
<option value="Restaurents">Restaurents</option>
<option value="Cloths">Cloths</option>
<option value="Supermarket">Supermarket</option>
</select><hr/></td></tr>
<tr><td>Enter email:</td><td><input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"><div class="error"><h5 id="email_err"></h5></div></td></tr>
<tr><td>Contact No:</td><td><input type="text" name="Cnum" value="<?php if(isset($_POST['Cnum'])) echo $_POST['Cnum']; ?>"><div class="error"><h5 id="cnum_err"></h5></div></td></tr>
<tr><td>Enter a password:</td><td><input type="text" name="tpass" value="<?php if(isset($_POST['tpass'])) echo $_POST['tpass']; ?>"><div class="error"><h5 id="pass_err"></h5></div></td></tr>
<tr><td>Confirm Password:</td><td><input type="text" name="cpass" value="<?php if(isset($_POST['cpass'])) echo $_POST['cpass']; ?>"><div class="error"><h5 id="cpass_err"></h5></div></td></tr>
</table>
<br>

<input type="submit" name="addShop">
<h5></h5>
</form>
</div>
<?php require_once 'foot.php'?>
</body>

<script>
<?php require_once 'Reg_validation.js'?>
</script>
</html>