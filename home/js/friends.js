/*
Author: Chaddy Rungwe
Date: 20 May 2015

Description: fetches and display friends

status: unimplemented

**/

var isFriendsClicked="";
var isSuggestedCliked="";

function pull_friends(type){ // type can either be friends or suggested_friends
	var xmlhttp;
	var id=0;
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
					displayFriends(data,"friends");
				}
			}
	}
		
	//SEND => name: pull_friends, name: user_id
	//RECEIVE => name: profile_pic, user_id, num_following, num_ads, num_mutual_friends;
		  
	xmlhttp.open("POST",url+"?pull_friends=true",true);
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
	
		var template ='<div class="col-sm-3">'+
                '<div class="panel panel-default panel-card">'+
                   '<div class="panel-heading">'+
                        '<img src="https://unsplash.imgix.net/12/barley.jpg?q=75&fm=jpg&s=f39de5ca1970a13dbe6af6c86b3c47ec" />'+
                        '<button class="btn btn-primary btn-sm" role="button">+add freind</button>'+
                    '</div>'+
                    '<div class="panel-figure">'+
                        '<img class="img-responsive img-circle" src="'+pic+'" />'+
                    '</div>'+
                    '<div class="panel-body text-center">'+
                        '<h4 class="panel-header">'+name+'</a></h4>'+
                        '<small>I am very cool</small>'+
                    '</div>'+
					'<br>'+
                    '<div class="panel-thumbnails">'+
                        '<div class="row" style="color:#B3B3B3;">'+
                            '<div class="col-sm-4" style="cursor:pointer;">'+
									'<p style="cursor:pointer;"> following <br><span style="background-color:#19A3D1;" class="badge">'+following+'</span></p>'+
							'</div>'+
							'<div class="col-sm-4">'+
								'<p style="cursor:pointer;" > buddies <br><span style="background-color:#19A3D1;" class="badge">'+friends+'</span></p>'+
							'</div>'+
							'<div class="col-sm-4">'+
								'<p style="cursor:pointer;"> Ads <br><span style="background-color:#19A3D1;" class="badge">'+ads+'</span></p>'+ 
							'</div>'+
                        '</div>'+
                    '</div>'+
                '</div>';
	return template;
	
}



function friends_init(){
    drawer_init();
	close_drawer_onload(1500);
	pull_friends("sugested_friends");
}

