/*
Author: Chaddy Rungwe
Date: 20 May 2015

Content: Library for client side scripts for My Shops

**/

function main_init(){
	
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
		          pull_broadcasts(6);
		          pull_suggestions(3);
		          drawer_init();
		          close_drawer_onload(1500);
		          //alert("loading profile.....");
		          get_profile();
		          if (token == "invalid") {
		              window.location.href = "login.php";
		          }

		      }
		  } 	
	xmlhttp_br.open("POST","access.php?request=true",true);
	xmlhttp_br.send();
}

function get_profile(){
    var uri = "http://ec2-52-88-102-30.us-west-2.compute.amazonaws.com";
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
		          document.getElementById("num_buddies").innerHTML = profileInfo.num_friends;
		          document.getElementById("num_ads").innerHTML = profileInfo.active_ads;
		          document.getElementById("user-name").innerHTML = profileInfo.name;
		      }
		  } 	
	xmlhttp_br.open("GET",uri+"/customer/get-user-profile",true);
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
