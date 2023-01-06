
<?php 
include 'config.php';
session_start();
?>


<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Super Fitt</title>
	<link rel="stylesheet" type="text/css" href="css/iindex.css">
    <link rel="stylesheet" type="text/css" href="css/iview.css">
	<!--Bootstrap website link to get social media icons(use.fontawesome.com)-->
	<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    /> 
</head>
<body >

	<div class="wholepge">
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
    <br><br><br><br><br>

    
<?php
if($_SESSION['Email']){
$sql = "SELECT * FROM instructor WHERE Email = '".$_SESSION['Email']."' ";

if($result=$con->query($sql)){
    if($result->num_rows>0){
        echo("<table border ='1'> ");
        
        while($row=$result->fetch_assoc()){
            echo("<tr>");
            echo("<td>".$row['ID']."</td");
            echo("<tr>".$row['Name']."</td>");
            echo("<td>".$row['Gender']."</td>");
            echo("<td>".$row['ContactNo']."</td>");
            echo("<td>".$row['Email']."</td>");
            echo("<td>".$row['Address']."</td>");
            echo("<td>".$row['DOB']."</td>");
            echo("<td>".$row['Education']."</td>");
            echo("<td>".$row['Course']."</td>");
            echo("</tr>");
        }
        echo("</table>");
    }else{
        echo "no resilts";
    }
}
else{
    echo "error".$con->error;
}
}





?>
<br><br>
<a class="cont" href = "iprofile.html">Back</a>

</body>
</html>