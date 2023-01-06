function loadData(name){
	
	if(name == "butn1"){
		document.getElementById("para").innerHTML= "Basic package is most suitable for beginers";
		document.getElementById("image1").src = "images/1.jpg" ;
	}
	
	else if(name == "butn2"){
		document.getElementById("para").innerHTML= "Standard package is most suitable for physical trainers";
		document.getElementById("image1").src = "images/2.jpg";
	}
	
	else if(name == "butn3"){
		document.getElementById("para").innerHTML= "Premium is most suitable for the models and celebreties";
		document.getElementById("image1").src = "images/5.jpg";
	}
	

	else{
		
		alert("invalid");
	}
	
}
