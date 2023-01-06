function validate(){
    var password = document.getElementById("pwd").value;
    var confirmpassword = document.getElementById("rpwd").value;
    if (password != confirmpassword){
        alert("Passwords does not Match");
        return false;
    }
    return true;
}


var pass = document.getElementById("pwd");
var msg =  document.getElementById("message");
var str = document.getElementById("strength");

pass.addEventListener('input',() => {
    if(pass.value.length > 0){
        msg.style.display = "block";
    }
    else{
        msg.style.display = "none";
    }
})