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
	
	var template='<div id="'+shop_data.ID+'" class="col-sm-3">'+
						'<div class="fill highlight my_header" id="'+shop_data.profile_pic.id+'" style="background-image:url('+shop_data.wallpaper+');background-size:cover;height:34%;width:111%;margin-bottom:5px;">'+
										'<div class="row my_header-content">'+
											'<div>'+shop_data.name+'</div>'+
											'<div class="row">'+
												'<div class="col-sm-6" style="font-weight:400;color:white;">followers &nbsp;'+shop_data.number_of_followers+'</div>'+
												'<div class="col-sm-4 " style="margin-bottom:5px;"> <button class="btn btn-info btn-xs">+follow</button></div>'+
											'</div>'+
										'</div>'+
						'</div>'+
				  '</div>'
	return template;

}
// pull_companies(num,category,header,footer)
function buildCompanyPage(){
	
	
	drawer_init();
	close_drawer_onload(1500);
	
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
		  
		  
	xmlhttp.open("GET",url+"customer/get-companies-in-category?amount="+num+"&category="+category+"&page=1",true);
	xmlhttp.setRequestHeader("Authorisation",'Bearer ' + token);
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
				var info =xmlhttp.responseText;
				//alert(info);
				var data =JSON.parse(info);
				
				if(data.length>0){
					displayCompany(data,"location");
				}
			}
	}
		
		  
	xmlhttp.open("GET",URI+"customer/get-following-companies?page=1&amount=30",true);
	xmlhttp.setRequestHeader("Authorisation",'Bearer ' + token);
	xmlhttp.send();
	
}

function followed_setup(){
	pull_companies_followed();
	drawer_init();
	
	
}

