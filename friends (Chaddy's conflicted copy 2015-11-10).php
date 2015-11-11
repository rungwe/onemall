<?php
require 'session.php';
init();


aunthenticate();
//phpinfo();

?>

<html>

	<head>
		<title> friends</title>
		<link rel="icon" href="https://d2zpmorlxdsejy.cloudfront.net/Scripts/img/log3.png"/>
		<meta name="viewport" content="width=1024">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://d2zpmorlxdsejy.cloudfront.net/Scripts/css/font-awesome.min.css">
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="http://css-spinners.com/css/spinners.css" type="text/css">
		<link href="home/css/myshops.css" rel="stylesheet">
        <link href="./menu_files/style-24.css" rel="stylesheet">
        <link href="home/css/main.css" rel="stylesheet">
		<link rel="stylesheet" href="https://d2zpmorlxdsejy.cloudfront.net/Scripts/css/loader.css">
		<script type="text/javascript" src="https://d2zpmorlxdsejy.cloudfront.net/Scripts/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="https://d2zpmorlxdsejy.cloudfront.net/Scripts/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="home/js/constants.js"></script>
		<script type="text/javascript" src="home/js/navigation-drawer.js"></script>
		<script type="text/javascript" src="home/js/friends.js"></script>
		
	</head>
	
	
		<body onload="friends_init()" style="background-color:#F2F2F2;">
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
							  <input type="text" class="form-control" placeholder="Search for friends">
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
		<br><br><br>
        <?php 
            echo nav_drawer();
		    echo create_ad();
		    echo edit_account_modal();
	        echo ad_detail();
        ?>
		
		<br>
		<div class="container-fluid" style="height:91%;">

            <div class="row">
               
                <div class="col-sm-3">
                        <div class="panel-group category-products" id="accordian" style="background-color:"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Recommended friends</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">My Friends</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Friend requests</a></h4>
								</div>
							</div>
                            <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Blocked friends</a></h4>
								</div>
							</div>
							
						</div><!--/category- products-->
                </div>     
            
            
			    <div class="col-sm-9" id="friends">
				    <div id="loader" class="loader loader2 col-sm-offset-3" style="margin-top:25%">
						    <div align="center" class="throbber-loader">
                                       
                            </div>  
				    </div>
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
	
</html>

