
function drawer_init(){
	$(document).ready( function(){
			$("#control").click(function(){
				//alert("testing");
				if(drawer=="on"){
					drawer="off";
					$("#drawer").animate({"left":"-240px"},1000);
				}
				else{
					drawer="on";
					$("#drawer").animate({"left":"10px"},1000);
				}
			});
		});
}
function close_drawer_onload(time){
	setTimeout(function(){close_drawer()}, time);
}
function close_drawer(){
	
	$(document).ready( function(){
			
			$("#drawer").animate({"left":"-240px"},1000);
		});
}

// navigation links

$(document).ready(function(){
	$("#homemenu").click(function(){
		
		window.location.href ="index.php";
	});
	
});
