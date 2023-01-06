<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
	<title>Superfit | User Login</title>
	<link rel="stylesheet" href="css/template.css">
	<link rel="stylesheet" href="css/login.css">
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
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<div class="dropdown">
			<button class="dropbtn">Gallery 
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
		<a href="#">Photo Gallery</a>
		<a href="#">Video Gallery</a>
      
		</div>
		</div>
			<li><a href="#">Classes</a></li>
			<li><a href="contact.html">Contact Us</a></li>
			<div class="dropdown">
				<button class="dropbtn">Profile
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			<a href="#">User</a>
			<a href="#">Instructor</a>
		  
			</div>		
		</div>

		<div class="shop-cart">
			<a href="#" target="_blank"><i class="fa fa-cart-plus">Cart</i></a>
			
		</div>	
	</nav>

    <div class="join">
		<p class="p1">Don't have an account ?<br/>Get Registered right now!</p>
		<p class="p2">There are thousands of offers<br/>Don't miss them<br/>Click here for quick registration
		</p>
		
		<button class="joinBtn"><a href="userRegister.html">REGISTER</a></button>

	</div>




    <form action="loginFunction.php" method="POST">
     <div class="login-box">
		<h1>User Login</h1>

        <?php if (isset($_GET['error'])) { ?>	<!--Got help from https://youtu.be/scd8YKiuS7I-->
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







     <hr class = "line-before-footer">
	<footer>
		<div class="footer_content">
			<div class="center_details">
				<ul class="details">
					<li>Contact : 071-8569875</li>
					<li>Email : superfit@gmail.com</li>
					<li>Address : No,10 Galle Road, Colombo 02</li>
					<li>Branches : Kadawatha 
					</li> 
					
				</ul>
				
			</div>
			<div class="left_col">
				<h2>Newsletter</h2>
				<div class="border"></div>
				<p>Enter your Email to get News and Updates</p>
				<form action="" class="newsletter_form">
					<input type="Email" class="txt" placeholder="Enter Email" name="">
					<input type="submit" class="btn" value="Submit" name="">
					
				</form>
			</div>
			<div class="footer_links">
				<h4>Quick Links</h4>
				<ul>
					<li><a href="home.html">Home</a></li>
							<li><a href="#">Gallery</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Clas</a></li>
					
				</ul>
			</div>
				
			</div>
			
			<div class="social">
				<a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
				<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
				<a href="#" target="_blank"><i class="fab fa-twitter"></i></a>				
			</div>
			
		</div>
		<div class="footer_bottom">
			<p>All right reserved<br/>Copyright &copy;2021 SuperFit </p>
			
		</div>
	</footer>

</body>
</html>

</body>

</html>