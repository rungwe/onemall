<?php

function nav_drawer(){
	$drawer_html = '<div id="drawer"class="row" style="position:fixed;z-index:3;">
			<div class="col-sm-4" id="drawer-content" style="border:2px solid #004A6E; width:250px;background-color:white;height:100%;position:fixed;z-index:3;margin:0px;padding:0px;">
				<div style="background-image:url(\'img/bk-freeze-ga.jpg\');height:150;width:100%;margin:0px;background-size:cover;">
				
				</div>
				<div class="menu row">
					<div class="col-sm-2">
						<img src="img/icons/Home.png" height="30" width="30">
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<h4 id="homemenu" >Home</h4>
					</div>
					
				</div>
				<div class="menu row">
					<div class="col-sm-2">
						<img src="img/icons/Paper-Money.png" height="30" width="30">
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<h4>Create Ads </h4>
					</div>
					
				</div>
				<div class="menu row">
					<div class="col-sm-2">
						<img src="img/icons/Briefcase.png" height="30" width="30">
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<h4>Manage Ads</h4>
					</div>
					
				</div>
				<div class="menu row">
					<div class="col-sm-2">
						<img src="img/icons/Credit-Card.png" height="30" width="30">
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<h4>Payments</h4>
					</div>
					
				</div>
				<div class="menu row">
					<div class="col-sm-2">
						<img src="img/icons/Desktop.png" height="30" width="30">
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<h4>Create Page</h4>
					</div>
					
				</div>
				<div class="menu row">
					<div class="col-sm-2">
						<img src="img/icons/Web Browser.png" height="30" width="30">
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<h4>Manage Pages</h4>
					</div>
					
				</div>
				<div class="menu row">
					<div class="col-sm-2">
						<img src="img/icons/Graph.png" height="30" width="30">
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<h4>My Statistics</h4>
					</div>
					
				</div>
				<div class="menu row">
					<div class="col-sm-2">
						<img src="img/icons/X.png" height="30" width="30">
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<h4>Verify Account</h4>
					</div>
					
				</div>
				<div class="menu row">
					<div class="col-sm-2">
						<img src="img/icons/Gear.png" height="30" width="30">
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<h4>Settings</h4>
					</div>
					
				</div>
				<div class="menu row">
					<div class="col-sm-2">
						<img src="img/icons/Support.png" height="30" width="30">
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<h4>Support</h4>
					</div>
					
				</div>
				<div class="menu row">
					<div class="col-sm-2">
						<img src="img/icons/Lock.png" height="30" width="30">
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<h4>Logout</h4>
					</div>
					
				</div>
			</div>
			<div class="col-sm-2 pull-right" id="control" style="border:2px solid #004A6E;width:45px;height:45px;background-color:white;position:fixed;z-index:3;margin-left:250px;">
				<span class="glyphicon glyphicon-align-justify  btn-lg" style="margin-left:-19px;color:#004A6E"></span>
			</div>
		</div>';
		
	return $drawer_html;
	
}




?>