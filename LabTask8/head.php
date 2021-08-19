<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h1>Shop</h1>
</div>
<?php if($_SESSION['flag']!=1)
	echo "
<div class = 'navbar'>
<a href='Homepage.php'><button id='btn'>Home</button></a><a href='Login.php'><button id='btn'
>Login</button></a><a href='SignUp.php'><button id='btn'>Sign Up</button></a><button id='btn'>Language</button>
</div>";
else
	echo "<div class = 'navbar'>
<a href='Homepage.php'><button id='btn'>Home</button></a><a href='Login.php'><button id='btn'
>Login</button></a><a href='SignUp.php'><button id='btn'>Sign Up</button></a><button id='btn'>Language</button>
<a href=''><button>Profile</button></a><a href='Product.php'><button>Product</button></a><a href=''><button>Change Pass</button></a><a href='Logout.php'><button>Logout</button></a></div>";?>
<br>
</body>
</html>