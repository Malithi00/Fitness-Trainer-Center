<?php 

session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['Email'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">
	<title>Super Fitt | HOME</title>
	<link rel="stylesheet" type="text/css" href="css/iindex.css">
	<script type="text/javascript" src="js/index.js"></script>
	<!--Bootstrap website link to get social media icons(use.fontawesome.com)-->
	<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    /> 
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
			<li><a href="BMI.php">Classes</a></li>
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

    <h3><a href="logout.php">Logout</a></h3>


     <!--Content of the page-->
	 <div class="cover" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="images/las.mp4" type="video/mp4" />
        </video>

        <div class="video">
            <div class="caption">
				<div class="search">
					<input type="text"  class="srch" placeholder="What are you Looking For ? "><button type="submit" class="sub1"><i class="fas fa-search"></i></button>
					
				</div>
				<br>
				<br>
                <h6>work harder, get stronger</h6>
                <h3 data-text="super..">easy with  SUPER FITNESS </h3>
                
            </div>
        </div>

		
    </div>

	<div class="cover" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="images/train.mp4" type="video/mp4" />
        </video>

        <div class="video">
            <div class="caption">
				<div class="container">
					<div class="item item-1">
						<h2>Course</h2><br>
						<img src="images/dumbell.png" width="40px" height="40px" class="dumb">
					
						<p>We offer you the best exercise and nutritional programs, to set your personal fitness goal and make you healthier</p><br><br>
						<div class="expobtn">
						<input type="button" class="btn" name="btn" value="Explore More" >
						</div>
					</div>
					<div class="item item-2">
						<h2>Gallery</h2>
						<br>
						<img src="images/gall.png" width="50px" height="50px" class="gall">
						<p>This is a Collection of workout images and images of the fitness center. You can witness how the trainers are instructing the Customers to maintain theri health, through these images</p>
						<div class="expobtn">
							<input type="button" class="btn" name="btn" value="Explore More" >
							</div>
					</div>
			
					<div class="item item-3">
						<h2>About Us</h2>
						<br>
						<img src="images/prof.png" width="50px" height="50px" class="prof">
						<p>This is an brief description about us, What we do and Sucess storiees of former Customers</p><br>
						<div class="expobtn"><br>
							<input type="button" class="btn" name="btn" value="Explore More" >
							</div>
					</div>
				</div><br><br>
		
			
				 
			</div>
		</div>

		<div class="cover" id="top">
			<video autoplay muted loop id="bg-video">
				<source src="images/gym-video.mp4" type="video/mp4" />
			</video>
	
			<div class="video">
				<div class="caption">
					<h1 > Why Choose Super Fitness </h1><br>
				<div class="container2">
					
					<div class="items items-1">
						
						
						<h5>Convienence</h5><br>
						<img src="images/aim.png" width="50px" height="50px" class="ain">
						
						<p>You can Workout any time at any place, And instead of being specific schedule at your local gym, online trainers all offered at your convenience </p>
					</div>
					<div class="items items-2">
						<h5>Cost Effective</h5>
						<br>
						<img src="images/cost.png" width="50px" height="50px" class="cost">
						<p>We offer you Quality courses with less Course fees, There are courses from lowest to highest prices. You can choose as your need</p>
					</div>
					<div class="items items-3">
						<h5>Best Trainers</h5>
						<br>
						<img src="images/coach.png" width="50px" height="50px" class="coach">
						<p>We have  Instructors with more experience, And highly qualified.  </p>
					</div>
					<div class="items items-4">
						<h5>Detailed Video Tutorials</h5>
						<br>
						<img src="images/video.png" width="50px" height="50px" class="vid">
						<p>All Users are provided with facility to watch recorded video tutorials at any time any where</p>
					</div>
					
					

				</div>
			</div>


				
					
				
			
				</div>
			
                
            
        

		
    </div>




	<br>
	
	

    
   

     
     
     <br/> <br/>
	
	
	 

	<!--Footer-->
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
			<div class="right_col">
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
							<li><a href="Gallery.html">Gallery</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="displayFAQuser.php">FAQ</a></li>
							<li><a href="classes.php">Classes</a></li>
					
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
			<p>Copyright &copy;2021 SuperFit </p>
			
		</div>
	</footer>


</body>
</html>

</body>

</html>


<?php 

}else{

     header("Location: ilogin.php");

     exit();

}

 ?>