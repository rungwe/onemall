
<html>

	<head>
		<title> one mall</title>
		<link rel="icon" href="img/log3.png"/>
		<meta name="viewport" content="width=1024">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/loader.css">
		<link href="css/myshops.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
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
								
							<li onclick="Home()" style="color:white;font-weight:900;font-size:150%;margin-top:15px;"><span class="glyphicon glyphicon-home"><label style="font-size:13px;">&nbsp;Home&nbsp;</label></span></li>
							<li style="color:white;font-weight:900;font-size:150%;margin-top:15px;"><span class="glyphicon glyphicon-bell" ><label style="font-size:13px;">&nbsp;Notifications&nbsp;</label></span></li>
							
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
			
		</div> <!-- navabar end -->
		
		<div class="container pos" style="height:91%;margin-top:5%;">
			<div id="drawer"class="row" style="position:fixed;z-index:3;left:0px;">
			<div class="col-sm-4" id="drawer-content" style="border:2px solid #004A6E; width:250px;background-color:white;position:fixed;z-index:3;margin:0px;padding:0px;">
				<div style="background-image:url('img/bk-freeze-ga.jpg');height:150;width:100%;margin:0px;background-size:cover;">
				
				</div>
				<div class="menu row">
					<div class="col-sm-2">
						<img src="img/icons/Home.png" height="30" width="30">
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<h4 id="homemenu">Home</h4>
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
				<br>
				<br>
			</div>
			<div class="col-sm-2 pull-right" id="control" style="cursor:pointer;border:2px solid #004A6E;width:45px;height:45px;background-color:white;position:fixed;z-index:3;margin-left:250px;">
				<span class="glyphicon glyphicon-align-justify  btn-lg" style="margin-left:-19px;color:#004A6E"></span>
			</div>
		</div>
			<div id="edit_ac" class="modal fade">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="row col-sm-offset-4" style="cursor:pointer;">
						<div class="col-sm-2" style="background-image:url('img/edit.png');background-size:25px 25px;background-repeat:no-repeat;height:30px;width:30px;background-size:cover;"></div>
						<div class="col-sm-10" >Edit Account</div>
					</div>
				  </div>
				  <div class="modal-body">
						<div class="row">
							<div class="col-sm-2">
								<img src="img/profile.png" height="80" width="80"/>
								 
							</div>
							<div class="col-sm-3">
							  <div class="form-group"
								<label for="exampleInputFile">upload pic</label>
								<input type="file" id="profile_pic">
								
							  </div>
							</div>
							<div class="col-sm-offset-2 col-sm-5">
								<div class="form-group">
									<label for="exampleInputEmail1">username</label>
									<input type="text" class="form-control" id="username" value="chaddy">
								</div>
							</div>
							
						</div>
						<button type="button" class="btn btn-primary pull-right">update</button>
						<br>
						<hr/>
						<form>
						 <div class="row">
							<div class="col-sm-6">
								<div class="form-group">
										<label for="new_pass">new password</label>
										<input type="password" class="form-control" id="new_pass" style="width:80%;">
									</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
										<label for="conf_new" style="text-align:right;">confirm new password</label>
										<input type="password" class="form-control  pull-right" id="conf_new" style="width:80%;">
									</div>
							</div>
						 </div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
										<label for="pass">old password</label>
										<input type="password" class="form-control" id="pass" style="width:80%;">
									</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<button type="button" class="btn btn-primary pull-right" style="margin-top:10%;">change password</button>
								</div>
							</div>
						</div>
						</form>
						<hr/>
						<form>
							<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
										<label for="email">email</label>
										<input type="email" class="form-control" id="email" value="kumbirair@yahoo.com" style="width:80%;">
									</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
										<label for="conf_new" style="text-align:right;">phone number</label>
										<input type="text" class="form-control  pull-right" id="phone" value="0603886630" style="width:80%;">
									</div>
							</div>
						<div class="form-group">
									<button type="button" class="btn btn-primary pull-right" style="margin-top:2%;">update</button>
								</div>
						 </div>
						 
						</form>
						<hr/>
						<form>
							<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
										<label for="email">country</label>
										<input type="email" class="form-control" id="country"  style="width:80%;">
									</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group" style="margin-top:7%;">
										<label for="conf_new" style="text-align:right;">state</label>
										<input type="text" class="form-control  pull-right" id="state"  style="width:80%;">
									</div>
							</div>
						<div class="form-group">
									<button type="button" class="btn btn-primary pull-right" style="margin-top:2%;">update</button>
								</div>
						 </div>
						 
						</form>
						
					
				  </div>
				  
				</div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			
			
			<div id="create_ad" class="modal fade">
			
			  <div class="modal-dialog">
				<div class="modal-content" >
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="col-sm-offset-4 row" style="cursor:pointer;">
						<div class="col-sm-2" style="background-image:url('img/ads.png');background-size:30px 30px;background-repeat:no-repeat;height:30px;width:30px;background-size:cover;"></div>
						<div class="col-sm-10 btn-xs" style="margin-top:5px;">Create Ads</div>
					</div>
				  </div>
				  <form id="ad_form" action="" method="" enctype="multipart/form-data">
				  <div id="ads_success" class="modal-body" style="display:none">
					<center style='color:blue'>Thank you :) <br> your ad has been placed successfully</center>
				  </div>
				  <div id="ads_success" class="modal-body" style="display:none">
					<center style='color:blue'>Thank you :) <br> your ad has been placed successfully</center>
				  </div>
				  <div id="ads_error" class="modal-body" style="display:none">
					<center style='color:red'>Sorry ): <br> your ad has not been placed successfully, you might have run out of credits for ads <br> You can buy more ad credits and continue</center>
				  </div>
				  <div id="ads_body" class="modal-body">
					
						<div class="row">
							<center id="ad_error" style="color:red"></center>
							<div class="col-sm-6">
								<div class="form-group">
										<label for="ad_title">title:</label>
										<input type="text" class="form-control" id="ad_title" name="title" style="width:80%;" required>
									</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								  <label for="category">category:</label>
								  <select class="form-control" id="ad_category" name="category">
									<option>Please select</option>
									<option>clothing</option>
									<option>beauty and therapy</option>
									<option>sports and leisure</option>
									<option>jewellery</option>
									<option>home and garden</option>
									<option>baby and kids</option>
									<option>pets</option>
									<option>beauty and therapy</option>
									<option>mobile phones</option>
									<option>computers</option>
									<option>other electronic</option>
									<option>vehicles</option>
									<option>business equipment</option>
									<option>services</option>
								  </select>
								</div>
							</div>
						</div>
						
						 <div class="form-group">
						  <label for="info">product information:</label>
						  <textarea class="form-control" rows="2" id="ad_info" name="product_info" maxlength="150" style="resize:none;" required></textarea>
						</div>
						<br>
						<label>upload images:</label>
						<div class="row">
							<div class="col-sm-4">
								<img id="pic1" class="ad_pictures" style="cursor:pointer;border:2px solid black;" src="img/icons/Camera.png" width="120" height="120" accept="image/gif, image/jpeg, image/png" />
								<input class="filechooser" type="file" id="ad_pic1" name="pic1" style="display:none" onchange="readURL(this,'pic1');" />
							</div>
							<div class="col-sm-4">
								<img id="pic2" class="ad_pictures" style="cursor:pointer;border:2px solid black;" src="img/icons/Camera.png" width="120" height="120" accept="image/gif, image/jpeg, image/png" />
								<input class="filechooser" type="file" id="ad_pic2" name="pic2" style="display:none" onchange="readURL(this,'pic2');" />
							</div>
							<div class="col-sm-4">
								<img id="pic3" class="ad_pictures" style="cursor:pointer;border:2px solid black;" src="img/icons/Camera.png" width="120" height="120" accept="image/gif, image/jpeg, image/png" />
								<input class="filechooser" type="file" id="ad_pic2" name="pic3" style="display:none" onchange="readURL(this,'pic3');" />
							</div>
						</div>
						<br>
						<div class="row">
							
							  <label class="checkbox-inline"><input type="checkbox" value="checked">show phone number</label>
							  <label class="checkbox-inline"><input type="checkbox" value="">receive email notification</label>
							
						</div>
						
						
				  </div>
				  <div id="footer_ads" class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>
					<button id="ad_submit" type="submit" class="btn btn-primary" >post Ad</button>
				  </div>
				  <div id="footer_success" class="modal-footer" style="display:none">
					<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>
					<button id="repost" type="button" class="btn btn-primary" >post another ad</button>
				  </div>
				  <div id="footer_error" class="modal-footer" style="display:none">
					<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>
					<button id="retry" type="button" class="btn btn-primary">retry</button>
				  </div>
				  </form>
				</div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			  
			</div><!-- /.modal -->
				
				<div id="content">
					
					<div id="left" class="col-sm-3">
					
							<div style="background-color:white;margin-left:-50px;">
								
								<div style="background-color:#004A6E;height:150px;width:279px;border-radius:2px;z-index:1;position:absolute;">
								
								</div>
								<div style="background-color:#004A6E;height:80px;width:80px;border-radius:2px;position:absolute;margin-top:60px;margin-left:40px;border-color:white;border-width:5px;border-style:solid;z-index:2;">
									<img src="img/camera3.png" height="40" width="40" style="margin-left:15px;margin-top:15px;">
								</div>
								<div style="background-color:white;width:279px;border-radius:2px;z-index:1;position:absolute;margin-top:100px;">
									<label style="margin-left:50%;font-size:100%;"><b>Chaddy</b></label>
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
									
									<div class="row" onclick="show_friends()" style="cursor:pointer;">
										<div class="col-sm-2" style="background-image:url('img/icons/Contacts.png');background-size:20px 20px;background-repeat:no-repeat;height:20px;width:20px;"></div>
										<div class="col-sm-10 btn-xs" style="margin-top:5px;">Buddies</div>
									</div>
									
									<!-- <div class="row" style="cursor:pointer;">
										<div class="col-sm-2" style="background-image:url('img/notify.png');background-size:20px 20px;background-repeat:no-repeat;height:20px;width:20px;"></div>
										<div class="col-sm-10 btn-xs" style="margin-top:5px;">Notify me</div>
									</div> -->
									
								
									<div class="row" style="cursor:pointer;" data-toggle="modal" data-target="#create_ad" onclick="setup_adCreate()" >
										<div class="col-sm-2" style="background-image:url('img/icons/Pencil.png');background-size:20px 20px;background-repeat:no-repeat;height:20px;width:20px;"></div>
										<div class="col-sm-10 btn-xs" style="margin-top:5px;">Create Ads</div>
									</div>
									
									<div class="row" style="cursor:pointer;">
										<div class="col-sm-2" style="background-image:url('img/icons/Building.png');background-size:20px 20px;background-repeat:no-repeat;height:20px;width:20px;"></div>
										<div class="col-sm-10 btn-xs" style="margin-top:5px"> <a href="shops.php" style="text-align:left;font-style:oblique;color:black;">Companies</a></div>
									</div>
							
								</div>
							
							</div>
						   
							<br>
							
					</div>
					
					<div id="center" class="col-sm-6" >
						<div  id="center-main" style="margin-left:4%;" >
							<!-- <div id="adcenter" style="margin-left:6px;margin-right:0px;">
							<div class="row" style="margin:0px;">
								<div class="col-sm-2">
									<img src="img/Koala.jpg" height="53" width="50" style="border:1px solid #004A6E;"/>
								</div>
								<div class="col-sm-6">
									<div class="panel" style="background-color:white;width:400px;left:0px">
										<div class="panel-body" style="margin-bottom:-5px">
										
											<div class="row">
											<div class="col-sm-5">
												<p><b>Dejan Rungwe</a></b></p>
											</div>
											<div class="col-sm-offset-3 col-sm-2">
												<span class="glyphicon glyphicon-earphone call" style="color:green"></span>
											</div>
											<div class="col-sm-2">
												<span class="glyphicon glyphicon-envelope email" style="color:gold"></span>
											</div>
											</div>
											<p style="color:grey;margin-left:0px;">@46min</p>
											<hr>
											<p> 
											I am selling Mercedes Benz C200,it is in a good condition, 2014 brand. It has full services history and It has been owned by 1 owner, I am selling it at a good price, its slightly negotiable.
											</p>
											<img src="img/benz.jpg" height="248" width="370"/>
											<p style="color:gray;"> category: automotive</p>
											<div class="row">
												<p class="col-sm-8" style="color:gray;"> tags: benz, C200, Mercedes</p>
												<button class="btn btn-xs col-sm-offset-1 col-sm-3">view more</button>
											</div>
											<center style="font-size:10px;color:gray;">powered by adcenter</center>
										</div>
										<div class="panel-footer">
											<div class="row" style="margin-left:10px;">
												<div class="col-sm-3" style="cursor:pointer;">  <span class="glyphicon glyphicon-eye-open">15</span></div>
												<div class="col-sm-3" style="cursor:pointer;">  <span class="glyphicon glyphicon-thumbs-up likes '+ liked+'">5</span> </div>
												<div class="col-sm-3" style="cursor:pointer;"> <span class="glyphicon glyphicon-comment comment">4</span></div>
												<div class="col-sm-3" style="cursor:pointer;">  <span class="glyphicon glyphicon-share-alt"></span></div>
											</div>
										</div>
									</div>
								</div>
							</div> 
						</div>-->
						
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
							<div class="panel-heading" style="background-color:#004A6E;">Suggested companies to follow</div>
							<div id="suggestions" class="panel-body">
								
								
							</div>
							<center style="color:#008AB8;"><a href="shops.php">view more</a></center>
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
