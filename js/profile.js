/*
Author: Chaddy Rungwe
Date: 19 Sept 2015

subject: Retrieve the user profile information and displays it in appropriate positions


**/

function build_profile(){
	var xmlhttp;
	
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  
		  xmlhttp=new XMLHttpRequest();
		  }
	else
		  {// code for IE6, IE5
		 
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
	
	xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				var info= xmlhttp.responseText;
				var profile=JSON.parse(info);
				document.getElementById("num_buddies").innerHTML="5";
				document.getElementById("num_followers").innerHTML=profile.number_of_followers;
				document.getElementById("user-id").innerHTML=profile.name;
			}
		  }
	//SEND => name: num_friends, name: user_id;
	//RECEIVE => name: friends_num;	  
	xmlhttp.open("POST",url+"?num_friends=true",true);
	xmlhttp.setRequestHeader("Authorisation",'Bearer ' + sessionStorage.getItem(tokenKey));
	xmlhttp.send();
}