<?php

    
    require 'config.php';
	session_start();

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Superfit | INSTRUCTOR</title>
	<link rel="stylesheet" href="css/iindex.css">
	<link rel="stylesheet" href="css/instructor.css">
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
	if($_SESSION['Email']){
		$mail = $_GET['Email'];
    
    $sql = "SELECT * FROM instructor WHERE Email = '".$_SESSION['Email']."'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {

			$code = $row["ID"];
            $FirstName = $row["Name"];
            $Gender = $row["Gender"];
            $Mobile = $row["ContactNo"];
            $Email = $row["Email"];         
            $Address = $row["Address"];
            $dob = $row["DOB"];
            $pwd = $row["Password"];
            $rPwd = $row["confirmPassword"];
            $edu = $row["Education"];
            $course = $row["Course"];

          }
        
      } else {
        echo "No results found";
      }
	}

?>



    <div class="form">
		<form method="POST" action="updateinst.php?id=<?php echo $id; ?>">

			<center><div class="Register-title">Edit Instructor Details</div><br/><br/></center>

            <br/>
                    <label for="name">Full Name </label><br>
                    <input type="text" name="firstName" placeholder="Enter Full Name" class="box"><br/><br/>
            
                    <br/>
                    <br/>
            
                    Gender : <br/>
                    <input type="radio" name="gender"  value="male">Male 
                    <input type="radio" name="gender" value="female" >Female<br/><br/>
            
                    <br/>
                    <label for="mobile">Contact No </label><br>
                    <input type="text" name="mobile" pattern="[0][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" placeholder="Enter Mobile Number" class="box" <br/><br/>
            
                    <br/>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" placeholder=" Enter E-mail" pattern="[a-z0-9.%+-]+@[a-z0-9.%+-]+\.[a-z]{2,3}" class="box" ><br/><br/><br/>
            
                    Address:<br/>
                    <textarea name="address" rows="8" cols="50" class="addressbox" placeholder="Enter Address"></textarea><br/><br/><br/>
            
                    Date of Birth : <br/>
                    <input type="date" name="day" class="dob" ><br/><br/>
                    
                    
        
                    <br/>
                    <label for="pasword">Enter Password</label><br>
                    <input type="password" name="password" id="pwd" pattern="(?=.+\d)(?=.+a-z)(?=.+A-Z).{5-10}" class="box" placeholder="Enter Password" ><br/>
                    <p id ="message">Password is  <span id="strength"></span> </p> 
                    <br/>
                    <label for="repasword">Re-Enter Password</label><br>
                    <input type="password" name="repassword" id="rpwd" class="box" placeholder="Enter Again" ><br/><br/>

                    <br>
                    <label for="select">Educational Qualificaions</label><br>

                    <select class="opt" name="edu">
                        <option>O/L</option>
                        <option>A/L</option>
                        <option>Diploma</option>
                        <option>Degree</option>
                        <option>Other</option>

                    </select><br><br><br>
                    <br>

                    <label for="course">Course</label><br>
                    <input type="text" name="course" id="cid" class="box" placeholder="Enter Preferred Course to instruct" ><br><br><br>
			
            
	
			<center>
				<input type="submit" name="submitBtn" id="submitBtn" class="register" value="Update details"><br/><br/><br/>
		    </center>
		
		</form>
	</div>

    


	



</body>
</html>