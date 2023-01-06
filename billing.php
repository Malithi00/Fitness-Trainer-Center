<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Super Fitt</title>
	<link rel="stylesheet" type="text/css" href="css/billing.css">
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


<h2 class="pagename">Billing Details</h2>
<hr>

    <div class="tablecontainer">
		
        <table class="bill_table" width="50%", border="1" >
            <tr>
                <th style="text-align:center;">Bill Id</th>
                <th style="text-align:center;">CustomerName</th>
                <th style="text-align:center;">Customer Mobile</th>
                <th style="text-align:center;">Customer Email</th>
                
            </tr>

            <tbody>
                <?php
               
				include "config.php";
			   
				$query = "SELECT * FROM billing_details ORDER BY id DESC LIMIT 1";
				$query_run = mysqli_query($con,$query);
				 
				if(mysqli_num_rows($query_run)>0)
				{
					foreach($query_run as $row)
					{
						?>
						<tr>
							<td><?=$row['ID'];?></td>
							<td><?=$row['Name'];?></td>
							<td><?=$row['Mobile_No'];?></td>
							<td><?=$row['Email'];?></td>
							

						</tr>
						<?php
					}
				}
				else{
					?>
					<tr>
						<td colspan="4">No records found</td>
				</tr>
					<?php
				}
				?>
            </tbody>

        </table>
			
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
</body>
</html>