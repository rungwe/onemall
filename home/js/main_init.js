/*
Author: Chaddy Rungwe
Date: 20 May 2015

Content: Library for client side scripts for My Shops

**/


function main_init(){
		pull_broadcasts(6);
		pull_suggestions(3);
		friends_num();
		companies_num();
		ads_num();
		drawer_init();
		close_drawer_onload(1500);
		$(".call").popover({title: "phone number", content: "+263 772 446 073",placement: "bottom"});
		$(".email").popover({title: "email", content: "kchaddy871@gmail.com",placement: "bottom"});
		
		
	
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
