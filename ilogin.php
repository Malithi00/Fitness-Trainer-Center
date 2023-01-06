<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
	<title>Superfit | Instructor Login</title>

	<link rel="stylesheet" href="css/iindex.css">
	<link rel="stylesheet" href="css/ilogin.css">
	<!--Bootstrap website link to get social media icons(use.fontawesome.com)-->
	<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>

<body>

<!--navigation bar-->
	
<nav>
		<div class="logo"><img  src="images/SuperFITe.png " height="88px" width="88px"></div>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="about-us.html">About Us</a></li>
			<div class="dropdown">
			<button class="dropbtn">Gallery 
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
		<a href="Gallery.html">Photo Gallery</a>
		<a href="#">Video Gallery</a>
      
		</div>
		</div>
			<li><a href="classes.php">Classes</a></li>
			<li><a href="contact.html">Contact Us</a></li>
			<div class="dropdown">
				<button class="dropbtn">Profile
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			<a href="user.php">User</a>
			<a href="iprofile.html">Instructor</a>
		  
			</div>		
		</div>

		<div class="shop-cart">
			<a href="cart.html" target="_blank"><i class="fa fa-cart-plus">Cart</i></a>
			
		</div>	
	</nav>

    <div class="join">
		<p class="p1">Don't have an account ?<br/>Get Registered right now!</p>
		<p class="p2">There are thousands of offers<br/>Don't miss them<br/>Click here for quick registration
		</p>
		
		<button class="joinBtn"><a href="instructor.html">REGISTER</a></button>

	</div>




    <form action="iloginfunction.php" method="POST">
     <div class="login-box">
		<h1>Login</h1>

        <?php if (isset($_GET['error'])) { ?>	<!--Get help from https://youtu.be/scd8YKiuS7I-->
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>


		<div class="textBox">
            <i class="fas fa-user"></i>
			<input type="text" name="uname" placeholder="Username">
		</div>
		<div class="textBox">
            <i class="fas fa-lock"></i>
			<input type="password" name="password" placeholder="Password">
		</div>

		<button type="submit" class="loginBtn">Login</button>
	</div>>







     

</body>
</html>

</body>

</html>