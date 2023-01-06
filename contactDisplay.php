
 <?php
include_once 'config.php';
$result = mysqli_query($con,"SELECT * FROM contact");
?>
<!DOCTYPE html>
<html>
 <head>
 <title>User Complains</title>
 <link rel="stylesheet" href="css/conDisplay.css">
 <meta charset="utf-8">
	
	<link rel="stylesheet" href="css/template.css">
	

	<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"/>
	  
 </head>
<body>
<!--navigation bar-->
	
	<nav>
		<div class="logo"><img  src="images/SuperFITe.png " height="88px" width="88px"></div>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="about-us.html">About Us</a></li>
			<li><a href="Gellary.html">Gallery</a></li>
			<li><a href="classes.html">Classes</a></li>
			<li><a href="contact.html">Contact Us</a></li>
			<div class="dropdown">
				<button class="dropbtn">Profile
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			<a href="regDispaly.php">User</a>
			<a href="instructor.html">Instructor</a>
		  
			</div>		
		</div>

		<div class="shop-cart">
			<a href="cart.html" target="_blank"><i class="fa fa-cart-plus">Cart</i></a>
			
		</div>	
	</nav>
	<br><br><br><br>
	
	
	
					<?php
					if (mysqli_num_rows($result) > 0) {
					?>
					
					
					  <table>
					  
					  <tr>
						<td><b>First Name</b></td>
						<td><b>Last Name</b></td>
						<td><b>Gender</b></td>
						<td><b>Mobile Number</b></td>
						<td><b>Email</b></td>
						<td><b>User Problems</b></td>
						
					  </tr>
					<?php
					$i=0;
					while($row = mysqli_fetch_array($result)) {
					?>
					<tr>
						<td><?php echo $row["fname"]; ?></td>
						<td><?php echo $row["lname"]; ?></td>
						<td><?php echo $row["gender"]; ?></td>
						<td><?php echo $row["mobile"]; ?></td>
						<td><?php echo $row["mail"]; ?></td>
						<td><?php echo $row["description"]; ?></td>
					</tr>
					<?php
					$i++;
					}
					?>
					</table>
					 <?php
					}
					else{
						echo "No result found";
					}
					?>

	
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
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="tutorial.html">Tutorials</a></li>
							<li><a href="privacy.html">Privacy Policy</a></li>
					
				</ul>
			</div>
				
			</div>
			
			<div class="social">
				<a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
				<a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
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