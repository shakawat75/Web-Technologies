<!doctype html>
<html>
<body>
<?php require_once 'controller/read.php';?>
<form>
<table>
<tr><td>Name:</td><td><input type="text" value="<?php echo $profile['Name']?>"></td></tr>
<tr><td>Address:</td><td><input type="text" value="<?php echo $profile['Address']?>"</td></tr>
<tr><td>Type:</td><td><input type="text" value="<?php echo $profile['Type']?>"</td></tr>
<tr><td>Email:</td><td><?php echo $profile['Email']?></td></tr>
<tr><td>Contact No:</td><td><?php echo $profile['Password']?></td></tr>
</table>
<input type="submit" name="Edit">
</form>
</body>
</html> 