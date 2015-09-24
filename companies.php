<?php


session_start();
require 'session.php';
require 'components.php';

aunthenticate(companies_page());
//phpinfo();


function companies_page(){
	
	$page ='
<html>

	<head>
		<title> companies</title>
		<link rel="icon" href="https://d2zpmorlxdsejy.cloudfront.net/Scripts/img/log3.png"/>
		<meta name="viewport" content="width=1024">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://d2zpmorlxdsejy.cloudfront.net/Scripts/css/font-awesome.min.css">
		<link href="https://d2zpmorlxdsejy.cloudfront.net/Scripts/css/myshops.css" rel="stylesheet">
		<link rel="stylesheet" href="https://d2zpmorlxdsejy.cloudfront.net/Scripts/css/loader.css">
		<script type="text/javascript" src="https://d2zpmorlxdsejy.cloudfront.net/Scripts/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="https://d2zpmorlxdsejy.cloudfront.net/Scripts/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://d2zpmorlxdsejy.cloudfront.net/Scripts/js/constants.js"></script>
		<script type="text/javascript" src="https://d2zpmorlxdsejy.cloudfront.net/Scripts/js/navigation-drawer.js"></script>
		<script type="text/javascript" src="https://d2zpmorlxdsejy.cloudfront.net/Scripts/js/companies.js"></script>
		
	</head>
	
	<!-- <body onload ="buildCompanyPage()" style="background-image:url(https://s3.eu-central-1.amazonaws.com/userinterface-scripts/Scripts/img/cloud.png);background-size:cover;background-repeat:no-repeat;background-attachment:fixed;overflow-y:auto;"> -->
		<body onload ="buildCompanyPage()" style="background-color:#F2F2F2;">
		<div id="nav" class="navbar-fixed-top" >
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-sm-2">
						<div class="col-sm-2">
							<a href="index.php"><img src="https://s3.eu-central-1.amazonaws.com/userinterface-scripts/Scripts/img/log3.png" height="50" width="50"/></a>
						</div>
					</div>
					
						
					<div class="col-sm-offset-1 col-sm-4">
						
							<div class="input-group" style="margin-top:3%;width:150%;">
							  <input type="text" class="form-control" placeholder="Search Shops">
							  <span class="input-group-btn">
								<button class="btn btn-default" type="button">Search</button>
							  </span>
							  
							  
							</div><!-- /input-group -->
						
					</div>
					<div id="nav_content" style="margin-right:3%;" class="res">
						  <ul class="nav navbar-nav navbar-right style_font" >
								
							<li><a href="index.php" style="color:white;font-weight:900;font-size:150%;"><span class="glyphicon glyphicon-home" ><label style="font-size:13px;">&nbsp;Home&nbsp;</label></span></a></li>
						<!--	<li style="color:white;font-weight:900;font-size:150%;margin-top:15px;"><span class="glyphicon glyphicon-bell" ><label style="font-size:13px;">&nbsp;Notifications&nbsp;</label></span></li> -->
							
							<li style="cursor:pointer;"><span class="input-group" style="color:white;font-weight:900;font-size:150%;margin-top:15px;">
																												<span class="glyphicon glyphicon-lock dropdown-toggle" id="account" data-toggle="dropdown" aria-expanded="true"><label style="font-size:13px;">&nbsp;Account</label></span>
																													<ul class="dropdown-menu" role="menu" aria-labelledby="account">
																														<li role="presentation" class="dropdown-header"><center>Chaddy<center></li>
																														 <li role="presentation" class="divider"></li>
																														<li role="presentation" data-toggle="modal" data-target="#edit_ac"><a role="menuitem" tabindex="-1" style="text-align:left;"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;settings</a></li>
																														<li role="presentation"><a role="menuitem" tabindex="-1" style="text-align:left;"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;logout</a></li>
																														<li role="presentation"><a role="menuitem" tabindex="-1" style="text-align:left;"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;about us</a></li>
																														<li role="presentation"><a role="menuitem" tabindex="-1" style="text-align:left;"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;&nbsp;help</a></li>
																													 </ul>
																												</span>
																												
																												</li> 
						  </ul>
						</div>
					</div>	
					
					
							
					
				</div>
			  
			
		</div>
		<br><br><br>'.
		nav_drawer().
		create_ad().
		edit_account_modal().
		'<div class= "row" style="width:50%;margin-left:20%;position:fixed;z-index:2;">
			<div class="col-sm-3 tab active_tab" >
			<center style="cursor:pointer;"><a><b> My companies</b></a></center>
			</div>
			<div class="col-sm-3 tab" >
			<center>
			<span class="input-group">
				<center class="dropdown-toggle" id="dropdownMenu" data-toggle="dropdown" style="cursor:pointer;"><a><b>Category&nbsp;</b><span class="caret"></span></a></center>
				
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
										<li role="presentation"><a>All</a></li>
										<li role="presentation"><a>Top Trending</a></li>
										<li role="presentation"><a>Recommended</a></li>
										<li role="presentation"><a>Clothing and fashion</a></li>
										<li role="presentation"><a>Consumer Electronics</a></li>
										<li role="presentation"><a>Groceries</a></li>
										<li role="presentation"><a>Banking and Insurance</a></li>
										<li role="presentation"><a>Automotive</a></li>
										<li role="presentation"><a>Sports and Entertainment</a></li>
										<li role="presentation"><a>Health</a></li>
										<li role="presentation"><a>Home and Gardening</a></li>
										<li role="presentation"><a>Travel</a></li>
										<li role="presentation"><a>Education</a></li>
										
										
				</ul>
			</span>
			</center>
			</div>
			
			<div class="col-sm-3 tab"  >
			<center style="cursor:pointer;">
				<span class="input-group">
				<center class=" dropdown-toggle" id="dropdownMenuLocation" data-toggle="dropdown" style="cursor:pointer;"><a><b>Location&nbsp;</b><span class="caret"></span></a></center>
				
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenuLocation">
										<li role="presentation"><a>Western Cape</a></li>
										<li role="presentation"><a>Gauteng</a></li>
										<li role="presentation"><a>Northen Cape</a></li>
										<li role="presentation"><a>Kwazulu Natal</a></li>
										<li role="presentation"><a>Limpopo</a></li>
										<li role="presentation"><a>Mpumalanga</a></li>
										<li role="presentation"><a>Eastern Cape</a></li>
										<li role="presentation"><a>North West</a></li>
										<li role="presentation"><a>Free State</a></li>
										
				</ul>
			</span>
			</center>
			</div>
			<div class="col-sm-3 tab" >
			<center style="cursor:pointer;"> <a href="followers.php"><b>Following</b></a></center>
			</div>
		</div>
		<br>
		<div class="container-fluid" style="height:91%;">
			
			<div class="row col-sm-offset-1 col-sm-10">
				<div id="loader" class="loader loader2 col-sm-offset-3" style="margin-top:25%">
						  <div class="cube">
							<div class="side side1"></div>
							<div class="side side2"></div>
							<div class="side side3"></div>
							<div class="side side4"></div>
							<div class="side side5"></div>
							<div class="side side6"></div>
						  </div>
				</div>
			<div id ="popular" class="row" style="margin:0px;padding:0px;">
				
			</div>
			
			<div id ="recommended" class="row" style="margin:0px;padding:0px;">
				
			</div>
	
			<div id ="clothing" class="row" style="margin:0px;padding:0px;">
				
			</div>
			
			<div id ="electronics" class="row" style="margin:0px;padding:0px;">
				
			</div>
			
			<div id ="banks" class="row" style="margin:0px;padding:0px;">
				
			</div>
						
			</div>
				
		</div>
		
		
	</body>
	<script>
			$(document).ready(function(){
	
				$(".tab").click(function(){
					$(".tab").removeClass("active_tab");
					$(this).addClass("active_tab");
				});
			});
			
	</script>
	
</html>';

return $page;
}



?>