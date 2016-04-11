function validate_login_form(){
	var email=document.getElementById("form-email").value.trim();
	var passwd=document.getElementById("pswd").value.trim();
	document.getElementById("form-email").value =email;
	document.getElementById("pswd").value = passwd;
	
	if (validateEmail(email)==false){
	    notify_failure("Invalid email, put a valid email address");
		//document.getElementById("error").innerHTML="Invalid email, put a valid email address";
		return false;
		
	}
	
	else if(passwd.length<6){
	    notify_failure("Error, password too short, must be greater than 6 characters");
		//document.getElementById("error").innerHTML="Error, password too short, must be greater than 6 characters";
		return false;
	}
	
	
	else{
		
		document.getElementById("log-form").submit();
		
	}
	
}


function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}