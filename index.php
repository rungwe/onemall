<?php
ini_set('display_errors',true);
require 'session.php';
init();


aunthenticate();
customer_restricted();
//phpinfo();
?>

<html>

	<head>
		<title> Home</title>
		<link rel="icon" href="img/fav2.png"/>
		<meta name="viewport" content="width=1024">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/loader.css">
        
        <link rel="stylesheet" href="home/css/friends.css">
		<link href="home/css/myshops.css" rel="stylesheet">
        <link href="./companies_files/style-142.css" rel="stylesheet">
        <link rel="stylesheet" href="home/css/friends.css">
        <link rel="stylesheet" href="home/css/profile.css">
		<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
		<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
        <link rel="stylesheet" href="http://css-spinners.com/css/spinners.css" type="text/css">
		<link href="home/css/googlemaps.css" rel="stylesheet">
        <link href="./menu_files/style-24.css" rel="stylesheet">
        <link href="home/css/animate.css" rel="stylesheet">
        
        <script type="text/javascript" src="home/js/googlemaps.js"></script>
        <script type="text/javascript" src="home/js/jquery.min.js"></script>
		<script type="text/javascript" src="home/js/constants.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
        <script type="text/javascript" src="home/js/googlemaps.js"></script>
		<script type="text/javascript" src="home/js/like.js"></script>
		<script type="text/javascript" src="home/js/broadcasts.js"></script>
		<script type="text/javascript" src="home/js/suggestions.js"></script>
		<script type="text/javascript" src="home/js/friends.js"></script>
		<script type="text/javascript" src="home/js/comment.js"></script>
		<script type="text/javascript" src="home/js/companies.js"></script>
		<script type="text/javascript" src="home/js/navigation-drawer.js"></script>
		<script type="text/javascript" src="home/js/main_init.js"></script>
		<script type="text/javascript" src="home/js/create_ad.js"></script>
        <script type="text/javascript" src="home/js/profile.js"></script>
        <script type="text/javascript" src="home/js/jquery.endless-scroll.js"></script>
        <script type="text/javascript" src="home/js/bootstrap-notify.min.js"></script>
	</head>
	
	
	<!-- <body id="body" onload="main_init()" style="background-image:url(img/cloud.png);background-size:cover;background-repeat:no-repeat;overflow:hidden;background-attachment:fixed;overflow-y:auto;"> -->
		<body onload="main_init()"  style="background-color:#F2F2F2;overflow-y:auto;">
		<div id="nav" class="navbar-fixed-top" >
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-sm-2">
						<div class="col-sm-2">
							<a href="index.php"><img src="img/log3.png" alt="one mall" height="50" width="150"></a>
						</div>
					</div>
					
						
						<div class="col-sm-offset-1 col-sm-4">
							
								<div class="input-group" style="margin-top:3%;width:150%;">
								  <input type="text" class="form-control" placeholder="Search for Broadcasts or Ads" >
								  <span class="input-group-btn">
									
									<button class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" type="button">category&nbsp;<span class="caret"></span></button>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    
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
                                    
								  </ul>
								  </span>
								  
								  
								</div><!-- /input-group -->
							
						</div>
						
						<div id="nav_content" style="margin-right:3%;">
						  <ul class="nav navbar-nav navbar-right style_font" >
								
							<li onclick="Home()" style="color:white;font-weight:900;font-size:150%;margin-top:15px;"><i class="icon ion-ios-home-outline" style="font-size:30px;color:#004A6E"><label style="font-size:13px;font-weight:400;">&nbsp;Home&nbsp;&nbsp;</label></i></li>
							<!-- <li style="color:white;font-weight:900;font-size:150%;margin-top:15px;"><span class="glyphicon glyphicon-bell" ><label style="font-size:13px;">&nbsp;Notifications&nbsp;</label></span></li> -->
							
							<li style="cursor:pointer;"><span class="input-group" style="color:white;font-weight:900;font-size:150%;margin-top:15px;">
																												<i class="icon ion-ios-locked-outline dropdown-toggle" id="account" data-toggle="dropdown" aria-expanded="true" style="font-size:30px;color:#004A6E"><label style="font-size:13px;font-weight:400;">&nbsp;Account</label></i>
																													<ul class="dropdown-menu" role="menu" aria-labelledby="account">
																														<li role="presentation" class="dropdown-header"><center id="popup_name"></center></li>
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
			
		</div> <!-- navabar end -->
		
		<div class="container pos" style="height:91%;margin-top:5%;">
            <?php 
                echo nav_drawer();
		        echo create_ad();
		        echo edit_account_modal();
	            echo ad_detail(); 
                echo shopping_cart();
                echo company_recommender();
            ?>
            <div id="content">
					
					<div id="left" class="col-sm-3">
					
							<div style="background-color:white;margin-left:-50px;">
								
								<div id="wall" style="background-color:#004A6E;height:150px;width:279px;border-radius:2px;z-index:1;position:absolute;background-size: cover;">
								    <span data-toggle="tooltip" title="change wallpaper" class="glyphicon glyphicon-edit pictures" style="cursor: pointer; color: white;"></span>
                                    <input class="filechooser" type="file" id="wall-pic" name="pic1" style="display:none" onchange="change_wall(this,'wall');" accept="image/*"/>
								</div>
                                
								<div style="background-color:#004A6E;height:80px;width:80px;border-radius:2px;position:absolute;margin-top:60px;margin-left:40px;border-color:white;border-width:5px;border-style:solid;z-index:2;">
									<img  id="profile-pic" class="pictures" data-toggle="tooltip" title="change profile picture"  src="img/camera3.png"alt="profile picture"  style="height: 100%;width: 100%;cursor: pointer;">
                                    
			                        <input class="filechooser" type="file" id="prof-pic" name="pic1" style="display:none" onchange="readURL(this,'profile-pic');" accept="image/*" />
								</div>
								<div style="background-color:white;width:279px;border-radius:2px;z-index:1;position:absolute;margin-top:100px;">
									<label style="margin-left:50%;font-size:100%;"><b id="user-name"></b></label>
									<br>
									<br>
									<div class="row" style="font-size:14px;margin-left:4px;color:#B3B3B3;">
										<div class="col-sm-4" style="cursor:pointer;">
											<p ><a href="followers.php" style="color:#B3B3B3;"> following <br><span id="num_followers" style="background-color:#19A3D1;" class="badge"></span></a></p>
										</div>
										<div class="col-sm-4">
											<p style="cursor:pointer;" onclick="show_friends()"> buddies <br><span id="num_buddies" style="background-color:#19A3D1;" class="badge"></span></p>
										</div>
										<div class="col-sm-4">
											<p style="cursor:pointer;"> active Ads <br><span id="num_ads" style="background-color:#19A3D1;" class="badge"></span></p> 
										</div>
										
										
										
									</div>
								</div>
								
							</div>
						    <br>
							<div id="dashboard" class="row" style="margin-top:200px;font-style:oblique;background-color:white;margin-left:-50px;width:280px;border-radius: 5px;">
						
								<div class="col-sm-offset-2 col-sm-8 " style="margin-top:5px;font-weight:400;color:black;" >
									
									<div class="row" style="cursor:pointer;" onclick="Home()">
										<div class="col-sm-2 " style="background-image:url('img/icons/RSS.png');background-size:20px 20px;background-repeat:no-repeat;height:20px;width:20px;"></div>
										<div class="col-sm-8 col-sm-offset-2 btn-xs" style="margin-top:3px;">Broadcasts <span style="background-color:#19A3D1;" class="badge"></span></div>
									</div>
									
									<div class="row" style="cursor:pointer;">
										<div class="col-sm-2" style="background-image:url('img/icons/Dollar-Coin.png');background-size:20px 20px;background-repeat:no-repeat;height:20px;width:20px;"></div>
										<div class="col-sm-8 col-sm-offset-2 btn-xs" style="margin-top:5px;"> <a href="ads.php" style="text-align:left;font-style:oblique;color:black;">Ads</a></div>
									</div>
									
									<div class="row" style="cursor:pointer;">
										<div class="col-sm-2" style="background-image:url('home/img/icons/Shopping-Bag.png');background-size:20px 20px;background-repeat:no-repeat;height:20px;width:20px;"></div>
										<div class="col-sm-8 col-sm-offset-2 btn-xs" style="margin-top:5px;"> <a href="products.php" style="text-align:left;font-style:oblique;color:black;">Go shopping</a></div>
									</div>
									
									<div class="row" style="cursor:pointer;">
										<div class="col-sm-2" style="background-image:url('img/icons/Contacts.png');background-size:20px 20px;background-repeat:no-repeat;height:20px;width:20px;"></div>
										<div class="col-sm-8 col-sm-offset-2 btn-xs" style="margin-top:5px;"><a href="friends.php" style="text-align:left;font-style:oblique;color:black;">Friends</a></div>
									</div>
									
									<div class="row" style="cursor:pointer;">
										<div class="col-sm-2" style="background-image:url('img/icons/Building.png');background-size:20px 20px;background-repeat:no-repeat;height:20px;width:20px;"></div>
										<div class="col-sm-8 col-sm-offset-2 btn-xs" style="margin-top:5px"> <a href="companies.php" style="text-align:left;font-style:oblique;color:black;">Companies</a></div>
									</div>
							
								</div>
							
							</div>
						   
							<br>
							
					</div>
					
					<div id="center" class="col-sm-6" >
                             
						    <div  id="center-main" style="margin-left:4%;" >
	                              
						
						    </div>
						    
						
						    <div id="loader" class="loader loader2 col-sm-offset-3" style="margin-top:40%">
						      <center>
							        <div class="throbber-loader">
                                       
                                    </div>
                                </center>
                            </div>
						
					    </div>
					
					<div id="right" class="col-sm-3" >
						
						<div class="panel" style="border-color:white;">
							<div class="panel-heading" style="background-color:white;color:#004A6E;"><h5>Suggested companies to follow</h5></div>
							<div id="suggestions" class="panel-body">
								
								
							</div>
							<center style="color:#008AB8;"><a href="companies.php">view more</a></center>
							 
						</div>
					</div>
					
				</div>
				
		</div>
	</body>	
    
</html>
