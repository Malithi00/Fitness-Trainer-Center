function enableButton(){
	if(document.getElementById("checkBox").checked){
		document.getElementById("submitBtn").disabled = false;
	}else{
		document.getElementById("submitBtn").disabled = true;
	}		
}

function checkPassword(){
    var v1 = document.getElementById("pwd1").value;
    var v2 = document.getElementById("pwd2").value;

    if (v1 != v2){
        alert("Password mismatch !");
        return false;
    }
    return true;
}
