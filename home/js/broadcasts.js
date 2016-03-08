/*
Author: Chaddy Rungwe
Date: 20 May 2015

Description: facilitates broadcasts

**/

//*****************************************GLOBALS************************************************

var num_broadcasts=0;
var count = 0;


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
		document.getElementById(locationID).innerHTML+=broadcast;
		
	}
	
	
	bindBroadcastLikeEvents();
	bindBroadcastCommentEvents();

}

//testing data set
//var Feed=[{shop_name:"Mr Price",shop_pic:"img/mrlog.jpg",poster:"img/mrpost.jpg",post_text:"Hurry for specials",likes:"12",liked:"liked",comments:"5",time:"@30min",favourite:"favourite"}]
//displayBroadcasts(Feed,"main");



//tested
function buildBroadcast(feed){
	//feed properties shop_name,shop_profile_pic,poster,post_info,num_likes, liked, num_comments, time , postID ;
	    var time="0";
        if (feed.minutes!=0){
            time="@"+feed.minutes+" minutes";
        }
        else if(feed.hours!=0){
            time = "@" + feed.hours + "hours";
        }
        else if (feed.minutes==0 && feed.hours==0){
            time = feed.date.substring(0, 10);
        }
        var profile_img_url = feed.company.profile_pic;
       if(feed.company.profile_pic==null){
          profile_img_url="img/company.png" 
       }

       var post_img = feed.images;
       if (feed.images==null){
           post_img = "img/no_post.jpg";
       }
       else{
           post_img = feed.images.url;
           //alert(post_img);
       }
       	

		var template= '<div id="'+feed.ID+'" class="panel panel-info">'+
			  '				<div class="panel-heading" style="background-color:white;">'+
			  ' 					<div class="row">'+
			  ' 						<a href="profile_page.php?company='+feed.company.ID+'"><img class="col-sm-2" src="'+profile_img_url+'" height="53px" width="50px" style="border-radius:2px;"/></a>'+
			  ' 						<div class="col-sm-5">'+
			  ' 						    <p><b>'+feed.company.name+'</b></p>'+
			  '							    <p style="color:grey">'+time+'</p>'+
			  '						</div>'+
			  '					</div>'+
			  '				</div>'+
			  '				<div class="panel-body">'+
			  '					'+feed.details+	
			  '					<div class="row">'+
			  '						<div> <center><img  class="img-border" src="'+post_img+'" style="max-height:300px;min-height:200;max-width:100%;"></center></div>'+
			  '					</div>'+
			  '				</div>'+
			  '				<div class="panel-footer">'+
			  ' 				<div class="row" style="margin-left:15px;">'+
			  '						<div class="col-sm-3" style="cursor:pointer;">  <span data-type="broadcasts" data-id=" '+feed.ID+'" class="glyphicon glyphicon-eye-open">'+feed.number_of_views+'</span></div>'+
			  '  					<div class="col-sm-3" style="cursor:pointer;">  <span data-type="broadcasts" data-id=" '+feed.ID+'" class="glyphicon glyphicon-thumbs-up likes">'+feed.number_of_likes+'</span> </div>'+
			  '						<div class="col-sm-3" style="cursor:pointer;"> <span  data-type="broadcasts" data-id=" '+feed.ID+'" class="glyphicon glyphicon-comment comment">'+ feed.number_of_comments+'</span></div>'+
			  '						<div class="col-sm-3" style="cursor:pointer;">  <span data-type="broadcasts" data-id=" '+feed.ID+'" class="glyphicon glyphicon-share-alt"></span></div>'+
			  '					</div>'+
			  '				</div>'+			
			  '			</div>';
		return template;
	}

// tested
function pull_broadcasts(count){
	var mainID="center-main";
	var xmlhttp_br;
	var page = count++;
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp_br=new XMLHttpRequest();
		 
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp_br=new ActiveXObject("Microsoft.XMLHTTP");
		  
		  }
		  xmlhttp_br.onreadystatechange = function () {
		      if (xmlhttp_br.readyState == 4) {

		          document.getElementById("loader").style.display = "none";

		          var info = xmlhttp_br.responseText;
		          //alert(xmlhttp_br.status+"   "+info);
		          var data = JSON.parse(info);
		          displayBroadcasts(data, mainID);
		      }
		  } 	
    xmlhttp_br.open("GET","Client.php?pull_broadcasts=true",true);
	//xmlhttp_br.open("GET",URI+"customer/get-broadcasts?page="+1+"&amount=10&time=2016-01-22",true);
	xmlhttp_br.setRequestHeader("Authorization",'Bearer ' + token);
	xmlhttp_br.send();
	
	
}


function pull_company_broadcasts(count){
	var mainID="center-main";
	var xmlhttp_br;
	var page = count++;
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp_br=new XMLHttpRequest();
		 
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp_br=new ActiveXObject("Microsoft.XMLHTTP");
		  
		  }
		  xmlhttp_br.onreadystatechange = function () {
		      if (xmlhttp_br.readyState == 4) {

		          //document.getElementById("loader").style.display = "none";

		          var info = xmlhttp_br.responseText;
		          //alert(xmlhttp_br.status+"   "+info);
		          var data = JSON.parse(info);
		          displayBroadcasts(data, mainID);
		      }
		  } 	
    //xmlhttp_br.open("GET","Client.php?pull_broadcasts=true",true);
	xmlhttp_br.open("GET",URI+"company/get-broadcasts?page="+1+"&amount=10&time=2015-12-28",true);
	xmlhttp_br.setRequestHeader("Authorization",'Bearer ' + token);
	xmlhttp_br.send();
	
	
}

function post_broadcast(){
    
    var details = document.getElementById("broadcast-post").value.trim();

    if (details==""){
        notify_failure("error failed to post")
        
        return;
    }

    
    var data = {title:"testing", details : details, categories : ["clothing"]}
    var post_data = JSON.stringify(data);
    //alert(post_data);
    var xmlhttp_br;
	if (window.XMLHttpRequest)
		  {
           // code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp_br=new XMLHttpRequest();
		 
		  }
	else
		 {
          // code for IE6, IE5
		  xmlhttp_br=new ActiveXObject("Microsoft.XMLHTTP");
		  
		  }
		  xmlhttp_br.onreadystatechange = function () {
		      if (xmlhttp_br.readyState == 4 && xmlhttp_br.status==200) {

		          var info = xmlhttp_br.responseText;
		          //alert(xmlhttp_br.status+"   "+info);
                  notify_success("posted successfully")
		          
		      }
              else if(xmlhttp_br.readyState == 4 && xmlhttp_br.status!=200){
                  notify_failure("error failed to post, error code" + xmlhttp_br.status)
              }
		  } 	
    xmlhttp_br.open("POST",URI+"company/create-broadcast",true);
	//xmlhttp_br.open("GET",URI+"customer/get-broadcasts?page="+page+"&amount=10&time=2015-11-08",true);
	xmlhttp_br.setRequestHeader("Authorization",'Bearer ' + token);
    xmlhttp_br.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
	xmlhttp_br.send(post_data);
	
}
// infinity scroll
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
            //alert("bottom of the page reached!");
            if (count <= 8) {
               // pull_broadcasts(count);
            }
        }
    });

    $("#share").click(function () {
        post_broadcast();
    });

});