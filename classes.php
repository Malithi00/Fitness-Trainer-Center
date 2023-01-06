<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Super Fit | Classes</title>
	<link rel="stylesheet" href="css/classes.css">
	<link rel="stylesheet" href="css/sliderstyle.css">
	<link rel="stylesheet" href="css/schedule.css">
	<script src = "js/classes.js"></script>
	
	<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />

</head>
<body>
	<div class = "headback">
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
	<div class="page_content">
	
	    <!-- Start Plan --><!--The card concept used to display this content is extracted via refferencing the https://www.youtube.com/watch?v=65_Wbc-5PyU-->
    <section class="pricing_table">
        <h1><br>CLASS  PLANS.</h1>
        <div class="pricing_card">
            <div class="pricing_box">
                <h2>basic</h2>
                <h3><sup>$</sup>10<span>/mo</span></h3>
                <p>1 month</p>
                <ul>
                    <li><i class="fas fa-check"></i>Weight lifting</li>
                    <li><i class="fas fa-check"></i>Cardio</li>
                    <li><i class="fas fa-check"></i>Yoga</li>
                    <li><i class="fas fa-check"></i>Aerobics</li>
                    <li><i class="fas fa-check"></i>Punch Boxing</li>
                </ul>
                <button class="butn" id = "butn1"><a href = "checkout.php">Enroll</a></button>
            </div>
			
            <div class="pricing_box">
                <h2>standard</h2>
                <h3><sup>$</sup>60<span>/mo</span></h3>
                <p>3 month</p>
                <ul>
                    <li><i class="fas fa-check"></i>Weight lifting</li>
                    <li><i class="fas fa-check"></i>Zumba</li>
                    <li><i class="fas fa-check"></i>Karma</li>
                    <li><i class="fas fa-check"></i>Cycling</li>
                    <li><i class="fas fa-check"></i>Treadmilling</li>
                </ul>
                 <button class="butn" id = "butn2"><a href = "checkout.php">Enroll</a></button>
            </div>
            <div class="pricing_box">
                <h2>premium</h2>
                <h3><sup>$</sup>100<span>/mo</span></h3>
                <p>6 month</p>
                <ul>
                    <li><i class="fas fa-check"></i>Punch Boxing</li>
                    <li><i class="fas fa-check"></i>Aerobics</li>
                    <li><i class="fas fa-check"></i>Yoga</li>
                    <li><i class="fas fa-check"></i>Cardio</li>
                    <li><i class="fas fa-check"></i>Martial Arts</li>
                </ul>
                 <button class="butn" id = "butn3"><a href = "checkout.php">Enroll</a></button>
            </div>
        </div>
		</div>
		</div>
    </section>
		

	
	
	
	<!-- Start Schedule -->
  <section class="table">
     <h1>Class Schedules.</h1>

    <table>
	
	<?php
		//Linking configuration file
		require 'config.php';
		
		$sql = "SELECT * FROM timetable";
		$result = $con->query($sql);
		
		if($result-> num_rows > 0){
			while($row = $result-> fetch_assoc()){
				echo"<tr><td>". $row["TT_date"]."</td><td>". $row["TT_time"]."</td><td>". $row["TT_schedule"]."</td><td>". $row["TT_class"]."</td><td>". $row["TT_meeting_Details"]."</td></tr>";
			}
			echo "</table>";
		}
		else {
			echo "0 result";
		}
		
		$con-> close();
		
		?>


    </table>
	
	<button class="butn" id = "butn3"><a href= "timetable.html">Add Schedule</a></button><button class="butn" id = "butn3"><a href= "deleteSchedule.html">Delete Schedule</a></button>
	
  </section>
	
	
	</div>
	
	<!--slider--><!--Testimonial Card concept used to display this content is extracted by refferencing https://www.youtube.com/watch?v=fzgLWi40-2g-->
	
	<div class="hero">

   <h1><center>Physical Trainers</center></h1>
   
   
   <div class = "container">
   <div class = "indicator">
		<span class ="botn active"></span>
		<span class ="botn"></span>
		<span class ="botn"></span>
		<span class ="botn"></span>
		
   </div>
   <div class = "testimonial">
   
   
   
	  <div class="slide-row" id= "slide">
	     <div class="slide-col">
           
                
                <div class="user-text">
                    
                    <p>“Your own physicall and mentall fitness matters only on your determination. It's the general truth to say that you are always stronger than you think. While practice will always make you perfect” </p>
                    <h3>-John Anderson-</h3>

					</div>
					<div class="user-img">
						<img src = "images/user1.jpg">
                </div>
				</div>
				
					     <div class="slide-col">
           
                
                <div class="user-text">
                    
                    <p>“Your own physicall and mentall fitness matters only on your determination. It's the general truth to say that you are always stronger than you think. While practice will always make you perfect” </p>
                    <h3>-Ryan Fernando-</h3>
					
					</div>
					<div class="user-img">
						<img src = "images/user2.jpg">
                </div>
				</div>
				
					     <div class="slide-col">
           
                
                <div class="user-text">
                    
                   <p>“Your own physicall and mentall fitness matters only on your determination. It's the general truth to say that you are always stronger than you think. While practice will always make you perfect” </p>
                    <h3>-Andrew Bandara-</h3>
					
					</div>
					<div class="user-img">
						<img src = "images/user3.jpg">
						

                </div>
				</div>
				
				<div class="slide-col">
           
                
                <div class="user-text">
                    
                    <p>“Your own physicall and mentall fitness matters only on your determination. It's the general truth to say that you are always stronger than you think. While practice will always make you perfect” </p>
                    <h3>-Shaney Perera-</h3>
					
					</div>
					<div class="user-img">
						<img src = "images/user4.jfif">
                </div>
				</div>
				
				</div>
				</div>
				</div>
				</div>
			
				
				
				
		<script>
			var botn = document.getElementsByClassName("botn");
			var slide =  document.getElementById("slide");
			
			botn[0].onclick = function(){
				slide.style.transform = "translateX(0px)";
				for(i=0;i<4;i++){
					botn[i].classList.remove("active");
				}
				this.classList.add("active");
			}
			botn[1].onclick = function(){
				slide.style.transform = "translateX(-800px)";
				for(i=0;i<4;i++){
					botn[i].classList.remove("active");
				}
				this.classList.add("active");
			}
			botn[2].onclick = function(){
				slide.style.transform = "translateX(-1600px)";
				for(i=0;i<4;i++){
					botn[i].classList.remove("active");
				}
				this.classList.add("active");
			}
			botn[3].onclick = function(){
				slide.style.transform = "translateX(-2400px)";
				for(i=0;i<4;i++){
					botn[i].classList.remove("active");
				}
				this.classList.add("active");
			}
			
		</script>
    
	
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