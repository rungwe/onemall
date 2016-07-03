<?php
require 'session.php';
init();
company_restricted();
aunthenticate();
?>

<html>

	<head>
		<title>Home</title>
		<link rel="icon" href="img/log3.png"/>
		<meta name="viewport" content="width=1024">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="home/css/loader.css">
        <link rel ="stylesheet" href="home/css/services.css" type="text/css">
		<link href="home/css/myshops.css" rel="stylesheet">
        <link href="./menu_files/style-24.css" rel="stylesheet">
        <link href="bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
        
        <link href="home/css/animate.css" rel="stylesheet">
		<script src="home/js/jquery-2.1.3.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="home/js/constants.js"></script>
        <script type="text/javascript" src="home/js/navigation-drawer.js"></script>
        <script type="text/javascript" src="home/js/company_home.js"></script>
		<script type="text/javascript" src="home/js/like.js"></script>
		<script type="text/javascript" src="home/js/broadcasts.js"></script>
		<script type="text/javascript" src="home/js/friends.js"></script>
		<script type="text/javascript" src="home/js/comment.js"></script>
		<script type="text/javascript" src="home/js/companies.js"></script>
		<script type="text/javascript" src="home/js/main_init.js"></script>	
        <script src="bootstrap3-editable/js/bootstrap-editable.js"></script>
        <script type="text/javascript" src="home/js/bootstrap-notify.min.js"></script>
        <script type="text/javascript" src="home/js/croppic.js"></script>
	</head>
	
	<!-- <body onload="main_init()" style="background-image:url(https://s3.eu-central-1.amazonaws.com/userinterface-scripts/Scripts/img/cloud.png);background-size:cover;background-repeat:no-repeat;background-attachment:fixed;">> -->
		<body onload="init_company()" style="background-color:#F2F2F2;overflow-y:auto;">
		<div id="nav" class="navbar-fixed-top">
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-sm-2">
						<div class="col-sm-2">
							<a href="home.php"><img src="img/log3.png" height="50px" width="50px"/></a>
						</div>
					</div>
					
						
						<div class="col-sm-offset-1 col-sm-4">
							
								<div class="input-group" style="margin-top:3%;width:150%;">
								  <input type="text" class="form-control" placeholder="Search for Broadcasts in Mr Price">
								  <span class="input-group-btn">
									
									<button class="btn btn-default" type="button">search</button>
			
								  </span>
								  
								  
								</div><!-- /input-group -->
							
						</div>
						
						<div id="nav_content" style="margin-right:3%;">
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
		
		
		
        <br><br>
        <?php 
            echo nav_drawer_company();
		    echo create_ad();
		    echo edit_account_modal();
	        echo ad_detail();
            echo post_broadcast();
        ?>	
        
						
					   



         </body>
	
	<script>
			$(document).ready(function(){
	
				$(".tab").click(function(){
					$(".tab").removeClass("active_tab");
					$(this).addClass("active_tab");
				});
			});
			
	</script>

</html>