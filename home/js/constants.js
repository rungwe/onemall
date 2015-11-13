//Global constants

drawer="off"
//url = "http://localhost:8080/Client.php";
url ="Client.php"
URI = "http://ec2-52-32-82-172.us-west-2.compute.amazonaws.com/";
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
                        title: "successfull operation"
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
                        title: "operation failed"
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