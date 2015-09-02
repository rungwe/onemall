/*
Author: Chaddy Rungwe
Date: 20 May 2015

subject: Comments
Description: facilitates comments

**/

function pull_comments(postID, commentObj){
	
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
			//window.clearInterval(reloadbr);
			
			var info =xmlhttp.responseText;
			if(info==""){
				var commContainer=commentObj.next().find(".comment_list");
				commContainer.html("");
				return;
			}
			else{
				var comments = JSON.parse(info);
				//alert(displayComments(data));
				//$('button').attr('data-content', 'hello');
				var commContainer=commentObj.next().find(".comment_list");
				commContainer.html(displayComments(comments));
				}
			}
		  } 
		  
	//SEND => name: postID , name: pull_comments = 'true'
	//RECEIVE => commenter_name , commenter_picture , comment_txt , comment_time ;
	xmlhttp.open("POST",url+"?pull_comments=true&postID="+postID,true);
	xmlhttp.send();
	
	
}

function displayComments(arrComments){
	var comments="";
	for( var i=0; i<arrComments.length;i++ ){
		var raw_comment = arrComments[i];
		comments+=buildComment(raw_comment);
	}
	return comments;
	
}

function buildComment(data){
	//SEND => name: postID , name: pull_comments = 'true'
	//RECEIVE => commenter_name , commenter_picture , comment_txt , comment_time ;
	var profile_pic=data["commenter_picture"], name=data["commenter_name"], time=data["comment_time"],comment=data["comment_txt"];
	var template='<div class="row">'+
			'      <div class="col-sm-2">'+
			'         <img src="'+profile_pic+'" height="45px" width="45px"/>'+
			'      </div>'+
			'      <div class="col-sm-8" style="margin:0px; padding:0px;">'+
			'         <p style="font-size:10px;color:grey"><b style="font-size:12px;color:#0099FF">'+name+'</b> &nbsp;&nbsp;&nbsp;&nbsp;'+time+'</p>'+
			'		  <p style="font-size:11px;">'+comment+'</p>'+
			'      </div>'+
			'   </div>'+
			'   <hr style="margin:0px;padding:0px;">';
	
	return template;
}

function comment_broadcast(postID,comment,obj){
	//SEND => name: put_comment = 'true' , name: postID , name: comment_txt name: user_name , **user_ID** **(do you really need the user_name since its in the session variables?)
	//RECEIVE => name: confirmation (success or fail), name: user_profile_pic
	comment=comment.trim();
	var xmlhttp;
	if(comment==""){
		return;
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
			//window.clearInterval(reloadbr);
			
			var info =xmlhttp.responseText;
			
			if(info!="fail"){
				var arr =[ {comment_txt:comment,commenter_name:"Chaddy",comment_time:info,commenter_picture:"img/Koala.jpg"} ];
				obj.html((parseInt(obj.html())+1)+"");
				obj.addClass("commented");
				var commContainer= obj.next().find(".comment_list");
				commContainer.html(displayComments(arr)+commContainer.html());
			 }
			}
		  } 
		  
	
	xmlhttp.open("POST",url+"?put_comment=true&postID="+postID+"&comment_txt="+comment,true);
	xmlhttp.send();
	
}

//tested
function bindBroadcastCommentEvents(){
	var header=' <div class="row comment_header">'+
				   ' 	<div class="col-sm-10">'+
				   '      <textarea class="form-control" rows="1" id="info" maxlength="150" style="resize:none;" placeholder="make a comment"></textarea>'+
				   '    </div>'+
				   ' 	<div class="col-sm-2">'+
				   '    	<button class="btn btn-info btn-xs" style="font-size:8px;margin-top:68%;">comment</button>'+
				   '    </div>'+
				   ' </div>';
	var content='<div class="row comment_list" style="width:400px;max-height:220px !important;">loading......</div>';
	$(".comment").popover({title: header, content: content,placement: "bottom", html: "true"}); // all comment buttons have been binded popovers
			
	// fetch data of a comment on opening of comments
	 $(".comment").on("shown.bs.popover", function(){
		 
		var par = $(this).parent().parent().parent().parent();
		var id =par.prop("id");
		pull_comments(id,$(this));	
		
		//post and append comment on success
		$(this).next().find("button").click(function(){
			var get_comment=$(this).parent().prev().find("textarea");
			cm=$(this).parent().parent().parent().parent().prev();
			comment_broadcast(id,get_comment.val(),cm);
			get_comment.val("");
			
		});
	}); 
	
	
	
}