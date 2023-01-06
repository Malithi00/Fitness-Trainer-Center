<?php

    //Linking the configuration file
    require 'config.php';

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Superfit | ADMIN</title>
	<link rel="stylesheet" href="css/template.css">
	<link rel="stylesheet" href="css/editRecord.css">
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

<?php

    $id = $_GET['id'];
    $sql = "SELECT * FROM register_table WHERE ID = $id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {

			$code = $row["ID"];
            $FirstName = $row["First_Name"];
            $LastName = $row["Last_Name"];
            $Gender = $row["Gender"];
            $Age = $row["Age"];
            $Mobile = $row["Mobile_Number"];
            $Email = $row["Email"];         
            $Address = $row["Address"];
            $Health = $row["Health_Issues"];
            $Pwd = $row["Password"];

          }
        
      } else {
        echo "No results found";
      }

?>



    <div class="form">
		<form method="POST" action="updateUser.php?id=<?php echo $id; ?>">

			<center><div class="Register-title">Edit user details</div><br/><br/></center>

            <br/>User ID:
			<input type="text" name="id"  class="textbox" value="<?php echo $code ?>" required><br/><br/>

			<br/>First Name:
			<input type="text" name="firstName"  class="textbox" value="<?php echo $FirstName ?>" required><br/><br/>
	
			<br/>Last Name:
			<input type="text" name="lastName"  class="textbox" value="<?php echo $LastName ?>" required><br/><br/><br/>
			
			Gender : <br/>
			<input type="radio" name="gender" value="<?php echo $Gender ?>" checked>Male 
			<input type="radio" name="gender" value="<?php echo $Gender ?>" >Female<br/><br/>
	
			<br/>Mobile Number:
			<input type="phone" name="mobile" pattern="[0-9]{10}" class="textbox" value="<?php echo $Mobile ?>" required><br/><br/>
	
			<br/>E-mail:
			<input type="email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" class="textbox" value="<?php echo $Email ?>" required><br/><br/><br/>
	
			Address:<br/>
			<input type="text" name="address"  class="textbox" value="<?php echo $Address ?>"><br/><br/><br/>

            Age:
			<input type="number" name="age"  class="textbox" value="<?php echo $Age ?>" required><br/><br/>
			
			Health issues : <br/>
			<input type="text" name="health" class="textbox" value="<?php echo $Health ?>" ><br/><br/>

			<br/>
			
            Password:
			<input type="text" name="pwd" class="textbox" value="<?php echo $Pwd ?>" required><br/><br/>
	
			<center>
				<input type="submit" name="submitBtn" id="submitBtn" class="register" value="Update details"><br/><br/><br/>
		    </center>
		
		</form>
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