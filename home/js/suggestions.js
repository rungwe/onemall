/*
Author: Chaddy Rungwe
Date: 20 May 2015

Content: Library for client side scripts for My Shops

**/
//***************Globals**********************************************
var reloadsug=setInterval(function(){pull_suggestions(3)}, 10000);
//***************end of globals***************************************

/*
this method displays front page suggestions which are of a limited number
this function is incomplete, the criteria of shop selection is to be chosen
it takes the suggestionArr which is an array of objects which contains characteristics of a suggestion
locationID is the id of the parent
**/

// tested
function displaySuggestions(suggestionArr, locationID){
	var line="<hr>";
	for (var i=0;i<suggestionArr.length;i++){
		
		if(i==(suggestionArr.length)-1){
			var suggestion_data = suggestionArr[i];
			var sug = buildSuggestion(suggestion_data);
			document.getElementById(locationID).innerHTML=document.getElementById(locationID).innerHTML+sug;
		}
		else{
			var suggestion_data = suggestionArr[i];
			var sug = buildSuggestion(suggestion_data);
			document.getElementById(locationID).innerHTML=document.getElementById(locationID).innerHTML+sug+line;
		}
		
	}
	
	
		
	
		
}

//tested
function buildSuggestion(sug_data){
	//sug_data instances  name: shop_name , shop_profile_picture , shop_wall_picture,  shop_id , num_followers;
		var shop_profile=sug_data["shop_profile_picture"], shop_name=sug_data["shop_name"],followers=sug_data["num_followers"], ID=sug_data["shop_id"];
		var template='<div id="'+ID+'" class="row">'+
				'<img class="col-sm-4 " src="'+shop_profile+'" height="53px" width="50px" border="2" />'+
				'<div class="col-sm-7 btn-xs">'+
					'<p><b>'+shop_name+'</b></p>'+
					'<button class="btn btn-info btn-xs suggestionBtn" style="background-color:white;color:#004A6E">+'+followers+'&nbsp;followers</button>'+
				'</div>'+
				'</div>';
			
	return template;
}

function pull_suggestions(num){
	var suggestionID="suggestions";
	var xmlhttp_sug;
	
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  
		  xmlhttp_sug=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		 
		  xmlhttp_sug=new ActiveXObject("Microsoft.XMLHTTP");
		  }
	
	xmlhttp_sug.onreadystatechange=function()
		  {
		  if (xmlhttp_sug.readyState==4 && xmlhttp_sug.status==200)
			{
			window.clearInterval(reloadsug);
			var info =xmlhttp_sug.responseText;
			var data =JSON.parse(info);
			displaySuggestions(data,suggestionID);
			}
		  }
		  
	xmlhttp_sug.open("POST",url+"?request_suggestions=true&number_suggestions="+num,true);
	xmlhttp_sug.send();
		  
}