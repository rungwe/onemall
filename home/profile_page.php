
<html>

	<head>
		<title> Mr Price</title>
		<link rel="icon" href="img/log3.png"/>
		<meta name="viewport" content="width=1024">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/loader.css">
		<link href="css/myshops.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/constants.js"></script>
		<script type="text/javascript" src="js/like.js"></script>
		<script type="text/javascript" src="js/broadcasts.js"></script>
		<script type="text/javascript" src="js/suggestions.js"></script>
		<script type="text/javascript" src="js/friends.js"></script>
		<script type="text/javascript" src="js/comment.js"></script>
		<script type="text/javascript" src="js/companies.js"></script>
		<script type="text/javascript" src="js/main_init.js"></script>	
	</head>
	
	<!-- <body onload="main_init()" style="background-image:url(img/cloud.png);background-size:cover;background-repeat:no-repeat;background-attachment:fixed;">> -->
		<body onload="main_init()" style="background-color:#F2F2F2;overflow-y:auto;">
		<div id="nav" class="navbar-fixed-top">
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-sm-2">
						<div class="col-sm-2">
							<a href="index.php"><img src="img/log3.png" height="50" width="50"/></a>
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
								
							<li onclick="main_init()" style="color:white;font-weight:900;font-size:150%;margin-top:15px;"><span class="glyphicon glyphicon-home" ><label style="font-size:13px;">&nbsp;Home&nbsp;</label></span></li>
							<!--<li style="color:white;font-weight:900;font-size:150%;margin-top:15px;"><span class="glyphicon glyphicon-bell" ><label style="font-size:13px;">&nbsp;Notifications&nbsp;</label></span></li> -->
							
							<li style="cursor:pointer;"><span class="input-group" style="color:white;font-weight:900;font-size:150%;margin-top:15px;">
																												<span class="glyphicon glyphicon-lock dropdown-toggle"  id="account" data-toggle="dropdown" aria-expanded="true"><label style="font-size:13px;">&nbsp;Account</label></span>
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
		
		
		<div class="wall" style="background-image:url('img/mrpricewall.jpg');z-index:1;position:absolute;">
			
		</div>
		
		<div style="background-color:#004A6E;height:170px;width:170px;border-radius:4px;margin-top:280px;position:absolute;margin-left:100px;border-color:white;border-width:5px;border-style:solid;z-index:2;">
			<img src="img/mrlog1.jpg" height="160" width="160" />
		</div>
		<div  id="header" style="height:50px;width:100%;position:absolute;z-index:1;margin-top:400px;background-color:white;">
			<div >
				<div class="col-sm-offset-3 col-sm-2" align="right">
					<center class="active_tab tab" style="width:auto;"><b>About us</b>&nbsp;<span style="background-color:#19A3D1;" class="badge">117</span></center>
				</div>
				<div class="col-sm-1">
					<center class="tab"><b>Broadcasts</b> </center>
				</div>
				<div class="col-sm-2">
					<center class="tab"><b>Products and Services</b> </center>
				</div>
				<div class="col-sm-2">
					<center class="tab"><b>Live Community</b> </center>
				</div>
				<div class="col-sm-2">
					<center class="tab"><button class="btn btn-info btn-md" style="margin-top:3px;">following</button></center>
				</div>
			
			</div>
		</div>
		
		<div id="content" style="width:100%;margin-top:400px;position:absolute;overflow-y:auto;">
			<div  style="margin-top:5%;">
				<div class="col-sm-4" id="left">
					<div style="background-color:white;border-radius:5px;border: 2px solid #004A6E;;">
					<center style="font-size:17px;font-style:oblique;color:black;font-weight:900;font-style:oblique;"><span class="" style="color:blue;"></span>&nbsp;<h4>Mr Price@mowbray</h4></center>
					<br>
					<p style="color:#336699;">"Passion, value and Partnership. Your satisfaction is our priority. Feel at Home our dear customers"</p>
					<p style="margin-left:5px;font-style:oblique;color:#336699;"><b>category:</b>&nbsp; clothing and fashion</p>
					<center><button class="btn btn-info btn-md" style="margin-left:5px;"><span class="glyphicon glyphicon-send"></span>&nbsp; post to Mr Price live chat</button></center>
					<p style="margin-left:5px;font-size:15px;color:blue;cursor:pointer;"><span class="glyphicon glyphicon-link"></span>&nbsp;&nbsp;www.mr.co.za</p>
					<p style="margin-left:5px;font-size:15px;color:blue;cursor:pointer;"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;&nbsp;+27 021 019 787 1264</p>
					<p style="margin-left:5px;font-size:15px;color:blue;cursor:pointer;"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;info@mr.co.za</p>
					<p style="margin-left:5px;font-size:15px;color:blue;cursor:pointer;"><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;directions</p>
					</div>
				</div>
				<div class="col-sm-5" id="center-main" >
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
					<div  id="center-main">
						
					</div>
					
				</div>
				<div class="col-sm-3" id="right">
					<div class="panel panel-primary" >
							<div class="panel-heading" style="background-color:#004A6E;">Suggested companies to follow</div>
							<div id="suggestions" class="panel-body">
								
								
							</div>
							<center style="color:#008AB8;"><a href="shops.php">view more</a></center>
					</div>
					<div style="background-color:white;height:300px;width:100%;border-radius:5px;">
		
					</div>
				</div>
			</div>
		
		</div>
		<?php
			require 'components.php';
			echo edit_account_modal();
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