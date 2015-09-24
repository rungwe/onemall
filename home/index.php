
<html>

	<head>
		<title> one mall</title>
		<link rel="icon" href="img/log3.png"/>
		<meta name="viewport" content="width=1024">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/loader.css">
		<link href="css/myshops.css" rel="stylesheet">
		<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
		
		<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
		<<script type="text/javascript" src="js/constants.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/like.js"></script>
		<script type="text/javascript" src="js/broadcasts.js"></script>
		<script type="text/javascript" src="js/suggestions.js"></script>
		<script type="text/javascript" src="js/friends.js"></script>
		<script type="text/javascript" src="js/comment.js"></script>
		<script type="text/javascript" src="js/companies.js"></script>
		<script type="text/javascript" src="js/navigation-drawer.js"></script>
		<script type="text/javascript" src="js/main_init.js"></script>
		<script type="text/javascript" src="js/create_ad.js"></script>
	</head>
	
	
	<!-- <body onload="main_init()" style="background-image:url(img/cloud.png);background-size:cover;background-repeat:no-repeat;overflow:hidden;background-attachment:fixed;overflow-y:auto;"> -->
		<body onload="main_init()" style="background-color:#F2F2F2;overflow-y:auto;">
		<div id="nav" class="navbar-fixed-top" >
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-sm-2">
						<div class="col-sm-2">
							<a href="companies.php"><img src="img/log3.png" height="50" width="50"></a>
						</div>
					</div>
					
						
						<div class="col-sm-offset-1 col-sm-4">
							
								<div class="input-group" style="margin-top:3%;width:150%;">
								  <input type="text" class="form-control" placeholder="Search for Broadcasts or Ads" >
								  <span class="input-group-btn">
									
									<button class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" type="button">category&nbsp;<span class="caret"></span></button>
									<div class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<li role="presentation"><a >clothing</a></li>
									<li role="presentation"><a >beauty and therapy</a></li>
									<li role="presentation"><a >sports and leisure</a></li>
									<li role="presentation"><a >jewellery</a></li>
									<li role="presentation"><a >home and garden</a></li>
									<li role="presentation"><a >baby and kids</a></li>
									<li role="presentation"><a >pets</a></li>
									<li role="presentation"><a >beauty and therapy</a></li>
									<li role="presentation"><a >mobile phones</a></li>
									<li role="presentation"><a >computers</a></li>
									<li role="presentation"><a >other electronic</a></li>
									<li role="presentation"><a >vehicles</a></li>
									<li role="presentation"><a >business equipment</a></li>
									<li role="presentation"><a >services</a></li>
								  </div>
								  </span>
								  
								  
								</div><!-- /input-group -->
							
						</div>
						
						<div id="nav_content" style="margin-right:3%;">
						  <ul class="nav navbar-nav navbar-right style_font" >
								
							<li onclick="Home()" style="color:white;font-weight:900;font-size:150%;margin-top:15px;"><i class="icon ion-ios-home-outline circle" style="font-size:30px;color:#004A6E"></i>&nbsp;&nbsp;&nbsp;</li> 
							<!-- <li style="color:white;font-weight:900;font-size:150%;margin-top:15px;"><span class="glyphicon glyphicon-bell" ><label style="font-size:13px;">&nbsp;Notifications&nbsp;</label></span></li> -->
							
							<li style="cursor:pointer;"><span class="input-group" style="color:white;font-weight:900;font-size:150%;margin-top:15px;">
																												<i class="icon ion-ios-locked-outline dropdown-toggle circle" id="account" data-toggle="dropdown" aria-expanded="true" style="font-size:30px;color:#004A6E"></i>
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
			
		</div> <!-- navabar end -->
		
		<div class="container pos" style="height:91%;margin-top:5%;">
			<?php
				require 'components.php';
		
				echo nav_drawer();
			
			?>
			
			<!-- Edit account -->
			<?php
				
				echo edit_account_modal();
				echo create_ad();
			
			?>
			
			
				
				<div id="content">
					
					<div id="left" class="col-sm-3">
					
							<div style="background-color:white;margin-left:-50px;">
								
								<div style="background-color:#004A6E;height:150px;width:279px;border-radius:2px;z-index:1;position:absolute;">
								
								</div>
								<div style="background-color:#004A6E;height:80px;width:80px;border-radius:2px;position:absolute;margin-top:60px;margin-left:40px;border-color:white;border-width:5px;border-style:solid;z-index:2;">
									<img src="img/camera3.png" height="40" width="40" style="margin-left:15px;margin-top:15px;">
								</div>
								<div style="background-color:white;width:279px;border-radius:2px;z-index:1;position:absolute;margin-top:100px;">
									<label style="margin-left:50%;font-size:100%;"><b id="user-name">Chaddy</b></label>
									<br>
									<br>
									<div class="row" style="font-size:14px;margin-left:4px;color:#B3B3B3;">
										<div class="col-sm-4" style="cursor:pointer;">
											<p ><a href="followers.php" style="color:#B3B3B3;"> following <br><span id="num_followers" style="background-color:#19A3D1;" class="badge">17</span></a></p>
										</div>
										<div class="col-sm-4">
											<p style="cursor:pointer;" onclick="show_friends()"> buddies <br><span id="num_buddies" style="background-color:#19A3D1;" class="badge"></span></p>
										</div>
										<div class="col-sm-4">
											<p style="cursor:pointer;"> active Ads <br><span id="num_ads" style="background-color:#19A3D1;" class="badge">2</span></p> 
										</div>
										
										
										
									</div>
								</div>
								
							</div>
						   
							<div id="dashboard" class="row" style="margin-top:200px;font-style:oblique;background-image:url('img/cloudbg61.png');background-size:cover;margin-left:-50px;width:280px;">
						
								<div class="col-sm-offset-3 col-sm-8 " style="margin-top:50px;font-weight:900;color:black;" >
									
									<div class="row" style="cursor:pointer;" onclick="Home()">
										<div class="col-sm-2" style="background-image:url('img/icons/RSS.png');background-size:20px 20px;background-repeat:no-repeat;height:20px;width:20px;"></div>
										<div class="col-sm-10 btn-xs" style="margin-top:3px;">Broadcasts <span style="background-color:#19A3D1;" class="badge">2</span></div>
									</div>
									
									<div class="row" style="cursor:pointer;">
										<div class="col-sm-2" style="background-image:url('img/icons/Dollar-Coin.png');background-size:20px 20px;background-repeat:no-repeat;height:20px;width:20px;"></div>
										<div class="col-sm-10 btn-xs" style="margin-top:5px;"> <a href="ads.php" style="text-align:left;font-style:oblique;color:black;">Ads</a></div>
									</div>
									
									<div class="row" style="cursor:pointer;">
										<div class="col-sm-2" style="background-image:url('img/icons/Shopping-Cart.png');background-size:20px 20px;background-repeat:no-repeat;height:20px;width:20px;"></div>
										<div class="col-sm-10 btn-xs" style="margin-top:5px;"> <a href="products.php" style="text-align:left;font-style:oblique;color:black;">Shopping</a></div>
									</div>
									
									<div class="row" onclick="show_friends()" style="cursor:pointer;">
										<div class="col-sm-2" style="background-image:url('img/icons/Contacts.png');background-size:20px 20px;background-repeat:no-repeat;height:20px;width:20px;"></div>
										<div class="col-sm-10 btn-xs" style="margin-top:5px;">Buddies</div>
									</div>
									
									<!-- <div class="row" style="cursor:pointer;">
										<div class="col-sm-2" style="background-image:url('img/notify.png');background-size:20px 20px;background-repeat:no-repeat;height:20px;width:20px;"></div>
										<div class="col-sm-10 btn-xs" style="margin-top:5px;">Notify me</div>
									</div> -->
									
								
									<!-- <div class="row" style="cursor:pointer;" data-toggle="modal" data-target="#create_ad" onclick="setup_adCreate()" >
										<div class="col-sm-2" style="background-image:url('img/icons/Pencil.png');background-size:20px 20px;background-repeat:no-repeat;height:20px;width:20px;"></div>
										<div class="col-sm-10 btn-xs" style="margin-top:5px;">Create Ads</div>
									</div> -->
									
									<div class="row" style="cursor:pointer;">
										<div class="col-sm-2" style="background-image:url('img/icons/Building.png');background-size:20px 20px;background-repeat:no-repeat;height:20px;width:20px;"></div>
										<div class="col-sm-10 btn-xs" style="margin-top:5px"> <a href="companies.php" style="text-align:left;font-style:oblique;color:black;">Companies</a></div>
									</div>
							
								</div>
							
							</div>
						   
							<br>
							
					</div>
					
					<div id="center" class="col-sm-6" >
						<div  id="center-main" style="margin-left:4%;" >
							
						
						</div>
						<div id="friends_nav" style="margin-left:4%;display:none">
							<center>
							 <div class= "row" style="width:50%;">
								<div class="col-sm-6 tab active_tab" id="friendslist">
								 <center style="cursor:pointer;font-weight:900;"> <h4>My friends</h4></center>
								</div>
								<div class="col-sm-6 tab" id="sug_friends">
								 <center style="cursor:pointer;font-weight:900;"><h4>Find friends </h4></center>
								</div>
							 </div>
							</center><br>
							<div id="friends">
							
							</div>
							<div id="suggested_friends" style="display:none">
							
							</div>
						</div>
						
						<div id="loader" class="loader loader2 col-sm-offset-3" style="margin-top:40%">
						  <div class="cube">
							<div class="side side1"></div>
							<div class="side side2"></div>
							<div class="side side3"></div>
							<div class="side side4"></div>
							<div class="side side5"></div>
							<div class="side side6"></div>
						  </div>
						</div>
						
					</div>
					
					<div id="right" class="col-sm-3" >
						
						<div class="panel panel-primary" >
							<div class="panel-heading" style="background-color:white;color:#004A6E;font-weight:700;">Suggested companies to follow</div>
							<div id="suggestions" class="panel-body">
								
								
							</div>
							<center style="color:#008AB8;"><a href="companies.php">view more</a></center>
							 
						</div>
					</div>
					
				</div>
				
		</div>
	</body>
	
	<script>
		$(".call").popover({title: "phone number", content: "+263 772 446 073",placement: "bottom"});
		$(".email").popover({title: "email", content: "kchaddy871@gmail.com",placement: "bottom"});
	</script>
	
	
	
</html>
