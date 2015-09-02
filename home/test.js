
function displayBroadcasts(){
	// locationID is the ID of the element eg div where the broadcasts are going to be sitting
	// feedsDict is an array of key-value pair dictionary which contains Broadcasts 
	
	var template= '<div id="ID" class="panel panel-info">'+
			  '				<div class="panel-heading">'+
			  ' 					<div class="row">'+
			  ' 						<div class="col-sm-2 shape" style="background-image:url(\'shop_profile_pic\');height:53px;width:50px;"></div>'+
			  ' 						<div class="col-sm-5">'+
			  ' 							<p><b>shop_name</b></p>'+
			  '							<p style="color:grey"> time</p>'+
			  '						</div>'+
			  '					</div>'+
			  '				</div>'+
			  '				<div class="panel-body">'+
			  '					post_info'+	
			  '					<div class="row">'+
			  '						<div class="col-sm-offset-1 col-sm-10" style="height:215px;background-image:url(\'poster\');background-size:cover;"></div>'+
			  '					</div>'+
			  '				</div>'+
			  '				<div class="panel-footer">'+
			  ' 				<div class="row">'+
			  '  					<div class="col-sm-offset-1 col-sm-3">  <span class="glyphicon glyphicon-thumbs-up"></span> 6</div>'+
			  '						<div class="col-sm-3">  <span class="glyphicon glyphicon-share-alt"></span></div>'+
			  '						<div class="col-sm-3"> <span class="glyphicon glyphicon-comment"></span> 14</div>'+
			  '						<div class="col-sm-2"> <span class="glyphicon glyphicon-star"></span></div>'+
			  '					</div>'+
			  '				</div>'+			
			  '			</div>'
	document.write(template);
	
	
}
displayBroadcasts();

