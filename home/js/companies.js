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
followers_counter = 0;


function displayCompany(compArr,locationID){
	
	
	for (var i=0;i<compArr.length;i++){
		var comp_data =compArr[i];
		var company = buildCompany(comp_data);
		document.getElementById(locationID).innerHTML=document.getElementById(locationID).innerHTML+company;
		
	}
	
}

function buildCompany(company){
    var url =company.wallpaper.url;
    if(url==null){
        url = "img/companybg.jpg"
    }

    var template = '<div class="col-sm-4">' +
						        '<!-- Item -->' +
						        '<div id="'+company.ID+'" class="ui-item">' +
							        '<!-- Image -->' +
							        '<img src="'+url+'" alt="" class="img-responsive">' +
							        '<a href="" class="ui-circle bg-lblue">'+company.number_of_followers+'</a>' +
							        '<!-- Details -->' +
							        '<div class="ui-details">' +
								        '<!-- Heading -->' +
								        '<h3>'+company.name+'</h3>' +
								        '<!-- Paragraph -->' +
								        '<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut </p>' +
								        '<!-- Button -->' +
								        '<a class="btn btn-lblue btn-xs fllwBtn" data-companyID="'+company.ID+'">+follow</a>' +
							        '</div>' +
						        '</div>' +
					        '</div>';
	return template;

}
// pull_companies(num,category,header,footer)
function buildCompanyPage(){
	
	pull_recommended(6);
	drawer_init();
	close_drawer_onload(1500);
	
}

function header(title){
		var template = '<div style="margin-left:2%;background-color:#F0F1F1;width:25%;margin-bottom:1%;height:5%;border-radius: 25px;"><h4 style="margin-left:5%;">'+title+'</h4></div>';
		return template;
}
function footer(){
    var template = '<button class="btn btn-default" style="margin-left:90%;border: 1px solid #004A6E;color:#004A6E;">view more</button>';
				  
	return template;
}


function pull_recommended(num){
    var xmlHttp;

    if (window.XMLHttpRequest){
         xmlHttp=new XMLHttpRequest();
    }

    else
		  {// code for IE6, IE5
		 
		  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
            var info = xmlHttp.responseText;
            //alert(info);
            var data = JSON.parse(info);
            displayCompany(data, "recommend");

        }
    }
    
    xmlHttp.open("GET",URI+"customer/get-company-suggestions?page=1&amount=10",true);
    xmlHttp.send();
			
    
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
				alert(info);
				var data =JSON.parse(info);
				document.getElementById("loader").style.display="none"
				if(info!=""){
					
					document.getElementById(ID).innerHTML=header;
					displayCompany(data,ID);
					document.getElementById(ID).innerHTML+=footer;
				}
			}
	}
		  
    xmlhttp.open("GET",URI+"customer/get-company-suggestions-by-category?num_categories={num_categories}&page={page}&num_companies={num_companies}",true);	  
	xmlhttp.setRequestHeader("Authorization",'Bearer ' + token);
	xmlhttp.send();
	
}



function pull_companies_followed(){
	
	var xmlhttp;
	var page = followers_counter++;
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
				alert(info);
				var data =JSON.parse(info);
				document.getElementById("loader").style.display="none"
				if(info!=""){
					displayCompany(data,"companies_followed");
				}
			}
	}
		
	//SEND => name: pull_followers
	//RECEIVE => name: shop_name , shop_profile_picture , shop_wall_picture, shopID , num_followers;
	xmlhttp.open("GET",URI+"customer/get-following-companies?page="+page+"&amount=20",true);	  
	xmlhttp.setRequestHeader("Authorization",'Bearer ' + token);
	xmlhttp.send();
	
}

function followed_setup(){
	pull_companies_followed();
	drawer_init();
	close_drawer_onload(1500);
	
}


