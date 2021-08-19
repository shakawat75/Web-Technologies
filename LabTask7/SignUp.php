<!doctype html>
<html>
<head>
</head>
<body>
<?php
require_once 'head.php'?>

<div class="box">
<form id="signup" name="signup-form" >
<center><h1>Registration</h1></center>
<table>
<tr><td>Shop Name:</td> <td><input type="text" name="sname"></td></tr>
<tr><td>Shop Address:</td><td><input type="text" name="sadd"></td></tr>
<tr><td>Shop Type:</td><td><select name="stype">
<option value="Grocery">Grocery</option>
<option value="Stationary">Stationary</option>
<option value="Sweets and Bakery">Sweets and Bakery</option>
<option value="Restaurents">Restaurents</option>
<option value="Cloths">Cloths</option>
<option value="Supermarket">Supermarket</option>
</select><hr/></td></tr>
<tr><td>Enter email:</td><td><input type="text" name="email </td></tr>
<tr><td>Contact No:</td><td><input type="text" name="Cnum"></td></tr>
<tr><td>Enter a password:</td><td><input type="text" name="tpass"></td></tr>
<tr><td>Confirm Password:</td><td><input type="text" name="cpass"></td></tr>
</table>
<br>

<input type="submit" name="addShop">
<h5></h5>
</form>
</div>
<?php require_once 'foot.php'?>
</body>

<script>
</script>
</html>