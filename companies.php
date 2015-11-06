<?php
require 'session.php';
init();


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
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="http://css-spinners.com/css/spinners.css" type="text/css">
		<link href="home/css/myshops.css" rel="stylesheet">
        <link href="./menu_files/style-24.css" rel="stylesheet">
		<link rel="stylesheet" href="https://d2zpmorlxdsejy.cloudfront.net/Scripts/css/loader.css">
		<script type="text/javascript" src="https://d2zpmorlxdsejy.cloudfront.net/Scripts/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="https://d2zpmorlxdsejy.cloudfront.net/Scripts/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="home/js/constants.js"></script>
		<script type="text/javascript" src="home/js/navigation-drawer.js"></script>
		<script type="text/javascript" src="home/js/companies.js"></script>
		
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
							  <input type="text" class="form-control" placeholder="Search for companies">
							  <span class="input-group-btn">
								<button class="btn btn-default" type="button">Search</button>
							  </span>
							  
							  
							</div><!-- /input-group -->
						
					</div>
					<div id="nav_content" style="margin-right:3%;" class="res">
						  <ul class="nav navbar-nav navbar-right style_font" >
								
							<li class="home" style="color:white;font-weight:900;font-size:150%;margin-top:15px;"><i class="icon ion-ios-home-outline" style="font-size:30px;color:#004A6E"><label style="font-size:13px;font-weight:400;">&nbsp;Home&nbsp;&nbsp;</label></i></li>
							<!-- <li style="color:white;font-weight:900;font-size:150%;margin-top:15px;"><span class="glyphicon glyphicon-bell" ><label style="font-size:13px;">&nbsp;Notifications&nbsp;</label></span></li> -->
							
							<li style="cursor:pointer;"><span class="input-group" style="color:white;font-weight:900;font-size:150%;margin-top:15px;">
																												<i class="icon ion-ios-locked-outline dropdown-toggle" id="account" data-toggle="dropdown" aria-expanded="true" style="font-size:30px;color:#004A6E"><label style="font-size:13px;font-weight:400;">&nbsp;Account</label></i>
																													<ul class="dropdown-menu" role="menu" aria-labelledby="account">
																														<li role="presentation" class="dropdown-header"><center>Chaddy</center></li>
																														 <li role="presentation" class="divider"></li>
																														<li role="presentation" data-toggle="modal" data-target="#edit_ac"><a role="menuitem" tabindex="-1" style="text-align:left;"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;settings</a></li>
																														<li role="presentation"><a href="logout.php" role="menuitem" tabindex="-1" style="text-align:left;"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;logout</a></li>
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
		'<div class= "row" style="width:80%;margin-left:10%;position:fixed;z-index:2;">
			<div class="col-sm-3 tab active_tab" >
			<center style="cursor:pointer;"><h3> Companies</h3></center>
			</div>
			<div class="col-sm-3 tab" >
			<center>
			<span class="input-group">
				<center class="dropdown-toggle" id="dropdownMenu" data-toggle="dropdown" style="cursor:pointer;"><h3>Category&nbsp;</h3><span class="caret"></span></center>
				
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
				<center class=" dropdown-toggle" id="dropdownMenuLocation" data-toggle="dropdown" style="cursor:pointer;"><h3>Location&nbsp;</h3><span class="caret"></span></center>
				
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
			<center style="cursor:pointer;"><h3 class="following">Following</h3></center>
			</div>
		</div>
		<br>
		<div class="container-fluid" style="height:91%;">
			
			<div class="row col-sm-offset-1 col-sm-10">
				<div id="loader" class="loader loader2 col-sm-offset-3" style="margin-top:25%">
						  <center>
							        <div class="throbber-loader">
                                       
                                    </div>
                              </center>
				</div>
            <br><br>
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