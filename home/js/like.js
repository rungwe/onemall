/*
Author: Chaddy Rungwe
Date: 20 May 2015

Subject: Like
Description: facilitates like and ulike action of broadcasts, it only approves actions upon successfully updating the server side successfully
functions: like(postID,likedObject), unlike(), bindBroadcastLikeEvents()

**/

//*******************Globals**************************************
var notifyLike;
var notifyUnlike;
//*******************end of Globals*******************************


/*
like(postID, likedObject)
this function takes two parameters, postID, likedObject
postID: this is the id of the post that is liked
likedObject: this is the reference to the like html object that has been clicked

status: tested successfully

future improvements: how to handle situation where network is not available
**/
function like(postID, likedObject){
	//SEND => name: like_broadcasts = 'true' , name: postID ;
	//ACTION: num_likes++;
	var xmlHttp;
	
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  
		  xmlHttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		 
		  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
	
	xmlHttp.onreadystatechange=function()
		  {
		  if (xmlHttp.readyState==4 && xmlHttp.status==200)
			{
			
			var info =xmlHttp.responseText;
			//window.clearTimeout(notifyLike);
			likedObject.addClass("liked");
			likedObject.removeClass("cursorLoad");
			likedObject.html((parseInt(likedObject.html())+1)+"");
			}
		  }
		  
	xmlHttp.open("POST",url+"?like_broadcasts=true&postID="+postID,true);
	xmlHttp.send();
	
}	

/*
unlike(postID, unlikedObject)
this function takes two parameters, postID, unlikedObject
postID: this is the id of the post that is unliked
unlikedObject: this is the reference to the like html object that has been clicked

status: tested successfully

future improvements: how to handle situation where network is not available
**/
function unlike(postID, unlikedObject){
	
	var xmlHttp;
	
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  
		  xmlHttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		 
		  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
	
	xmlHttp.onreadystatechange=function()
		  {
		  if (xmlHttp.readyState==4 && xmlHttp.status==200)
			{
			
			var info =xmlHttp.responseText;
			//window.clearTimeout(notifyUnlike);
			unlikedObject.removeClass("liked");
			unlikedObject.removeClass("cursorLoad");
			unlikedObject.html((parseInt(unlikedObject.html())-1)+"");
			}
		  }
		  
	xmlHttp.open("POST",url+"?unlike_broadcasts=true&postID="+postID,true);
	xmlHttp.send();
	
}


/*
This methods binds the event listeners for liking and liking posts

status: successfully tested
**/
function bindBroadcastLikeEvents(){
	$(".likes").click(function(){
		var broadcast=$(this).parent().parent().parent().parent(); // traversing up the dom to get the parent broadcast div
		var id= broadcast.prop("id");
		// only execute if no like or unlike is being processed already, atomic transaction.
		if(!$(this).hasClass("liked") && !$(this).hasClass("cursorLoad")){
			//notifyLike=setTimeout(function(){$(this).removeClass("cursorLoad")}, 5000);
			$(this).addClass("cursorLoad");
			like(id,$(this));
			
		}
		else if($(this).hasClass("liked") && !$(this).hasClass("cursorLoad")){
			//notifyUnlike=setTimeout(function(){$(this).removeClass("cursorLoad");}, 5000);
			$(this).addClass("cursorLoad");
			unlike(id,$(this));
		}
		
		else if($(this).hasClass("cursorLoad")){
			$(this).removeClass("cursorLoad");
		}
		
	});
}
