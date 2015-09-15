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

status: pending

-------------------------------------------------------Broadcasts JSON Object------------------------------------------------------------------------

BroadcastDTO
{
    "ID": 1,
    "title": "sample string 2",
    "details": "sample string 3",
    "minutes": 1,
    "hours": 1,
    "date": "2015-09-02T00:41:26.6227784+02:00",
    "number_of_views": 5,
    "number_of_likes": 6,
    "number_of_comments": 7,
    "company": {
      "ID": "sample string 1",
      "name": {
        "Id": 1
      },
      "wallpaper": {
        "Id": 1
      },
      "profile_pic": "sample string 2"
    },
    "images": [
      {
        "Id": 1
      },
      {
        "Id": 1
      }
    ],
    "likes": [
      {
        "ID": 1,
        "user": {
          "Id": "sample string 1",
          "name": "sample string 2"
        }
      },
      {
        "ID": 1,
        "user": {
          "Id": "sample string 1",
          "name": "sample string 2"
        }
      }
    ],
    "comments": [
      {
        "ID": 1,
        "comment": "sample string 2",
        "minutes": 1,
        "hours": 1,
        "date": "2015-09-02T00:41:26.635779+02:00",
        "user": {
          "Id": "sample string 1",
          "name": "sample string 2",
          "profile_pic": "sample string 3"
        }
      },
      {
        "ID": 1,
        "comment": "sample string 2",
        "minutes": 1,
        "hours": 1,
        "date": "2015-09-02T00:41:26.635779+02:00",
        "user": {
          "Id": "sample string 1",
          "name": "sample string 2",
          "profile_pic": "sample string 3"
        }
      }
    ]
  }
-------------------------------------------------------------------- End of JSON--------------------------------------------------------------------


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
		var shop_name=feed['shop_name'],shop_profile_pic=feed['company']['profile_pic'],poster=feed['images'][0]['id'],post_info=feed['details'],likes=feed["number_of_likes"];
		var liked=feed["liked"], comments=feed["number_of_comments"],time=feed["minutes"], ID=feed["ID"];
		var template= '<div id="'+ID+'" class="panel panel-info">'+
			  '				<div class="panel-heading">'+
			  ' 					<div class="row">'+
			  ' 						<a href="profile_page.php"><img class="col-sm-2" src="'+shop_profile_pic+'" height="53px" width="50px"/></a>'+
			  ' 						<div class="col-sm-5">'+
			  ' 							<p><b><a href="profile_page.php">'+shop_name+'</a></b></p>'+
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
	xmlhttp_br.open("POST",url+"?pull_broadcasts=true&number_broadcasts="+num,true);
	xmlhttp_br.send();
	
	
}