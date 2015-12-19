<?php
require 'session.php';
init();
company_restricted();
aunthenticate();
?>

<html>

	<head>
		<title>Home</title>
		<link rel="icon" href="/img/log3.png"/>
		<meta name="viewport" content="width=1024">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://d2zpmorlxdsejy.cloudfront.net/Scripts/css/loader.css">
        <link rel ="stylesheet" href="home/css/services.css" type="text/css">
		<link href="home/css/myshops.css" rel="stylesheet">
        <link href="./menu_files/style-24.css" rel="stylesheet">
        <link href="bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
        <link href="home/css/main.cs" rel="stylesheet">
        <link href="home/css/animate.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
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
	</head>
	
	<!-- <body onload="main_init()" style="background-image:url(https://s3.eu-central-1.amazonaws.com/userinterface-scripts/Scripts/img/cloud.png);background-size:cover;background-repeat:no-repeat;background-attachment:fixed;">> -->
		<body onload="init_company()" style="background-color:#F2F2F2;overflow-y:auto;">
		<div id="nav" class="navbar-fixed-top">
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-sm-2">
						<div class="col-sm-2">
							<a href="home.php"><img src="https://s3.eu-central-1.amazonaws.com/userinterface-scripts/Scripts/img/log3.png" height="50" width="50"/></a>
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
		
		
		<div id="wall" class="wall" style="background-image:url('img/bk-freeze-ga.jpg');z-index:1;position:absolute;height:320px;background-size: cover;">
			
		</div>
        <span data-toggle="tooltip" title="change wallpaper" class="glyphicon glyphicon-edit pictures" style="cursor:pointer; position: absolute; margin-left: 15px; margin-top: 100px;z-index: 2; font-size: 18px; color: white;"></span>
        <input class="filechooser" type="file" id="wall-pic" name="pic1" style="display:none" onchange="change_wall(this,'wall');" accept="image/*"/>
		
		
        <div style="cursor:pointer; background-color:white;height:170px;width:170px;border-radius:4px;margin-top:180px;position:absolute;margin-left:100px;border-color:white;border-width:5px;border-style:solid;z-index:2;">
            <img data-toggle="tooltip" title="change profile picture" id="profile-pic" class="pictures" src="img/companyprof.png" height="160" width="160" accept="image/gif, image/jpeg, image/png" />
			<input class="filechooser" type="file" id="prof-pic" name="pic1" style="display:none" onchange="readURL(this,'profile-pic');" accept="image/*" />
		</div>
        <div style="margin-top:155px;position:absolute;margin-left:350px;z-index:2;">
			<h3 id="name" data-type="text" data-pk="1" data-title="Enter Company Name" style="color: #F2F2F2 "></h3>
            <h5 id="categories" data-type="text" data-pk="1" data-title="Enter Categories" style="color: #F2F2F2 " ><span class="glyphicon glyphicon-tag"></span>Categories</h5>
            <h5 id="email" data-type="text" data-pk="1" data-title="Enter email address" style="color: #F2F2F2 " ><span class="glyphicon glyphicon-envelope"></span>info@example.com</h5>
            <h5 id="contact" data-type="text" data-pk="1" data-title="Enter telephone number" style="color: #F2F2F2 "><span class="glyphicon glyphicon-earphone"></span>+277 123 456</h5>
            <h5 id="website" data-type="text" data-pk="1" data-title="Enter website url" style="color: #F2F2F2 "><span class=" glyphicon glyphicon-link"></span>ww.example.com</h5>
		</div>
		<div  id="header" style="height:50px;width:100%;position:absolute;z-index:1;margin-top:320px;background-color:white;">
			<div >
				<div class="col-sm-offset-2 col-sm-2" align="right">
					<center class="tab" ><h4 data-toggle="tab" href="#about">About us</h4></center>
				</div>
				<div class="col-sm-2">
					<center class="active_tab tab active"><h4 data-toggle="tab" href="#broadcasts">Broadcasts</h4></center>
				</div>
				<div class="col-sm-2">
					<center class="tab"><h4 data-toggle="tab" href="#services">Services</h4> </center>
				</div>
				<div class="col-sm-2">
					<center class="tab"><h4>Online Shop</h4> </center>
				</div>
				<div class="col-sm-2">
					<center><button class="btn  btn-md" style="margin-top:3px;background-color: #004A6E;color:white;">following</button></center>
				</div>
			
			</div>
		</div>
        <br><br>
        <?php 
            echo nav_drawer_company();
		    echo create_ad();
		    echo edit_account_modal();
	        echo ad_detail();
        ?>	
        <div class="tab-content">
		    <div id="about" class="tab-pane fade" style="margin-top:350px;">

                <div class="col-sm-3">
                    <div class="panel-group category-products" id="accordian" style="margin-top: 7px;"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a >Branche 1</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a >Branche 2</a></h4>
								</div>
							</div>
							
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a >Branch 3</a></h4>
								</div>
							</div>
							
							
							
						</div><!--/category- products-->
                </div>
                <div class="col-offset-1 col-sm-8">
                    <div style="background-color:white;width:600px;border-radius: 2px;">
                        <h4 align="center">who we are?</h4>
                        <hr>
                        <p>We are a very good company serving people throught the country</p>
                    </div>
                    
                    <div style="background-color:white;width:600px;border-radius: 2px;">
                        <h4 align="center">Category</h4>
                        <hr>
                        <p>clothing store </p>
                    </div>
                  
                    <div style="background-color:white;width:600px;border-radius: 2px;">
                        <h4 align="center">Hours</h4>
                        <hr>
                        <p> Monday <i>08:00 - 17:00</i> </p>
                        <p> Tuesday <i>08:00 - 17:00</i> </p>
                        <p> Wednesday <i>08:00 - 17:00</i> </p>
                        <p> Thursday <i>08:00 - 17:00</i> </p>
                        <p> Friday <i>08:00 - 16:00</i> </p>

                    </div>
                    
                    <div  style="background-color:white;width:600px;border-radius: 2px;">
                        <h4 align="center">Links</h4>
                        <hr>
                        <a href="https://www.mrp.com">www.mrp.com</a>
                    </div>
                    
                    <div style="background-color:white;width:600px;border-radius: 2px;">
                        <h4 align="center">Address</h4>
                        <hr>
                        <p>5 Hope road, Rosebank, Cape Town, 7700</p>
                    </div>
                    

                </div>

            </div>

		    <div id="broadcasts" class="tab-pane fade in  active" style="width:100%;margin-top:290px;position:absolute;overflow-y:auto;">
			    <div  style="margin-top:5%;">
				    <div class="col-sm-4" id="left" style="width:400px; height:10px;">
					   
				    </div>
				    <div class="col-sm-5" >
                        <?php 
                            echo post_interface();
                        ?>
                        <br>
					    <div id="loader" class="loader loader2 col-sm-offset-3" style="margin-top:40%">
						      <center>
							        <div class="throbber-loader">
                                       
                                    </div>
                              </center>
					    </div>
					    <div  id="center-main">
						
					    </div>
					
				    </div>
				    <div class="col-sm-3" id="right">
					    
				    </div>
			    </div>


		
		    </div>
            

            <div id="services" class="tab-pane fade" style="width:100%;margin-top:290px;position:absolute;overflow-y:auto;">
			    <div  style="margin-top:5%;">
				    
                    <div class="ui-249">
		
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<!-- Item -->
						<div class="item">
							<!-- Icon -->
							<div class="icon">
								<!-- Icon -->
								<a><i class="fa fa-ils bg-red"></i></a>
							</div>
							<!-- Content -->
							<div class="details">
								<!-- Heading -->
								<h3><a>Web Designing</a></h3>
								<!-- Para -->
								<p>this is our first service</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<!-- Item -->
						<div class="item">
							<!-- Icon -->
							<div class="icon">
								<!-- Icon -->
								<a><i class="fa fa-desktop bg-green"></i></a>
							</div>
							<!-- Content -->
							<div class="details">
								<!-- Heading -->
								<h3><a>Graphic Designing</a></h3>
								<!-- Para -->
								<p>our second servics</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<!-- Item -->
						<div class="item">
							<!-- Icon -->
							<div class="icon">
								<!-- Icon -->
								<a><i class="fa fa-cloud bg-lblue"></i></a>
							</div>
							<!-- Content -->
							<div class="details">
								<!-- Heading -->
								<h3><a>PHP Scripts</a></h3>
								<!-- Para -->
								<p>We love our services</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<!-- Item -->
						<div class="item">
							<!-- Icon -->
							<div class="icon">
								<!-- Icon -->
								<a ><i class="fa fa-gift bg-blue"></i></a>
							</div>
							<!-- Content -->
							<div class="details">
								<!-- Heading -->
								<h3><a>Java Apps</a></h3>
								<!-- Para -->
								<p>we love our services</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<!-- Item -->
						<div class="item">
							<!-- Icon -->
							<div class="icon">
								<!-- Icon -->
								<a><i class="fa fa-code bg-orange"></i></a>
							</div>
							<!-- Content -->
							<div class="details">
								<!-- Heading -->
								<h3><a>iOS Apps</a></h3>
								<!-- Para -->
								<p>our services are too good please</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<!-- Item -->
						<div class="item">
							<!-- Icon -->
							<div class="icon">
								<!-- Icon -->
								<a><i class="fa fa-bug bg-yellow"></i></a>
							</div>
							<!-- Content -->
							<div class="details">
								<!-- Heading -->
								<h3><a>Android Apps</a></h3>
								<!-- Para -->
								<p>you will definitely love our services</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<!-- Item -->
						<div class="item">
							<!-- Icon -->
							<div class="icon">
								<!-- Icon -->
								<a><i class="fa fa-bullhorn bg-rose"></i></a>
							</div>
							<!-- Content -->
							<div class="details">
								<!-- Heading -->
								<h3><a>Game Engine</a></h3>
								<!-- Para -->
								<p>we have perfect services</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<!-- Item -->
						<div class="item">
							<!-- Icon -->
							<div class="icon">
								<!-- Icon -->
								<a><i class="fa fa-automobile bg-purple"></i></a>
							</div>
							<!-- Content -->
							<div class="details">
								<!-- Heading -->
								<h3><a>Web Development</a></h3>
								<!-- Para -->
								<p>The best service you will ever see in your lifetime</p>
							</div>
						</div>
					</div>
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