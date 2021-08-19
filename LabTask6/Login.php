<!doctype html>
<html>
<body> 
<?php require_once 'LoginValidation.php';?>
<fieldset>
<legend>Login</legend>
<center>
<form  action="<?php if($isFilled==1)  echo 'controller/LoginControl.php';?>"method="post">
<table> 
<tr><td>Shop email</td><td><input type="text" name="sn" value="<?php if(isset($_COOKIE['shop'])) echo $_COOKIE['shop'];?>"><span class = "error"><?php echo $sn_err;?></span></td></tr>
<tr><td>Password</td><td><input type = "password" name="ps" value="<?php if(isset($_COOKIE['keys']))echo $_COOKIE['keys'];?>"><span class = "error"><?php echo $ps_err;?></span></td></tr>
<tr><td><input type="checkbox" name="save">Save name & password?</td></tr>
</table>
<br>
<input type="submit" name="login" value="Login"><a href="Pass Forget.php">Forgot Password?</a>
</form>
</center>
</body>
</html>