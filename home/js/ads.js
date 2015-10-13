/*
Author: Chaddy Rungwe
Date: 9 September 2015

Description: facilitates broadcasts

**/

//*****************************************GLOBALS************************************************
token = "";

//*************************************end of globals*********************************************

/*
displayBroadcasts generates the html code to display broadcasts
locationID: is the ID of the element eg div where the broadcasts are going to be sitting
feedsArr: is an array of key-value pair dictionary which contains Broadcasts 

Broadcasts are arranged in order of retrieval

status: tested
**/
function displayAds(adsArr,locationID){
	
	for (var i=0;i<adsArr.length;i++){
		var ad =adsArr[i];
		var advert = buildAd(ad);
		
		document.getElementById(locationID).innerHTML=advert+document.getElementById(locationID).innerHTML;
		
	}
	
	
	//bindBroadcastLikeEvents();
	//bindBroadcastCommentEvents();

}

//testing data set
//var Feed=[{shop_name:"Mr Price",shop_pic:"img/mrlog.jpg",poster:"img/mrpost.jpg",post_text:"Hurry for specials",likes:"12",liked:"liked",comments:"5",time:"@30min",favourite:"favourite"}]
//displayBroadcasts(Feed,"main");



//tested
function buildAd(ad){
	//feed properties shop_name,shop_profile_pic,poster,post_info,num_likes, liked, num_comments, time , postID ;
    var time="0";
    if (ad.minutes!=0){
        time="@"+ad.minutes+" minutes";
    }
    else if(ad.hours!=0){
        time = "@" + ad.hours + "hours";
    }
    else if (ad.minutes==0 && ad.hours==0){
        time = ad.date.substring(0, 10);
    }
    var profile_img_url=ad.seller.profile_pic;
   if(ad.seller.profile_pic==null){
      profile_img_url="home/img/noimage.png" 
   }
    
    var advert = '<div id="'+ad.ID+'" class="row" style="margin:0px;">' +
								'<div class="col-sm-2">' +
									'<img src="'+profile_img_url+'" width="53" style="border:1px solid #F2F2F2;"/>' +
								'</div>' +
								'<div class="col-sm-6">' +
									'<div class="panel" style="background-color:white;width:400px;left:0px;border: 1px solid #0066FF;">' +
										'<div class="panel-body" style="margin-bottom:-5px">' +

											'<div class="row">' +
											'<div class="col-sm-5">' +
												'<p><b id="">'+ad.seller.fname+'&nbsp;&nbsp;'+ad.seller.lname+'</b></p>' +
											'</div>' +
											'<div class="col-sm-offset-3 col-sm-2">' +
												'<span class="glyphicon glyphicon-earphone call" style="color:green"></span>' +
											'</div>' +
											'<div class="col-sm-2">' +
												'<span class="glyphicon glyphicon-envelope email" style="color:gold"></span>' +
											'</div>' +
											'</div>' +
                                            '<p><b>R'+ad.price+'</b></p>'+
                                            '<p><b>'+ad.title+'</b></p>'+
											'<p style="color:grey;margin-left:0px;">'+time+'</p>' +
											'<hr>' +
											'<p>' +
											ad.details +
											'</p>' +
											'<!-- <img src="img/benz.jpg" height="248" width="370"/> -->' +
											'<p style="color:gray;"> category: </p>' +
											'<div class="row">' +
												'<p class="col-sm-8" style="color:gray;"> tags: benz, C200, Mercedes</p>' +
												'<button class="btn btn-xs col-sm-offset-1 col-sm-3" style="background-color:#004A6E;color:white;" data-toggle="modal" data-target="#ad_detail">view more</button>' +
											'</div>' +
											'<center style="font-size:10px;color:gray;">powered by adcenter</center>' +
										'</div>' +
										'<div class="panel-footer">' +
											'<div class="row" style="margin-left:10px;">' +
												'<div class="col-sm-3" style="cursor:pointer;">  <span class="glyphicon glyphicon-eye-open">'+ad.number_of_views+'</span></div>' +
												'<div class="col-sm-3" style="cursor:pointer;">  <span class="glyphicon glyphicon-thumbs-up likes">'+ad.number_of_likes+'</span> </div>' +
												'<div class="col-sm-3" style="cursor:pointer;"> <span class="glyphicon glyphicon-comment comment">'+ad.number_of_comments+'</span></div>' +
												'<div class="col-sm-3" style="cursor:pointer;">  <span class="glyphicon glyphicon-share-alt"></span></div>' +
											'</div>' +
										'</div>' +
									'</div>' +
								'</div>' +
							'</div> ' +
						'</div>';
		return advert;
	}

// tested
function pull_ads(){
	var mainID="adcenter";
	var xmlhttp;
	
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		 
		  }
	else
		{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  
		}
	 xmlhttp.onreadystatechange = function () {
		      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		          //document.getElementById("loader").style.display="none"
		          var info = xmlhttp.responseText;
		          //alert(info);
		          var data = JSON.parse(info);
		          displayAds(data, mainID);
		      }
		  } 	
	xmlhttp.open("GET",URI+"customer/get-adverts",true);
    xmlhttp.setRequestHeader("Authorization",'Bearer ' + token);
	xmlhttp.send();
	
	
}

function ads_init(){
	
	var xmlhttp;
	
	
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		 
		  }
	else
		{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  
		}
	xmlhttp.onreadystatechange = function () {
		    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {


		        var access = xmlhttp.responseText;
		        token = access.trim();
		        if (token == "invalid") {
		            window.location.href = "login.php";
		        }
		        else {
		            pull_ads();
		            pull_suggestions(3);
		        }



		    }
		} 	
	xmlhttp.open("POST","access.php?request=true",true);
	xmlhttp.send();
}

