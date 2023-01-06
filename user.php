<?php
	session_start(); 

    include 'config.php'; 

    $uname = $_SESSION['Email'];
    $pass = $_SESSION['pasword'];

	$sql = "SELECT * FROM register_table WHERE Email='$uname' AND Password='$pass'";
	$result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

		$ID = $row["ID"];
        $First_Name = $row["First_Name"];
        $Last_Name = $row["Last_Name"];
        $Gender = $row["Gender"];
        $Mobile_Number = $row["Mobile_Number"];
        $Email = $row["Email"];
        $Address = $row["Address"];
        $Helth_Issues = $row["Health_Issues"];
        $password = $row["Password"];
    }
    else{
		echo"No records found";
        exit();
		$ID = "";
        $First_Name = "";
        $Last_Name = "";
        $Gender = "";
        $Mobile_Number = "";
        $Email = "";
        $Address = "";
        $Helth_Issues = "";
        $pass = "";
      }
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Superfit | Profile</title>
	<link rel="stylesheet" href="css/template.css">
	<link rel="stylesheet" href="css/userStyle.css">

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
			<a href="user.html">User</a>
			<a href="instructor.html">Instructor</a>
		
			</div>		
			</div>

		
			<div class="shop-cart">
				<a href="cart.html" target="_blank"><i class="fa fa-cart-plus">Cart</i></a>
			
			</div>
		</ul>

	</nav>







	<div class="wrapper">
			<div class="left">
			<br><br>
				
				<h4><b>Name</b><h4>
				
				<hr>
				<br><br><br>
				<div class="mt-3">
					<h3><i>SUPER<br><br> FITNESS<br><br> CENTER</i></h3><br><br>
					<h4><i>Make <br><br>Your <br><br>Dream <br><br>A <br><br>Reality</i></h4>
				</div>
			</div>
		<div class="right">
			
			<div class="info">
				 <div class="form" action="#" onsubmit="return checkPassword()">
					<h3><u>Informations</u></h3>
					<div class="info_data">
					
						<div class="data">
							<h4>First name:</h4>
                            <?php
							echo "<input type='text' name='fname' value= $First_Name disabled><br><br>"
                            ?>
						</div><br>
						
						<div class="data">
							<h4>Last name:</h4>
                            <?php
                            echo "<input type= 'text' name= 'lname' value= $Last_Name disabled ><br><br>"
                            ?>
						</div><br>
						
						<div class="data">
							<h4>Gender:<br></h4>
							<?php
                            echo "<input type= 'text' name= 'gender' value= $Gender disabled ><br><br>"
                            ?>
						</div><br>
						
						<div class="data">
							<h4>Mobile Number:<br></h4>
							<?php
                            echo "<input type= 'phone' name= 'mobile' value= $Mobile_Number disabled ><br><br>"
                            ?>
						</div><br>
						
						<div class="data">
							<h4>E-mail:<br></h4>
							<?php
                            echo "<input type= 'email' name= 'email' value= $Email disabled ><br><br>"
                            ?>
						</div><br>
						
						<div class="data">
							<h4>Address:<br></h4>
                            <textarea name = "address" rows="5" cols="50" disabled>
                            <?php
                                echo $Address
                            ?>
                            </textarea>
                            
						</div><br>
						
						<div class="data">
							<h4>Helth Issues:<br></h4>
							<textarea name = "Helth_Issues" rows="5" cols="50" disabled>
                            <?php
							echo $Helth_Issues
                            
                            ?>
							</textarea>
						</div><br>
						
						<div class="input-container">
									<h4>Password</h4>

                                    <?php
                                        echo "<input type= 'password' name= 'password'id = 'password' value= $password disabled><br><br>"
                                    ?>
									<input type="checkbox" onclick="myFunction()">Show Password

									<script> /*The following password content corresponds to the content referred from W3schools*/
										function myFunction() {
  											var x = document.getElementById("password");
  											if (x.type === "password") {
    											x.type = "text";
  											} 
											else {
    											x.type = "password";
  											}
										}
									</script>
						</div>
								
								<center>
									<a href="opening.html"><input type="submit" id="submitBtn" value="SignOut" ></a>
								</center>			
						
						
						
					</div>
				 <hr> 
				 </form>
				 </div>
			</div>
				
				
				
				<div class="social_media">
					<ul>
						<li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
				
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
			<div class="left_col"><br><br>
				<h2>Newsletter</h2><br>
				<div class="border"></div>
				<p>Enter your Email to get News and Updates</p><br>
				<form action="" class="newsletter_form"><br>
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
	<script src="js/userScript.js"></script>
</body>
</html>