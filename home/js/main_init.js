/*
Author: Chaddy Rungwe
Date: 20 May 2015

Content: Library for client side scripts for My Shops
**/


function main_init(){
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
		          if (token == "invalid") {
		              window.location.href = "login.php";
		          }
		          else {

		              pull_broadcasts(6);
		              for (var i = 0; i < 3;i++ ){
		                  pull_suggestions(1);
		              }
		                  
		              //alert("loading profile.....");
		              get_profile();
		              social_media_init();

		          }


		      }
		  } 	
	xmlhttp_br.open("POST","access.php?request=true",true);
	xmlhttp_br.send();
	
}

function get_profile(){
    
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

		          var profile_data = xmlhttp_br.responseText;
		          //alert(profile_data);
		          var profileInfo = JSON.parse(profile_data)[0];
		          document.getElementById("num_followers").innerHTML = profileInfo.num_of_followigs;
		          var following = parseInt(profileInfo.num_of_followigs);
		          if (following == 0) {
		              sessionStorage.recommeded = 0;
		              pull_recommended(10, "recommend_modal");
		              $('#company_reommender').modal('toggle');
		          }
		          document.getElementById("num_buddies").innerHTML = profileInfo.num_friends;
		          document.getElementById("num_ads").innerHTML = profileInfo.active_ads;
		          document.getElementById("user-name").innerHTML = profileInfo.fname + "&nbsp;&nbsp;" + profileInfo.lname;
		          document.getElementById("popup_name").innerHTML = profileInfo.fname;
		          document.getElementById("firstname").value = profileInfo.fname;
		          document.getElementById("surname").value = profileInfo.lname;
		          document.getElementById("dob").value = profileInfo.date_of_birth;
		          sessionStorage.type = "customer";
		          sessionStorage.name = profileInfo.fname + " " + profileInfo.lname;
		          //alert(profileInfo.profile_pic.url);
		          document.getElementById("profile-pic").src = "https://s3-us-west-2.amazonaws.com/"+profileInfo.profile_pic.url;
		          notify("Welcome back " + profileInfo.fname, "info");
		      }
		  } 	
	xmlhttp_br.open("GET",URI+"customer/get-user-profile",true);
    xmlhttp_br.setRequestHeader("Authorization",'Bearer ' + token);
   // xmlhttp_br.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xmlhttp_br.send();
}

// tested
function Home(){
		document.getElementById("friends_nav").style.display="none";
		document.getElementById("center-main").style.display="";
		
}
// tested
function find_friends(){
	
	if(sessionStorage.friends ){
			document.getElementById("center-main").innerHTML=sessionStorage.friends;
	}
	$(".tab").removeClass("active_tab");
	$("#sug_friends").addClass("active_tab");
	
    $(".tab").click(function(){
		$(".tab").removeClass("active_tab");
        $(this).addClass("active_tab");
    });
		
		
}
// tested
function myfriends(){
	
	if(sessionStorage.friends){
			document.getElementById("center-main").innerHTML=sessionStorage.friends;
	}
	
	$(".tab").removeClass("active_tab");
	$("#friendslist").addClass("active_tab");
	
    $(".tab").click(function(){
		$(".tab").removeClass("active_tab");
        $(this).addClass("active_tab");
    });
		
		
}

function loader(status){
	
	if (status=="start"){
		document.getElementById("loader").style.display="";
	}
	else{
		document.getElementById("loader").style.display="none";
	}
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