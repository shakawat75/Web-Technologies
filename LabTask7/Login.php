<!doctype html>
<html>
<body>
<?php 
require_once 'head.php'?>



<div class="box">
<form id="login"  method="post">
<center><h1>Login</h1></center>

<input type="text" placeholder="Shop Email" name='sn' >
<h5 class="error"></h5>
<input type="password" placeholder="Password" name='ps' >
<h5 class="error"></h5>
<input type="checkbox" name="save"><span>Save Password</span>
<br>
<br>



<input type="submit" name="login">
</form>
</div>
<?php require_once 'foot.php'?>
</body>
</html>