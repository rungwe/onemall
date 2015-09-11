/*
Author: Chaddy Rungwe
Date: 20 May 2015

Content: Library for client side scripts for My Shops

**/

function main_init(){
		if(typeof(Storage) !== "undefined") {
			// Code for localStorage/sessionStorage.
			sessionStorage.broadcasts="";
			sessionStorage.suggestions="";
			sessionStorage.friends="";
		}
		
		/*
		testing dataset
		//feed properties shop_name,shop_profile_pic,poster,post_info,num_likes, liked, num_comments, time , postID ;
		var broadcastArr =[ {shop_name:"Mr Price",shop_profile_pic:"img/mrlog.jpg",poster:"img/mrpost.jpg",post_info:"hurry for the summer specials",num_likes:"12", liked:"liked", num_comments:"18", time:"@30min" , postID:"1234"},
							{shop_name:"Edgars",shop_profile_pic:"img/edprof.png",poster:"img/edpost.jpg",post_info:"Red Hanger sale",num_likes:"10", liked:"liked", num_comments:"8", time:"@33min" , postID:"12345"}
						   ];
		//sug_data instances  name: shop_name , shop_profile_picture , shop_wall_picture,  shop_id , num_followers;				   
		var suggestionArr = [ {shop_name:"Identity Stores" , shop_profile_picture:"img/edprof.png",  shop_id:"2345" , num_followers:"118"},
							  {shop_name:"Trueworths" , shop_profile_picture:"img/trulog.jpg",  shop_id:"23475" , num_followers:"267"},
							  {shop_name:"Game Stores", shop_profile_picture:"img/glog.jpg",  shop_id:"123475" , num_followers:"473"}
							]
		displayBroadcasts(broadcastArr,"center-main");
		displaySuggestions(suggestionArr,"suggestions");**/
		
		pull_broadcasts(6);
		pull_suggestions(3);
		demo_friendList();
	}


// tested
function Home(){
		document.getElementById("loader").style.display="";
		document.getElementById("center-main").innerHTML="";
		pull_broadcasts(6);
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
	
	if(sessionStorage.friends ){
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
		document.getElementById().style.display="none";
	}
}

// tried and tested							




/* trigger comments popover
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});

**/

		
		




