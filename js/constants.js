//Global constants

drawer="off"
//url = "http://localhost:8080/Client.php";
url ="Client.php"


function retrieve_image(id ){
	var xmlHttp;
	
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlHttp=new XMLHttpRequest();
		 
		  }
	else
		  {// code for IE6, IE5
		  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		  
		  }
	
	xmlHttp.onreadystatechange=function()
		  {
		  if (xmlHttp.readyState==4 && xmlHttp.status==200)
			{
				var url=xmlHttp.responseText;
				document.getElementById(id).src=url;
			}
		  }
	
	xmlHttp.open("GET",url+"/get-image?id="id,true);
	xmlHttp.send();
}
	
function bindImage(){
		$(document).ready(function(){
			// unfinished
			$(".img_placeholder").each(function(){
				var id =$(this).attr("id");
				retrieve_image(id);
				
			});
		});
	}
	
