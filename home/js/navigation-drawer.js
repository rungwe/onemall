
function drawer_init(){
	
    $(document).ready(function(){
        //alert("drawer init")
	    $(".ui-24 .ui-button a").click(function(e){
		    e.preventDefault();
		    var btn = $(this);
		    var block = $(".ui-24");
		    if(block.hasClass("open")){
			    block.animate({"left":"-350px"},"300");
			    block.removeClass("open");
		    }
		    else{
			    block.animate({"left":"0px"},"300");
			    block.addClass("open");
		    }
	    });
    });

}

function drawer(){
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
    //alert("starting");
    $(document).ready(function () {
        //alert("starting");
        var block = $(".ui-24");
        if (block.hasClass("open")) {
            block.animate({ "left": "-350px" }, "300");
            block.removeClass("open");
        }
        //$("#drawer").animate({"left":"-240px"},1000);
    });
}

// navigation links

$(document).ready(function(){
	$("#homemenu").click(function(){
		
		window.location.href ="index.php";
	});
	
	$("#logout").click(function(){
		window.location.href="logout.php";
	});
	
});


