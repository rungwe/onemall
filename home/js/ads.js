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

	bindBroadcastLikeEvents();
	//bindBroadcastLikeEvents();
	bindBroadcastCommentEvents();

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
   else{
        profile_img_url=img_url+ad.seller.profile_pic;
   }

   var liked = "";
   if (ad.liked!=false){
       liked = "liked";
   }

   var ad_string = "";
   if (ad.images.length>0){
       var ad_image =ad.images[0]["url"]
       ad_string='<img src="https://s3-us-west-2.amazonaws.com/'+ad_image+'" style="max-width:370px;max-height:248px;"/>' 
   }
  
    
    var advert = '<div id="'+ad.ID+'" class="row" style="margin:0px;">' +
								'<div class="col-sm-2">' +
									'<img src="'+profile_img_url+'" width="53" style="border:1px solid #F2F2F2;"/>' +
								'</div>' +
								'<div class="col-sm-6">' +
									'<div class="panel" style="background-color:white;width:400px;left:0px;">' +
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
											ad_string +
											'<p style="color:gray;"> category: </p>' +
											'<div class="row">' +
												'<p class="col-sm-8" style="color:gray;"> tags: benz, C200, Mercedes</p>' +
												'<button class="btn btn-xs col-sm-offset-1 col-sm-3" style="background-color:#004A6E;color:white;" data-toggle="modal" data-target="#ad_detail">view more</button>' +
											'</div>' +
											'<center style="font-size:10px;color:gray;">powered by adcenter</center>' +
										'</div>' +
										'<div class="panel-footer">' +
											'<div class="row" style="margin-left:10px;">' +
												'<div class="col-sm-3" style="cursor:pointer;">  <span data-type="ads" data-id=" '+ad.ID+'" class="glyphicon glyphicon-eye-open">'+ad.number_of_views+'</span></div>' +
												'<div class="col-sm-3" style="cursor:pointer;">  <span data-type="ads" data-id=" '+ad.ID+'" class="glyphicon glyphicon-thumbs-up likes '+liked+'">'+ad.number_of_likes+'</span> </div>' +
												'<div class="col-sm-3" style="cursor:pointer;"> <span  data-type="ads" data-id=" '+ad.ID+'" class="glyphicon glyphicon-comment comment">'+ad.number_of_comments+'</span></div>' +
												'<div class="col-sm-3" style="cursor:pointer;">  <span data-type="ads" data-id=" '+ad.ID+'" class="glyphicon glyphicon-share-alt"></span></div>' +
											'</div>' +
										'</div>' +
									'</div>' +
								'</div>' +
							'</div> ' +
						'</div>';
		return advert;
	}

//Demo tested
function pull_ads(category){
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
    if (category==""){
        //alert("features");
        xmlhttp.open("GET",URI+"customer/get-featured-adverts?page=1&amount=20&longitude=-33.9393375&latitude=18.4668566",true);
    } 	
    else{
        //alert("category");
        xmlhttp.open("GET",URI+"customer/get-adverts-in-category?category="+category+"&page=1",true);
    }
	
    xmlhttp.setRequestHeader("Authorization",'Bearer ' + token);
	xmlhttp.send();
	
	
}

function ads_init(category){
	
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
		            pull_ads(category);
		             for (var i = 0; i < 3;i++ ){
		                  pull_suggestions(1);
		              }
                    drawer_init();
		            close_drawer_onload(1500);
		        }



		    }
		} 	
	xmlhttp.open("POST","access.php?request=true",true);
	xmlhttp.send();
}

