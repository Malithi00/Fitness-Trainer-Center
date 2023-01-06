<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Super Fitt</title>
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    /> 
</head>
<body>
	
	
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
<h2>Checkout</h2>


<div class="row">
  <div class="col1">
    <div class="container">
      <form method="post" action="form_process.php">
      
        <div class="row">
          <div class="col2">
            <h3><center>Billing Details</center></h3>
            <label> Full Name</label>
            <input type="text" id="cname"placeholder="Rod Dominick" name="cname"><br><br><br><br>
            <label id="email"> Email</label>
            <input type="text" id="cemail" placeholder="rod@gmail.com" name="cemail">
			<label class="mobilelabel"> Mobile Number</label>
            <input type="text" class="cmobile" placeholder="0762354879" name="cnumber">
            
            

            
          </div>

          <div class="col2">
            <h3>Payment</h3>
            <label>Accepted Cards</label>
            <div class="image-container">
              <img  src="images/Master.jpg"height="70px" width="88px">
			  <img  src="images/visa.jpg" height="70px" width="88px">
			  <img  src="images/paypal.jpg" height="70px" width="88px">
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" placeholder="Bank of ceylon" name="bname">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="ccardnumber" placeholder="xxxx-xxxx-xxxx-xxxx">
            <label for="expmonth">Exp Date</label>
				<select class="date">
					<option value=''>Month</option>
					<option value='01'>January</option>
					<option value='02'>February</option>
					<option value='03'>March</option>
					<option value='04'>April</option>
					<option value='05'>May</option>
					<option value='06'>June</option>
					<option value='07'>July</option>
					<option value='08'>August</option>
					<option value='09'>September</option>
					<option value='10'>October</option>
					<option value='11'>November</option>
					<option value='12'>December</option>
				</select> 
				<select class="date">
				<option value=''>Year</option>
				<option value='20'>2020</option>
				<option value='21'>2021</option>
				<option value='22'>2022</option>
				<option value='23'>2023</option>
				<option value='24'>2024</option>
					</select>
            <div class="row">
              <div class="col-50">
 
                
              </div>
              <div class="col2">
                <label name="ccvv" >CVV</label>
                <input type="text" id="cvv" placeholder="762" name="ccvv">
              </div>
            </div>
          </div>
          
        </div>
        
        <input type="submit" value="Submit" class="checkoutbtn" name="submitbtn" >
      </form>
    </div>
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