<!doctype html>
<html>
<body>
<?php require_once 'controller/read.php';?>
<table>
<td><fieldset>
<a href="Dashboard.php"><button>Dashboard</button></a>
<a href="eProfile.php"><button>Edit Profile</button></a>
<a href="vProfile.php"><button>View Profile</button></a>
<a href="changePass.php"><button>Change Password</button></a>
</fieldset>
</td>
<td><fieldset>
<h1>Welcome <?php echo $profile['Name'];?></h1>
</fieldset>
</td>

</body>
</html>