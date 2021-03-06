//Global constants
//683275835893 
drawer="off"
//url = "http://localhost:8080/Client.php";
url ="Client.php"
URI = "http://ec2-52-32-172-4.us-west-2.compute.amazonaws.com/";
img_url = "https://s3-us-west-2.amazonaws.com/";
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

$(document).ready(function () {
    $(".home").click(function () {
        window.location.href = "index.php";
    });

    $(".following").click(function () {
        window.location.href = "followers.php";
    });

    $(".company").click(function () {
        window.location.href = "companies.php";
    });
});


function redirect(url){
    window.location.href =url;

}

function notify(mssg, type){
    //alert("executed");
    $(document).ready(function(){
				
					$.notify({
						// options
						message: mssg
					},{
						// settings
						type: type,
                        z_index: 1000000
					});
				
			});
}

function notify_success(mssg){
    //alert("executed");
    $(document).ready(function(){
				
					$.notify({
						// options
						message: mssg,
                        icon: 'glyphicon glyphicon glyphicon-ok',
                        title: "successful operation,"
					},{
						// settings
						type: "success",
                        z_index: 1000000
					});
				
			});
}

function notify_failure(mssg){
    //alert("executed");
    $(document).ready(function(){
				
					$.notify({
						// options
						message: mssg,
                        icon: 'glyphicon glyphicon-remove',
                        title: "operation failed,"
					},{
						// settings
						type: "danger",
                        z_index: 1000000
					});
				
			});
}

function notify_validation(mssg){
    //alert("executed");
    $(document).ready(function(){
				
					$.notify({
						// options
						message: mssg,
                        icon: 'glyphicon glyphicon-remove'
                        
					},{
						// settings
						type: "danger",
                        z_index: 1000000
					});
				
			});
}

function readURL2(input,id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#'+id)
                    .attr('src', e.target.result);
                    upload_profile_pic();
            };
            
            reader.readAsDataURL(input.files[0]);
        }
    }

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
	  $(".pictures").click(function(){
		  $(this).next().click();  
	  });
      
  });

function change_wall(input,id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#' + id)
                    .css('background-image', 'url(' + e.target.result + ')');
                
                upload_wallpaper();
            };

            reader.readAsDataURL(input.files[0]);
        }
 }

 function upload_wallpaper(){
	   // btnUploadFile is the id of the button that will trigger uploads
          //notify_success("wall paper upload started");
		  var data = new FormData();

		  // fileUpload is the id of the file upload html input
		  var files = $("#wall-pic").get(0).files;

		  // Add the uploaded image content to the form data collection
		  // Do not change this
		  if (files.length > 0) {
			   data.append("UploadedImage", files[0]);
		  }
          var end_point="";
         
          if(sessionStorage.type=="customer"){
              end_point = "upload-customer-wallpaper";
          }
          else{
               end_point = "upload-company-wallpaper";
          }
		  // Make Ajax request with the contentType = false, and procesDate = false
		  var ajaxRequest = $.ajax({
			   type: "POST",
			   url: URI+end_point,    // put the url here of where you want to post 
			   contentType: false,
			   processData: false,
               success: function(){
                   notify_success("wall paper uploaded successfully");
               },
               error: function(){
                   notify_failure("wall paper upload failed");
               },
			   beforeSend: function (xhr) {
			   
		xhr.setRequestHeader('Authorization', 'bearer '+token);
	},
			   data: data
			   
			   });

			   ajaxRequest.done(function (xhr, textStatus, data) {

			       

			   });
	   
	}


    function upload_profile_pic(){
	   // btnUploadFile is the id of the button that will trigger uploads
          //notify_success("wall paper upload started");
		  var data = new FormData();
          //alert("testing")
		  // fileUpload is the id of the file upload html input
		  var files = $("#prof-pic").get(0).files;

		  // Add the uploaded image content to the form data collection
		  // Do not change this
		  if (files.length > 0) {
			   data.append("UploadedImage", files[0]);
		  }
          var end_point="";
         
          if(sessionStorage.type=="customer"){
              end_point = "upload-customer-profile-picture";
          }
          else{
               end_point = "upload-company-profile-picture";
          }
		  // Make Ajax request with the contentType = false, and procesDate = false
		  var ajaxRequest = $.ajax({
			   type: "POST",
			   url: URI+end_point,    // put the url here of where you want to post 
			   contentType: false,
			   processData: false,
               success: function(){
                   notify_success("profile pic uploaded successfully");
               },
               error: function(){
                   notify_failure("profile pic upload failed");
               },
			   beforeSend: function (xhr) {
			   
		xhr.setRequestHeader('Authorization', 'bearer '+token);
	},
			   data: data
			   
			   });

			   ajaxRequest.done(function (xhr, textStatus, data) {

			       

			   });
	   
	}