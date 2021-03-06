<?php
require 'session.php';
init();

customer_restricted();
aunthenticate();
//phpinfo();

?>

<html>

	<head>
		<title> companies</title>
		<link rel="icon" href="img/fav2.png"/>
		<meta name="viewport" content="width=1024">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="home/css/font-awesome.min.css">
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="http://css-spinners.com/css/spinners.css" type="text/css">
		<link href="home/css/myshops.css" rel="stylesheet">
        <link href="./menu_files/style-24.css" rel="stylesheet">
		<link rel="stylesheet" href="home/css/loader.css">
        <link href="home/css/main.css" rel="stylesheet">
        <link href="./companies_files/style-142.css" rel="stylesheet">
        <link href="home/css/animate.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
		<script type="text/javascript" src="home/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="home/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="home/js/constants.js"></script>
		<script type="text/javascript" src="home/js/navigation-drawer.js"></script>
		<script type="text/javascript" src="home/js/companies.js"></script>
        <script type="text/javascript" src="home/js/suggestions.js"></script>
        <script type="text/javascript" src="home/js/bootstrap-notify.min.js"></script>
		
	</head>
	
	<!-- <body onload ="buildCompanyPage()" style="background-image:url(https://s3.eu-central-1.amazonaws.com/userinterface-scripts/Scripts/img/cloud.png);background-size:cover;background-repeat:no-repeat;background-attachment:fixed;overflow-y:auto;"> -->
		<body onload ="buildCompanyPage()" style="background-color:#F2F2F2;">
		<div id="nav" class="navbar-fixed-top" >
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-sm-2">
						<div class="col-sm-2">
							<a href="index.php"><img src="img/log3.png" height="50"/></a>
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
		<br><br><br>
        <?php 
            echo nav_drawer();
		    echo create_ad();
		    echo edit_account_modal();
	        echo ad_detail();
        ?>
		
		<br>
		<div class="container-fluid" style="height:91%;">
			
			<!--<div class="row col-sm-offset-1 col-sm-10">
				<div id="loader" class="loader loader2 col-sm-offset-3" style="margin-top:25%">
						  <center>
							        <div class="throbber-loader">
                                       
                                    </div>
                              </center>
				</div> -->
            <div class="row">
                <div class="col-sm-2">
                    <div class="panel-group category-products" id="accordian" style="background-color:"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a class="active" data-toggle="tab" href="#recommend">Recommended</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" onclick="pull_companies_followed()">
									<h4 class="panel-title"><a data-toggle="tab" href="#following">Following</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#categories">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Categories
										</a>
									</h4>
								</div>
								<div id="categories" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											
                                            <li ><a data-toggle="tab" href="#category">Top Trending</a></li>
										    <li><a>Recommended</a></li>
										    <li ><a>Clothing and fashion</a></li>
										    <li ><a>Consumer Electronics</a></li>
										    <li ><a>Groceries</a></li>
										    <li ><a>Banking and Insurance</a></li>
										    <li ><a>Automotive</a></li>
										    <li ><a>Sports and Entertainment</a></li>
										    <li ><a>Health</a></li>
										    <li ><a>Home and Gardening</a></li>
										    <li ><a>Travel</a></li>
										    <li ><a>Education</a></li>
											
										</ul>
									</div>
								</div>
							</div>

                            <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#area">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Location
										</a>
									</h4>
								</div>
								<div id="area" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
                                            <li ><a data-toggle="tab" href="#location">Gauteng</a></li>
										    <li><a>Western Cape</a></li>
										    <li ><a>Limpopo</a></li>
										    <li ><a>Mpumalanga</a></li>
										    <li ><a>Kwazulu Natal</a></li>
										    <li ><a>North West</a></li>
										    <li ><a>Eastern Cape</a></li>
										    <li ><a>Northen Cape</a></li>
										    <li ><a>Free State</a></li>
										</ul>
									</div>
								</div>
							</div>    

							
						</div><!--/category- products-->
                
                </div>


                <div class="col-sm-10">
                   <div class="ui-142">
			        <div class="tab-content" >
				        <div class="row tab-pane fade in active" id="recommend">
					        
				        </div>
                        <div class="row tab-pane fade" id="following">
					        
				        </div>
                        <div class="row tab-pane fade" id="category">
					       
				        </div>
                        <div class="row tab-pane fade" id="location">
					        
				        </div>
			        </div>	
		        </div>
		        <!-- UI - X Ends -->
            </div>
        </div>
						
			
				
		</div>
    </div>
		
		
	</body>
	
	
</html>

