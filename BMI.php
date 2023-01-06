


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Superfit | Login</title>
	<link rel="stylesheet" href="css/template_clz.css">
	<link rel="stylesheet"  href="css/BMIstyle.css"> 
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





<div class="BMI">
        <button class = "closeButton"><a href = "classes.php">X</a></button>
        <h1>LET'S CALCULATE THE BMI</h1><br><br>
		
	<?php
		//Linking the configuration file
		require 'config.php';
	?>
	
	
            <form method="post" action="BMI.php">
			
            <p>Enter your height (m)</p>
            <input type="text" name="height" placeholder="Height(m)">
            <p>Enter your weight (kg)</p>
            <input type="text" name="weight" placeholder="Weight(Kg)">
			<br><br><br>
            <input type="submit" name="btnSubmit" value="Submit"><br><br><br><br><hr>
			
               
            </form>
			
			
	<?php
	
	if(isset($_POST["btnSubmit"])){

			$weight = $_POST["weight"];
			$height = $_POST["height"];
			
	
	$sql = "insert into calcbmi(user_ID,weight,height)values('','$weight','$height')";	

    if(mysqli_query($con,$sql)){
		
		echo "<br><br><br><h1>Results</h1>";
		
		
		echo "<ul><li><p>Weight : " .$weight."kg</p></li>";
		echo "<li><p>Height : " .$height."m</p></li>";
		echo "<li><p>Calculated BMI : " .$weight/($height*$height)."kgm<sup>-2</sup></p></li>";

			if($weight/($height*$height) < 18.5){
				echo "<li><p>Health Condtion :  Underweight<p></li>";
			}
			else if($weight/($height*$height) < 24.5){
				echo "<li><p>Health Condtion :  Normal<p></li>";
			}
			else if($weight/($height*$height) < 29.9){
				echo "<li><p>Health Condtion :  Overweight<p></li>";
			}
			else{
				echo "<li><p>Health Condtion :  Obesity<p></li>";
			}
			
		echo  "<li><p>Maximum healthy weight : " . $height* 24.4 * $height. "Kg<p></li></ul>";
		
		
	}
	else{
		echo "<script>alert ('Error record insertion')</script>";
	}
	
	mysqli_close($con);
	
	}
	
	

?>
	<!--The following text content is reffered from https://www.nhlbi.nih.gov/health/educational/lose_wt/BMI/bmi_tbl.pdf-->
    <br><u><a href = "txt/BMIchart.pdf" download> More BMI details </a></u> 
        
        </div>


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
					<li><a href="home.php">Home</a></li>
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
			<p>All right reserved<br/>Copyright &copy;2021 SuperFit </p>
			
		</div>
	</footer>

</body>
</html>