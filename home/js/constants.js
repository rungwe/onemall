//Global constants

drawer="off"
//url = "http://localhost:8080/Client.php";
url ="Client.php"
URI = "http://ec2-52-88-102-30.us-west-2.compute.amazonaws.com/";
token="";
function get_access(){
	
	var xmlhttp_br;
	
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp_br=new XMLHttpRequest();
		 
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp_br=new ActiveXObject("Microsoft.XMLHTTP");
		  
		  }
		  xmlhttp_br.onreadystatechange = function () {
		      if (xmlhttp_br.readyState == 4 && xmlhttp_br.status == 200) {

		          var access = xmlhttp_br.responseText;
		          token = access.trim();
		          if (token == "invalid") {
		              window.location.href = "login.php";
		          }

		      }
		  } 	
	xmlhttp_br.open("POST","access.php?request=true",true);
	xmlhttp_br.send();
}
   
