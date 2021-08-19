<!doctype html>
<html>
<body>
<?php require_once 'controller/read.php';
?>
<?php require_once 'changePassValidation.php';?>
<form action="<?php if($flag==1) echo 'controller/passchangeCtrl.php';?>" method="post"> 
Current Password: <input type="text" value="<?php echo $profile['Password'];?>"><br>
New Password: <input type="text" name="npass" ><?php echo $pass_err;?><br>
Retype Password: <input type="text" name="rnpass" ><?php echo $cpass_err;?><br>
<input type="submit" name="Change" value="Change">
</form>
</body>
</html>