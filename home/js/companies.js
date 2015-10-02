/*
Author: Chaddy Rungwe
Date: 20 May 2015

Content: Library for client side scripts for My Shops

**/

/*
displayCompany generates the html code to display shops
locationID is the ID of the element eg div where the broadcasts are going to be sitting
shopsArr is an array of key-value pair dictionary which contains Shops

Shops are arranged in order of retrieval

status: in progress
**/
function displayCompany(compArr,locationID){
	
	
	for (var i=0;i<compArr.length;i++){
		var comp_data =compArr[i];
		var company = buildCompany(comp_data);
		document.getElementById(locationID).innerHTML=document.getElementById(locationID).innerHTML+company;
		
	}
	
}

function buildCompany(shop_data){
	//shop data instances  name: shop_name , shop_profile_picture , shop_wall_picture,  shop_id , num_followers;
	var id= shop_data["shop_id"], shop_pic = shop_data["shop_wall_picture"], shop_name=shop_data["shop_name"], followers=shop_data["num_followers"];
	var template='<div id="'+id+'" class="col-sm-3">'+
						'<div class="fill highlight my_header" style="background-image:url(\''+shop_pic+'\');background-size:cover;height:34%;width:111%;margin-bottom:5px;">'+
										'<div class="row my_header-content">'+
											'<div>'+shop_name+'</div>'+
											'<div class="row">'+
												'<div class="col-sm-6" style="font-weight:400;color:white;">followers &nbsp;'+followers+'</div>'+
												'<div class="col-sm-4 " style="margin-bottom:5px;"> <button class="btn btn-info btn-xs">+follow</button></div>'+
											'</div>'+
										'</div>'+
						'</div>'+
				  '</div>'
	return template;

}
// pull_companies(num,category,header,footer)
function buildCompanyPage(){
	//most popular
	pull_companies(4,"popular",header("Most Popular"),footer())
	
	// recommended
	pull_companies(8,"recommended",header("Recommended"),footer())
	
	// clothing
	pull_companies(8,"clothing",header("clothing and fashion"),footer())
	
	//electronics
	pull_companies(8,"electronics",header("consumer electronics"),footer())
	
	// banks
	pull_companies(8,"banks",header("Banking and insuarance"),footer());
	
	drawer_init();
	close_drawer_onload(1500);
	
}

function header(title){
		var template = '<div style="margin-left:2%;font-weight:900;font-style:oblique;background-color:#F0F1F1;width:25%;margin-bottom:1%;height:5%;border-radius: 25px;"><h4 style="margin-left:5%;font-weight:900;font-style:oblique;">'+title+'</h4></div>';
		return template;
}
function footer(){
	var template ='<button class="btn btn-default" style="margin-left:90%;border: 1px solid #004A6E;color:#004A6E;">view more</button>'+
				  '<hr>';
	return template;
}

function pull_companies(num,category,header,footer){
	
	var ID=category;
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
				//SEND => name: request_companies = 'true'  , name:category, name:number_companies;
				
				var info =xmlhttp.responseText;
				//alert(info);
				var data =JSON.parse(info);
				document.getElementById("loader").style.display="none"
				if(info!=""){
					
					document.getElementById(ID).innerHTML=header;
					displayCompany(data,ID);
					document.getElementById(ID).innerHTML+=footer;
				}
			}
	}
		  
		  
	xmlhttp.open("POST",url+"?request_companies=true&number_companies="+num+"&category="+category,true);
	xmlhttp.send();
	
}



function pull_companies_followed(){
	
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
				//SEND => name: request_companies = 'true'  , name:category, name:number_companies;
				
				var info =xmlhttp.responseText;
				//alert(info);
				var data =JSON.parse(info);
				document.getElementById("loader").style.display="none"
				if(info!=""){
					displayCompany(data,"companies_followed");
				}
			}
	}
		
	//SEND => name: pull_followers
	//RECEIVE => name: shop_name , shop_profile_picture , shop_wall_picture, shopID , num_followers;
		  
	xmlhttp.open("POST",url+"?pull_followers=true",true);
	xmlhttp.send();
	
}

function followed_setup(){
	pull_companies_followed();
	drawer_init();
	close_drawer_onload(1500);
	
}

