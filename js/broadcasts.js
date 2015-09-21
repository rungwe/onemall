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
	// bind like event
	bindBroadcastLikeEvents();
	
	// bind comments functionality
	bindBroadcastCommentEvents();
	
	//bind images to broadcasts
	bindImage();

}

//testing data set
//var Feed=[{shop_name:"Mr Price",shop_pic:"img/mrlog.jpg",poster:"img/mrpost.jpg",post_text:"Hurry for specials",likes:"12",liked:"liked",comments:"5",time:"@30min",favourite:"favourite"}]
//displayBroadcasts(Feed,"main");



//tested
function buildBroadcast(broadcast){
	//broadcast properties shop_name,shop_profile_pic,poster,post_info,num_likes, liked, num_comments, time , postID ;
		
		var template= '<div id="'+broadcast.ID+'" class="panel panel-info">'+
			  '				<div class="panel-heading">'+
			  ' 					<div class="row">'+
			  ' 						<a href="profile_page.php"><img class="col-sm-2 img_placeholder" id="'+broadcast.company.profile_pic.ID+'" src="" alt"'+broadcast.company.name+'" height="53px" width="50px"/></a>'+
			  ' 						<div class="col-sm-5">'+
			  ' 							<p><b><a href="profile_page.php">'+broadcast.company.name+'</a></b></p>'+
			  '							<p style="color:grey">'+broadcast.minutes+'</p>'+
			  '						</div>'+
			  '					</div>'+
			  '				</div>'+
			  '				<div class="panel-body">'+
			  '					'+broadcast.details+	
			  '					<div class="row">'+
			  '						<div> <center><img class="img_placeholder" id="'+broadcast.images[0].id+'" alt="poster" src="" style="max-height:300px;min-height:200;max-width:100%;"></center></div>'+
			  '					</div>'+
			  '				</div>'+
			  '				<div class="panel-footer">'+
			  ' 				<div class="row" style="margin-left:15px;">'+
			  '                     <div class="col-sm-3" style="cursor:pointer;">  <span class="glyphicon glyphicon-eye-open views">'+broadcast.number_of_views+'</span> </div>'+
			  '  					<div class="col-sm-3" style="cursor:pointer;">  <span class="glyphicon glyphicon-thumbs-up likes">'+broadcast.number_of_likes+'</span> </div>'+
			  '						<div class="col-sm-3" style="cursor:pointer;"> <span class="glyphicon glyphicon-comment comment">'+ broadcast.number_of_comments+'</span></div>'+
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
	xmlhttp_br.open("GET",url+"customer/get-broadcast?amount=6&time=true&page="+num,true);
	xmlhttp.setRequestHeader("Authorisation",'Bearer ' + token);
	xmlhttp_br.send();
	
	
}