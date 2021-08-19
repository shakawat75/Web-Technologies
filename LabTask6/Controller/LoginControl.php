
<?php 
session_start();
require_once 'Model/model.php';
$sn_err = $ps_err = "";

//if($_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_POST["login"])){
	if(isset($_POST["save"]))
	{
		setcookie('shop',$_POST['sn'],time()+30);
		setcookie('keys',$_POST['ps'],time()+30);
	}
		
	if(empty($_POST['sn']))
		$sn_err = "*shop name is required";
	if(empty($_POST["ps"]))
		$ps_err = "*password is required";
	if($sn_err == "" && $ps_err == ""){
		$data = fetchPass($_POST['sn']);
		if($data['Password'] == $_POST['ps']){
			$_SESSION['email'] = $_POST['sn'];
			header("Location:Dashboard.php");
	}
		else
			$ps_err = "Invalid Password";
		
	
	
						   
                         }
}

?>