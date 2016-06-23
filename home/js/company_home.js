
function init_company(){
	drawer_init();
    close_drawer_onload(1000);
    //document.getElementById("side-drawer").click();
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
		          //alert(access);
		          if (token == "invalid") {
		              window.location.href = "login.php";
		          }
		          else {

		              pull_company_broadcasts(1);
		              social_media_init();
		              set_edit();
		              company_profile();
		              var cropperOptions = {
		                  modal: true,
		                  imgEyecandyOpacity: 0.4,
		                  onBeforeImgUpload: function () { console.log('onBeforeImgUpload') },
		                  onAfterImgUpload: function () { console.log('onAfterImgUpload') },
		                  onImgDrag: function () { console.log('onImgDrag') },
		                  onImgZoom: function () { console.log('onImgZoom') },
		                  onBeforeImgCrop: function () { console.log('onBeforeImgCrop') },
		                  onAfterImgCrop: function () { console.log('onAfterImgCrop') },
		                  onReset: function () { console.log('onReset') },
		                  onError: function (errormessage) { console.log('onError:' + errormessage) }
		              };

		              var cropperHeader = new Croppic('broadcastPost', cropperOptions);


		          }


		      }
		  } 	
	xmlhttp_br.open("POST","access.php?request=true",true);
	xmlhttp_br.send();
	
}

function company_profile(){
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

		          var data = xmlhttp_br.responseText;
		          //alert(data);
		          var company = JSON.parse(data);
		          company = company[0];
		          document.getElementById("company_name").innerHTML = company.name;
		          document.getElementById("website").innerHTML = company.website;
		          document.getElementById("num_followers").innerHTML = company.number_of_followers;
		          sessionStorage.type = "company";
		          sessionStorage.company_name = company.name;
		          var imageUrl = "https://s3-us-west-2.amazonaws.com/";

		          if (company.wallpaper != null) {
		              $('#wall').css('background-image', 'url("' + imageUrl + company.wallpaper.url + '")');
		          }

		          var profile_url = "https://s3-us-west-2.amazonaws.com/";

		          if (company.profile_pic != null) {
		              document.getElementById("profile-pic").src = profile_url + company.profile_pic.url;
		          }

		          sessionStorage.type = "company";
		          sessionStorage.company_name = company.name;

		          for (var i in company.categories) {
		              document.getElementById("categories").innerHTML += i.category + " ";
		          }




		      }
		  } 	
	xmlhttp_br.open("GET",URI+"company/get-user-profile",true);
	xmlhttp_br.setRequestHeader("Authorization", "bearer " + token);
	xmlhttp_br.send();
	
}  


function set_edit(){
    $(document).ready(function () {

        $('#company_name').editable({

            url: URI + 'company/edit-profile',
            pk: 1,
            emptytext: "",
            params: function (params) {  //params already contain name, value and pk
                var data = {};
                data["name"] = params.value;
                
                return JSON.stringify(data);
            },
            ajaxOptions: {

                beforeSend: function (request) {
                    request.withCredentials = true;
                    request.setRequestHeader("Authorization", "Bearer " + token);
                    
                },
                type: 'put',
                contentType: 'application/json; charset=utf-8'

            }
        });
        $('#website').editable({
            url: URI + 'company/edit-profile',
            pk: 1,
            params: function (params) {  //params already contain name, value and pk
                var data = {};

                data["website"] = params.value;
                return JSON.stringify(data);
            },
            ajaxOptions: {

                beforeSend: function (request) {
                    request.withCredentials = true;
                    request.setRequestHeader("Authorization", "Bearer " + token);
                },
                type: 'put',
                contentType: 'application/json; charset=utf-8'

            }
        });
        $('#email').editable({
            url: URI + 'company/edit-profile',
            pk: 1,
            params: function (params) {  //params already contain name, value and pk
                var data = {};

                data["email"] = params.value;
                return JSON.stringify(data);
            },
            ajaxOptions: {

                beforeSend: function (request) {
                    request.withCredentials = true;
                    request.setRequestHeader("Authorization", "Bearer " + token);
                },
                type: 'put',
                contentType: 'application/json; charset=utf-8'

            }
        });
        $('#contact').editable({
            url: URI + 'company/edit-profile',
            pk: 1,
            params: function (params) {  //params already contain name, value and pk
                var data = {};

                data["contact"] = params.value;
                return JSON.stringify(data);
            },
            ajaxOptions: {

                beforeSend: function (request) {
                    request.withCredentials = true;
                    request.setRequestHeader("Authorization", "Bearer " + token);
                },
                type: 'put',
                contentType: 'application/json; charset=utf-8'

            }
        });
        $('#categories').editable({
            url: URI + 'company/edit-profile',
            pk: 1,
            params: function (params) {  //params already contain name, value and pk
                var data = {};

                data["name"] = params.value;
                return JSON.stringify(data);
            },
            ajaxOptions: {

                beforeSend: function (request) {
                    request.withCredentials = true;
                    request.setRequestHeader("Authorization", "Bearer " + token);
                },
                type: 'put',
                contentType: 'application/json; charset=utf-8'

            }
        });
    });
}



function social_media_init() {
    $(document).ready(function () {
        $(".social-media").click(function () {
            var icon = $(this);
            
            if (icon.hasClass("fbk")) {
                if (icon.hasClass("chosen")) {
                    icon.removeClass("chosen");
                    icon.removeClass("fb");
                }
                else {
                    icon.addClass("chosen");
                    icon.addClass("fb");
                }
            }

            else if (icon.hasClass("twt")) {
                if (icon.hasClass("chosen")) {
                    icon.removeClass("chosen");
                    icon.removeClass("twitter");
                }
                else {
                    icon.addClass("chosen");
                    icon.addClass("twitter");
                }
            }

            else if (icon.hasClass("inst")) {
                if (icon.hasClass("chosen")) {
                    icon.removeClass("chosen");
                    icon.removeClass("instagram");
                }
                else {
                    icon.addClass("chosen");
                    icon.addClass("instagram");
                }
            }

            else if (icon.hasClass("ggp")) {
                if (icon.hasClass("chosen")) {
                    icon.removeClass("chosen");
                    icon.removeClass("google");
                }
                else {
                    icon.addClass("chosen");
                    icon.addClass("google");
                }
            }

            else if (icon.hasClass("lnkd")) {
                if (icon.hasClass("chosen")) {
                    icon.removeClass("chosen");
                    icon.removeClass("linkdn");
                }
                else {
                    icon.addClass("chosen");
                    icon.addClass("linkdn");
                }
            }

        });
    });
}