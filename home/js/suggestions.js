/*
Author: Chaddy Rungwe
Date: 20 May 2015

Content: Library for client side scripts for My Shops

**/
//****************Globals**********************************************
var suggestions = Array();
var sug_page = 1;
var sug_count = 1;
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
			document.getElementById(locationID).innerHTML=document.getElementById(locationID).innerHTML+sug+line;
		}
		else{
			var suggestion_data = suggestionArr[i];
			var sug = buildSuggestion(suggestion_data);
			document.getElementById(locationID).innerHTML=document.getElementById(locationID).innerHTML+sug+line;
		}
		
	}


	bind_follow_suggestions(true);	
	
		
}

//tested
function buildSuggestion(sug_data){
        var pic = "";
        var pic_id = "";
	    if(sug_data.profile_pic==null){
	        pic = "img/companyprof.png";
	        pic_id = 0;
	    }
        else{
            pic = img_url+sug_data.profile_pic.url;
	        pic_id = sug_data.profile_pic.id;
        }

		var template='<div id="'+sug_data.ID+'" class="row">'+
				'<img class="col-sm-4 "  src="'+pic+'" id="'+pic_id+'"height="53px" width="50px" border="2" />'+
				'<div class="col-sm-7 btn-xs">'+
					'<p><b>'+sug_data.name+'</b></p>'+
					'<button data-suggestion-id="'+sug_data.ID+'" class="btn btn-info btn-xs suggestionBtn" style="background-color:white;color:#004A6E">+'+sug_data.number_of_followers+'&nbsp;followers</button>'+
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

		  xmlhttp_sug.onreadystatechange = function () {
		      if (xmlhttp_sug.readyState == 4 && xmlhttp_sug.status == 200) {
		          var info = xmlhttp_sug.responseText;
		          var data = JSON.parse(info);
		          if (suggestions.length == 0) {
		              displaySuggestions(data, suggestionID);
		          }
		          else {
		              var sug = suggestions.pop();
		              sug.html(buildSuggestion(data[0]));
		              //buildSuggestion(data[2]);
		              bind_follow_suggestions();
		              sug.removeClass("bounceOut");
                      sug.removeClass("row");
		              sug.addClass("fadeIn");
                      
		          }

		      }
		  }
    
	xmlhttp_sug.open("GET",URI+"customer/get-company-suggestions?page="+sug_count+"&amount="+num,true);
	sug_count = sug_count + 1;
    xmlhttp_sug.setRequestHeader("Authorization",'Bearer ' + token);
	xmlhttp_sug.send();
    sug_page++;
		  
}

function follow_company(company_id, replace){
    var xmlHttp;
    if(window.XMLHttpRequest){
        xmlHttp = new XMLHttpRequest();
    }
    else{
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 201) {
            change_sug(company_id, replace);
            if (sessionStorage.getItem("recommeded") != null) {
                sessionStorage.recommeded = 1+parseInt(sessionStorage.recommeded);
            }

        }
        else if (xmlHttp.readyState == 4 && xmlHttp.status != 201) {
            notify_failure("unexpected error occured :(");
        }
    }
    //alert(company_id);
    xmlHttp.open("PUT", URI + "customer/follow-company?id=" + company_id, true);
    xmlHttp.setRequestHeader("Authorization",'Bearer ' + token);
    xmlHttp.send();
}
function bind_follow_suggestions(replace){
    $(document).ready(function () {

        $(".suggestionBtn").click(function () {
            var btn = $(this);
            var id = btn.attr("data-suggestion-id");
            // follow a company
            follow_company(id,replace);

        });

    });
}


// animated
function change_sug(id,replace){
    $(document).ready(function () {
        $("#" + id).addClass("animated");
        $("#" + id).addClass("bounceOut");
        if (replace == true) {
            var sug = $("#" + id);
            suggestions.push(sug);
            setTimeout(function () { pull_suggestions(1); }, 1000);
        }
    });  
}


$(document).ready(function () {
    $("#done_recommend").click(function () {
        var num = parseInt(sessionStorage.recommeded);
        if (num>= 3) {
            pull_broadcasts(10);
            $('#company_reommender').modal('toggle');
        }

        else {
            notify_failure("follow at least 3 company");
        }
    });
});

function randomIntFromInterval(min,max)
{
    return Math.floor(Math.random()*(max-min+1)+min);
}