<!doctype html>
<html>
<body>
<?php require_once 'RegistrationValidation.php';?>
<fieldset>
<fieldset>
<legend>Registration</legend>
<center>
<form action="<?php if($isValidate==1) echo 'controller/create.php';?>" method="post">
<table>
<tr>
<td>Shop Name</td><td><input type="text" name="sname" value="<?php if(isset($_POST['sname'])) echo $_POST['sname']?>"><span class="error"><?php echo $name_err;?></span></td>
</tr>
<tr>
<td>Shop Address</td><td><input type="text" name="sadd" value="<?php if(isset($_POST['sadd'])) echo $_POST['sadd']?>"><span class="error"><?php echo $add_err;?></span></td>
</tr>
<tr>
<td>Shop Type</td>
<td><select name="stype">
<option value="Grocery">Grocery</option>
<option value="Stationary">Stationary</option>
<option value="Sweets and Bakery">Sweets and Bakery</option>
<option value="Restaurents">Restaurents</option>
<option value="Cloths">Cloths</option>
<option value="Supermarket">Supermarket</option>
</select>
</td>
</tr>
<tr>
<td>Enter an email</td><td><input type="text"name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>"><span class="error"><?php echo $email_err;?></span></td>
</tr>
<tr>
<td>Contact No.</td><td><input type = "text" name="Cnum" value="<?php if(isset($_POST['Cnum'])) echo $_POST['Cnum']?>"><span class="error"><?php echo $contact_err;?></span></td>
</tr>
<tr>
<td>Enter a password</td><td><input type="text" name="tpass" value="<?php if(isset($_POST['tpass'])) echo $_POST['tpass']?>"><span class="error"><?php echo $pass_err;?></span></td>
</tr>
<tr>
<td>Confirm Password</td><td><input type = "password" name="cpass" value="<?php if(isset($_POST['cpass'])) echo $_POST['email']?>"><span class="error"><?php echo $cpass_err;?></span></td>
</tr>
</table>
<br>
<input type = "submit" name="addShop">
</center>
</form>
</fieldset>
</fieldset>
</form>
</body>
</html>