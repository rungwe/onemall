function validate_reg_form(){
	var email=document.getElementById("form-email").value.trim();
	var passwd=document.getElementById("pswd").value.trim();
	var confirm = document.getElementById("pswd1").value.trim();
	var firstname = document.getElementById("form-first-name").value.trim();
	var lastname = document.getElementById("form-last-name").value.trim();
	document.getElementById("form-email").value =email;
	document.getElementById("pswd").value = passwd;
	document.getElementById("pswd1").value = confirm;
	document.getElementById("form-first-name").value = firstname;
	document.getElementById("form-last-name").value = lastname;
	
	if (validateEmail(email)==false){
		document.getElementById("error").innerHTML="Invalid email, put a valid email address";
		return false;
		
	}
	
	else if(passwd.length<6){
		document.getElementById("error").innerHTML="Error, password too short, must be greater than 6 characters";
		return false;
	}
	
	else if (confirm==""){
		document.getElementById("error").innerHTML="Error, please confirm your password";
		return false;
	}
	
	else if (passwd!=confirm){
		document.getElementById("error").innerHTML="Error, password not matching";
		return false;
	}
	
	else if(firstname==""){
		document.getElementById("error").innerHTML="Error, first name required";
		return false;
	}
	
	else if(lastname==""){
		document.getElementById("error").innerHTML="Error, last name required";
		return false;
	}
	
	
	else{
		
		document.getElementById("reg-form").submit();
		
	}
	
	
	
	
	
}


function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}