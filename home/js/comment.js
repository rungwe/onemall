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
	xmlhttp.open("GET",URI+"customer/get-advert-comments?adId="+postID+"&page="+1+"&amount="+10,true);
    xmlhttp.setRequestHeader("Authorization",'Bearer ' + token);
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
	
    var time="0";
    if (ad.minutes!=0){
        time="@"+data.minutes+" minutes";
    }
    else if(data.hours!=0){
        time = "@" + data.hours + "hours";
    }
    else if (data.minutes==0 && data.hours==0){
        time = data.date.substring(0, 10);
    }
    var profile_img_url=data.customer.profile_pic.url;
   if(data.seller.profile_pic==null){
      profile_img_url="home/img/noimage.png" 
   }

	var template='<div class="row">'+
			'      <div class="col-sm-2">'+
			'         <img src="'+profile_img_url+'" height="45px" width="45px"/>'+
			'      </div>'+
			'      <div class="col-sm-8" style="margin:0px; padding:0px;">'+
			'         <p style="font-size:10px;color:grey"><b style="font-size:12px;color:#0099FF">'+data.customer.fname+'  '+data.customer.lname+'</b> &nbsp;&nbsp;&nbsp;&nbsp;'+time+'</p>'+
			'		  <p style="font-size:11px;">'+data.comment+'</p>'+
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
		  xmlhttp.onreadystatechange = function () {
		      if (xmlhttp.readyState == 4  && xmlhttp.status==201) {
		          //window.clearInterval(reloadbr);
		            //alert(xmlhttp.status);
		            var arr = [{ comment_txt: comment, commenter_name: "Chaddy", comment_time: info, commenter_picture: "img/Koala.jpg"}];
		            obj.html((parseInt(obj.html()) + 1) + "");
		            obj.addClass("commented");
		            var commContainer = obj.next().find(".comment_list");
		            commContainer.html(displayComments(arr) + commContainer.html());
		          

		      }
		  } 
		  
	
	xmlhttp.open("PUT",URI+"customer/comment-on-advert?adId="+postID+"&comment="+comment,true);
    xmlhttp.setRequestHeader("Authorization",'Bearer ' + token);
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
	$(".comment").on("shown.bs.popover", function () {

	    //var par = $(this).parent().parent().parent().parent();
	    var obj = $(this);
	    var id = obj.prop("id").substring(4);
	    //id = "1234";
	    //alert(id);
	    pull_comments(id, $(this));

	    //post and append comment on success
	    $(this).next().find("button").click(function () {
	        var get_comment = $(this).parent().prev().find("textarea");
	        cm = $(this).parent().parent().parent().parent().prev();
	        comment_broadcast(id, get_comment.val(), cm);
	        get_comment.val("");

	    });
	}); 
	
	
	
}