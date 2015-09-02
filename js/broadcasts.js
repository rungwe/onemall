/*
Author: Chaddy Rungwe
Date: 20 May 2015

Description: facilitates broadcasts

**/

//*****************************************GLOBALS************************************************
var reloadbr=setInterval(function(){pull_broadcasts(6)}, 10000);

var num_broadcasts=0;
//*************************************end of globals*********************************************

/*
displayBroadcasts generates the html code to display broadcasts
locationID: is the ID of the element eg div where the broadcasts are going to be sitting
feedsArr: is an array of key-value pair dictionary which contains Broadcasts 

Broadcasts are arranged in order of retrieval

status: tested
**/
function displayBroadcasts(feedsArr,locationID){
	
	for (var i=0;i<feedsArr.length;i++){
		var feed =feedsArr[i];
		var broadcast = buildBroadcast(feed);
		num_broadcasts+=1
		document.getElementById(locationID).innerHTML=document.getElementById(locationID).innerHTML+broadcast;
		
	}
	
	sessionStorage.broadcasts=document.getElementById(locationID).innerHTML;
	bindBroadcastLikeEvents();
	bindBroadcastCommentEvents();

}

//testing data set
//var Feed=[{shop_name:"Mr Price",shop_pic:"img/mrlog.jpg",poster:"img/mrpost.jpg",post_text:"Hurry for specials",likes:"12",liked:"liked",comments:"5",time:"@30min",favourite:"favourite"}]
//displayBroadcasts(Feed,"main");



//tested
function buildBroadcast(feed){
	//feed properties shop_name,shop_profile_pic,poster,post_info,num_likes, liked, num_comments, time , postID ;
		var shop_name=feed['shop_name'],shop_profile_pic=feed['shop_profile_pic'],poster=feed['poster'],post_info=feed['post_info'],likes=feed["num_likes"];
		var liked=feed["liked"], comments=feed["num_comments"],time=feed["time"], ID=feed["postID"];
		var template= '<div id="'+ID+'" class="panel panel-info">'+
			  '				<div class="panel-heading">'+
			  ' 					<div class="row">'+
			  ' 						<a href="profile_page.html"><img class="col-sm-2" src="'+shop_profile_pic+'" height="53px" width="50px"/></a>'+
			  ' 						<div class="col-sm-5">'+
			  ' 							<p><b><a href="profile_page.html">'+shop_name+'</a></b></p>'+
			  '							<p style="color:grey">'+time+'</p>'+
			  '						</div>'+
			  '					</div>'+
			  '				</div>'+
			  '				<div class="panel-body">'+
			  '					'+post_info+	
			  '					<div class="row">'+
			  '						<div class="col-sm-offset-1 col-sm-10" style="height:215px;background-image:url(\''+poster+'\');background-size:cover;"></div>'+
			  '					</div>'+
			  '				</div>'+
			  '				<div class="panel-footer">'+
			  ' 				<div class="row">'+
			  '  					<div class="col-sm-offset-2 col-sm-3" style="cursor:pointer;">  <span class="glyphicon glyphicon-thumbs-up likes '+ liked+'">'+likes+'</span> </div>'+
			  '						<div class="col-sm-3" style="cursor:pointer;"> <span class="glyphicon glyphicon-comment comment">'+ comments+'</span></div>'+
			  '						<div class="col-sm-3" style="cursor:pointer;">  <span class="glyphicon glyphicon-share-alt"></span></div>'+
			  '					</div>'+
			  '				</div>'+			
			  '			</div>';
		return template;
	}

// tested
function pull_broadcasts(num){
	var mainID="center-main";
	var xmlhttp_br;
	
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp_br=new XMLHttpRequest();
		 
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp_br=new ActiveXObject("Microsoft.XMLHTTP");
		  
		  }
	xmlhttp_br.onreadystatechange=function()
		  {
		  if (xmlhttp_br.readyState==4 && xmlhttp_br.status==200)
			{
			window.clearInterval(reloadbr);
			document.getElementById("loader").style.display="none"
			var info =xmlhttp_br.responseText;
			var data = JSON.parse(info);
			displayBroadcasts(data,mainID);
			}
		  } 	
	xmlhttp_br.open("POST","Client.php?pull_broadcasts=true&number_broadcasts="+num,true);
	xmlhttp_br.send();
	
	
}