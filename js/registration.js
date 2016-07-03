function validate_reg_form(){
	var email=document.getElementById("form-email-reg").value.trim();
	var passwd=document.getElementById("pswd-reg").value.trim();
	var confirm = document.getElementById("pswd1-reg").value.trim();
	var firstname = document.getElementById("form-first-name").value.trim();
	var lastname = document.getElementById("form-last-name").value.trim();
	document.getElementById("form-email-reg").value =email;
	document.getElementById("pswd-reg").value = passwd;
	document.getElementById("pswd1-reg").value = confirm;
	document.getElementById("form-first-name").value = firstname;
	document.getElementById("form-last-name").value = lastname;
	
	if (validateEmail(email)==false){
		notify_failure("Invalid email, put a valid email address");
		return false;
		
	}
	
	else if(passwd.length<6){
		notify_failure("Error, password too short, must be at least 6 characters");
		return false;
	}
	
	else if (confirm==""){
		notify_failure("Error, please confirm your password");
		return false;
	}
	
	else if (passwd!=confirm){
		notify_failure("Error, password not matching");
		return false;
	}
	
	else if(firstname==""){
		notify_failure("Error, first name required");
		return false;
	}
	
	else if(lastname==""){
		notify_failure("Error, last name required");
		return false;
	}
	
	
	else{
		
		document.getElementById("reg-form").submit();
		
	}
	
	
	
	
	
}

function reg_error(error,login){
    if(!login){
        $('#signup').modal('toggle');
    }
    
    notify_failure(error);
}

function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}