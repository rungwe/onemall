/*
Author: Chaddy Rungwe
Date: 30 June 2015

Description: Creates adverts and post them to the server side

**/
var lat;
var longi;
function post_ad(){
	var title = document.getElementById("ad_title").value.trim();
    var category=document.getElementById("ad_category").value;
    var product_info =document.getElementById("ad_info").value.trim();
    var price = document.getElementById("price").value.trim();
    //var pic1="", pic2="", pic3="";
	//display_input_error("testing 1234");
	if(document.getElementById("ad_title").value.trim()!=""){
		document.getElementById("ad_title").value=document.getElementById("ad_title").value.trim();
	}
	else{
		//display_input_error("Please enter the title of this advert ):")
        notify_validation("Please enter the title of this advert ):");
		return;
	}
	
	if(document.getElementById("ad_category").value=="Please select"){
		//display_input_error("Please select valid category ):")
        notify_validation("Please select valid category ):");
		return;
	}
	
	
	if(document.getElementById("ad_info").value.trim()!=""){
		document.getElementById("ad_info").value=document.getElementById("ad_info").value.trim();
	}
    else{
		//display_input_error("Please enter description of this advert ):");
        notify_validation("Please enter description of this advert ):");
		return;
	}

    if (price==""){
        //display_input_error("Please enter advert price amount ):")
        notify_validation("Please enter advert price amount ):");
        return;
    }
	
	
    var ad_array={title:title,details:product_info,price:parseFloat(price), currency:"en-ZA",categories:[category]}
    var ad_jason = JSON.stringify(ad_array);
    //alert(ad_jason);
	//var form = document.getElementById("ad_form");
	//var formData = new FormData(form);
	//formData.append("create_ad","true");
    
    var position;
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(getPosition);

        
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
	//alert(lat);
	var xmlhttp;
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  
		  }
		  xmlhttp.onreadystatechange = function () {
		      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		          //window.clearInterval(reloadbr)
		          var info = xmlhttp.responseText;
		          //alert("ad received " + info);
                  //notify_success("advert posted");
		          
		          process_uploads(info.trim());
		          reset_form();
		          notify_success("advert posted");
		          //alert(xmlhttp.responseText);


		      }
		      else if (xmlhttp.readyState == 4 && xmlhttp.status != 200) {
		          ad_error();
		      }
		  }
		  
	//name: create_ad, name: pic1, name:pic2, name:pic3, name:title, name:category, name:product_info
	xmlhttp.open("POST",URI+"customer/create-advert?longitude=18.472756099999998&latitude=-33.9548292",true);
    xmlhttp.setRequestHeader("Authorization",'Bearer ' + token);
    xmlhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
	xmlhttp.send(ad_jason);
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
 

function process_uploads(id){
    if (document.getElementById("ad_pic1").value!=""){
        //alert(document.getElementById("ad_pic1").value)
        upload_ad_img(id,"ad_pic1");
    }
   if (document.getElementById("pic2").value!=""){
       upload_ad_img(id,"ad_pic2");
    }

    if (document.getElementById("pic3").value!=""){
        upload_ad_img(id,"ad_pic3");
    }
}



function getPosition(position){

    lat = position.coords.latitude;
    longi = position.coords.longitude;
}

function upload_ad_img(id,location){
	   // btnUploadFile is the id of the button that will trigger uploads
       try{
		  var data = new FormData();

		  // fileUpload is the id of the file upload html input
		  var files = $("#"+location).get(0).files;

		  // Add the uploaded image content to the form data collection
		  // Do not change this
		  if (files.length > 0) {
			   data.append("UploadedImage", files[0]);
		  }

		  // Make Ajax request with the contentType = false, and procesDate = false
		  var ajaxRequest = $.ajax({
			   type: "POST",
			   url: URI+"upload-advert-pictures?id="+id,    // put the url here of where you want to post 
			   contentType: false,
			   processData: false,
			   beforeSend: function (xhr) {
			   
		xhr.setRequestHeader('Authorization', 'bearer '+token);
	},
			   data: data
			   
			   });

			   ajaxRequest.done(function (xhr, textStatus, data) {

			       notify_success("image uploaded");
			       

			   });
	   }

       catch(err){
           return;
       }
	}