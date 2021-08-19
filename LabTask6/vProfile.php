<!doctype html>
<html>
<body>
<?php require_once 'controller/read.php';?>
<fieldset>
<table border ="1px">
<tr><td>Name:</td> <td><?php echo $profile['Name'];?></td></tr>
<tr><td>Address:</td> <td><?php echo $profile['Address'];?></td></tr>
<tr><td>Type:</td> <td><?php  echo $profile['Type'];?></td></tr>
<tr><td>Email:</td> <td><?php  echo $profile['Email'];?></td></tr>
<tr><td>Contact Number:</td> <td><?php echo $profile['Cnum'];?></td></tr>
</table>
</fieldset>
</body>
</html>