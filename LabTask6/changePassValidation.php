<?php 
$flag = 0;
$pass_err = $cpass_err = "";

if(isset($_POST['Change'])){
		if(empty($_POST['npass']))
		$pass_err = "*Enter New Password";
	 else{
		  if(!preg_match("/^(?=.*?[A-Z0-9])(?=.*?[a-z0-9])(?=.*?[$@&#%]).{8,}$/",$_POST['npass']))
		  
				$pass_err = "*Password must contain at least one uppercase,one lowercase,one number and one special character";
			else
				$pass_err = "";
			}
	if(empty($_POST['rnpass']))
		$cpass_err = "*You need to retype your password!";
	else{
		  if($_POST["npass"]!=$_POST["rnpass"])
			  $cpass_err = "*Mismatched password.. Try again.";
	  }
	  if($pass_err=="" && $cpass_err == "")
		  $flag=1;
}

?>