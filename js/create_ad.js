/*
Author: Chaddy Rungwe
Date: 30 June 2015

Description: Creates adverts and post them to the server side

**/

function post_ad(){
	var title, category, product_info, pic1="", pic2="", pic3="";
	//display_input_error("testing 1234");
	if(document.getElementById("ad_title").value.trim()!=""){
		document.getElementById("ad_title").value=document.getElementById("ad_title").value.trim();
	}
	else{
		display_input_error("Please enter the title of this advert ):")
		return;
	}
	
	if(document.getElementById("ad_category").value=="Please select"){
		display_input_error("Please select valid category ):")
		return;
	}
	
	
	if(document.getElementById("ad_info").value.trim()!=""){
		document.getElementById("ad_info").value=document.getElementById("ad_info").value.trim();
	}
	else{
		display_input_error("Please enter description of this advert ):");
		return;
	}
	
	var form = document.getElementById("ad_form");
	var formData = new FormData(form);
	formData.append("create_ad","true");
	
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
				//window.clearInterval(reloadbr);
				
				var info =xmlhttp.responseText;
				
				if(info=="success"){
					ad_success();
					//clear form
					reset_form();
					//alert(xmlhttp.responseText);
					
				}
				else{
					ad_error();
				}
			  }
		  }
		  
	//name: create_ad, name: pic1, name:pic2, name:pic3, name:title, name:category, name:product_info
	xmlhttp.open("POST","http://localhost/Client.php",true);
	xmlhttp.send(formData);
}
	
// read image uploads and display
function readURL(input,id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#'+id)
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

  $(document).ready(function(){
	  $(".ad_pictures").click(function(){
		  $(this).next().click();  
	  });
  });
  
  $(document).ready(function(){
	  $("#ad_form").submit( function(e){
			e.preventDefault();
			post_ad();
			return false;
	  });
  });
  
  $(document).ready(function(){
	  $("#repost").click( function(e){
			
			setup_adCreate();
	  });
  });
  
  $(document).ready(function(){
	  $("#retry").click( function(e){
			setup_adCreate();
	  });
  });
 
 function ad_success(){
	document.getElementById("ads_body").style.display="none";
	document.getElementById("ads_error").style.display="none";
	document.getElementById("ads_success").style.display="";
	
	document.getElementById("footer_error").style.display="none";
	document.getElementById("footer_ads").style.display="none";
	document.getElementById("footer_success").style.display=""; 
	
	
 }
 
 function ad_error(){
	document.getElementById("ads_body").style.display="none";
	document.getElementById("ads_error").style.display="";
	document.getElementById("ads_success").style.display="none";
	
	document.getElementById("footer_error").style.display="";
	document.getElementById("footer_ads").style.display="none";
	document.getElementById("footer_success").style.display="none"; 
 }
 
 function display_input_error(message){
	 document.getElementById("ad_error").innerHTML="*"+message;
	 //ad_error();
 }
 
 function setup_adCreate(){
	 
	document.getElementById("ads_body").style.display="";
	document.getElementById("ads_error").style.display="none";
	document.getElementById("ads_success").style.display="none";
	
	document.getElementById("footer_error").style.display="none";
	document.getElementById("footer_ads").style.display="";
	document.getElementById("footer_success").style.display="none";  
	
 }
 
 function reset_form(){
	document.getElementById("ad_form").reset();
	document.getElementById("ad_error").innerHTML="";
	document.getElementById("pic1").src="img/ad_prof.png";
	document.getElementById("pic2").src="img/ad_prof.png";
	document.getElementById("pic3").src="img/ad_prof.png";
 }
 
 function ads_num(){
	
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
				document.getElementById("num_ads").innerHTML=info;
				
			}
		  }
	//SEND => name: num_ads 
	//RECEIVE => name: ads_num  
	xmlhttp.open("POST","http://localhost/Client.php?num_ads=true",true);
	xmlhttp.send();
		  
	
}


// pull ads

