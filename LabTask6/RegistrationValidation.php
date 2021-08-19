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
}
	  ?>