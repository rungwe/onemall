/*
Author: Chaddy Rungwe
Date: 20 May 2015

Description: fetches and display friends

status: 

**/

var isFriendsClicked="";
var isSuggestedCliked="";

function pull_friends(type){ // type can either be friends or suggested_friends
	var xmlhttp;
	var id="";
	if(type=="suggested_friends"){
		id="suggested_friends";
	}
	else{
		id="friends";
	}
	
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
				//SEND => name: request_companies = 'true'  , name:category, name:number_companies;
				
				var info =xmlhttp.responseText;
				//alert(info);center-main
				
				if(info!=""){
					var data =JSON.parse(info);
					document.getElementById("loader").style.display="none"
					displayFriends(data,id);
				}
			}
	}
		
	//SEND => name: pull_friends, name: user_id
	//RECEIVE => name: profile_pic, user_id, num_following, num_ads, num_mutual_friends;
		  
	xmlhttp.open("GET",url+"customer/get-buddies?amount=50&page=1",true);
	xmlhttp.send();
}

function displayFriends(friendsData,id){
	for (var i=0;i<friendsData.length;i++){
		var friend_info =friendsData[i];
		var friend = buildFriend(friend_info);
		document.getElementById(id).innerHTML+=friend;
		
	}
	
}

function buildFriend(friendData){
	
	//RECEIVE => name: profile_pic, user_id, num_following, num_ads, num_mutual_friends, user_name;
	var pic = friendData["profile_pic"], name=friendData["user_name"], id=friendData["user_id"], following=friendData["num_following"], ads=friendData["num_ads"], friends=friendData["num_mutual_friends"];
	var template ='<div id="'+id+'" class="row" style="background-color:white; border-radius:5px;border: 2px solid #004A6E;margin-left:0px;margin-right:0px;">'+
							'<div class="col-sm-3" style="margin-left:-15px;" style="margin-left:-15px;">'+
								'<img src="'+pic+'" sytele="padding:0px;" width="90px" height="100px" alt="profile picture"/>'+
							'</div>'+
							'<div class="col-sm-7">'+
								'<div class="row">'+
									'<div class="col-sm-4">'+
										'<p style="font-size:16px;font-weight:700;text-align:center;margin-top:5%;">'+name+'</p>'+
									'</div>'+
									'<div class="col-sm-offset-4 col-sm-4">'+
										'<button class="btn btn-info btn-xs suggestionBtn" style="margin-top:5%;">+buddy</button>'+
									'</div>'+
								'</div>'+
								'<div class="row" style="color:gray;font-weight:700">'+
									'<div class="col-sm-4">'+
										'<p>following</p>'+
										'<p>&nbsp;&nbsp;<span style="background-color:#19A3D1;" class="badge">'+following+'</span></p>'+
									'</div>'+
									'<div class="col-sm-4">'+
										'<p>mutual </p>'+
										'<p>&nbsp;&nbsp;<span style="background-color:#19A3D1;" class="badge">'+friends+'</span></p>'+
									'</div>'+
									'<div class="col-sm-4">'+
										'<p>Ads</p>'+
										'<p>&nbsp;&nbsp;<span style="background-color:#19A3D1;" class="badge">'+ads+'</span></p>'+
									'</div>'+
								'</div>'+
							'</div>'+
						'</div>';
		return template;
	
	
}

function show_friends(){
	document.getElementById("suggested_friends").style.display="none";
	document.getElementById("friends").style.display="";
	if(isFriendsClicked==""){
			isFriendsClicked="yes"
			document.getElementById("center-main").style.display="none";
			document.getElementById("friends_nav").style.display="";
			pull_friends("friends");
			$(document).ready(function(){
				$(".tab").click(function(){
					$(".tab").removeClass("active_tab");
					$(this).addClass("active_tab");
					var tab= $(this).prop("id");
					if( tab=="friendslist"){
						
						document.getElementById("suggested_friends").style.display="none";
						document.getElementById("friends").style.display="";
						
					}
					else{
						if(isSuggestedCliked==""){
							isSuggestedCliked="yes";
							pull_friends("suggested_friends");
						}
						document.getElementById("friends").style.display="none";
						document.getElementById("suggested_friends").style.display="";
						
					}
					
				});
			});
			
	}
	else{
		document.getElementById("center-main").style.display="none";
		document.getElementById("friends_nav").style.display="";
	}

}

function friends_num(){
	
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
				document.getElementById("num_buddies").innerHTML=info;
				
			}
		  }
	//SEND => name: num_friends, name: user_id;
	//RECEIVE => name: friends_num;	  
	xmlhttp.open("POST",url+"?num_friends=true",true);
	xmlhttp.send();
		  
	
}
