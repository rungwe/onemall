<?php

function nav_drawer(){
	$drawer_html ='<div id="drawer"class="row" style="position:fixed;z-index:3;left:0px;">
			<div class="col-sm-4" id="drawer-content" style="border:2px solid #004A6E; width:250px;background-color:white;position:fixed;z-index:3;margin:0px;padding:0px;">
				<div style="background-image:url(\'img/bk-freeze-ga.jpg\');height:150;width:100%;margin:0px;background-size:cover;">
				
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
						<img src="img/icons/Bell.png" height="30" width="30">
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<h4>Notifications <span style="background-color:red;" class="badge">2</span></h4>
					</div>
					
				</div>

                <div class="menu row">
					<div class="col-sm-2">
						<img src="img/icons/Shopping-Cart.png" height="30" width="30">
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<h4>Basket <span style="background-color:#19A3D1;" class="badge">2</span></h4>
					</div>
					
				</div>

				<div class="menu row">
					<div class="col-sm-2">
						<img src="img/icons/Paper-Money.png" height="30" width="30">
					</div>
					<div class="col-sm-offset-2 col-sm-8">
						<h4 data-toggle="modal" data-target="#create_ad" onclick="setup_adCreate()" >Create Ads </h4>
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
				
				<br>
				<br>
			</div>
			<div class="col-sm-2 pull-right" id="control" style="cursor:pointer;border:2px solid #004A6E;width:45px;height:45px;background-color:white;position:fixed;z-index:3;margin-left:250px;">
				<span class="glyphicon glyphicon-align-justify  btn-lg" style="margin-left:-19px;color:#004A6E"><span style="background-color:red;" class="badge">2</span></span>
			</div>
		</div>';
		
	return $drawer_html;
	
}

function edit_account_modal(){
	
	$modal = '<div id="edit_ac" class="modal fade">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="row col-sm-offset-4" style="cursor:pointer;">
						<div class="col-sm-2" style="background-image:url(\'img/edit.png\');background-size:25px 25px;background-repeat:no-repeat;height:30px;width:30px;background-size:cover;"></div>
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
			</div><!-- /.modal -->';
			
	return $modal;
	
}

function create_ad(){
	
	$ad_component = '<div id="create_ad" class="modal fade">
			
			  <div class="modal-dialog">
				<div class="modal-content" >
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="col-sm-offset-4 row" style="cursor:pointer;">
						<div class="col-sm-2" style="background-image:url(\'img/ads.png\');background-size:30px 30px;background-repeat:no-repeat;height:30px;width:30px;background-size:cover;"></div>
						<div class="col-sm-10 btn-xs" style="margin-top:5px;">Create Ads</div>
					</div>
				  </div>
				  <form id="ad_form" action="" method="" enctype="multipart/form-data">
				  <div id="ads_success" class="modal-body" style="display:none">
					<center style=\'color:blue\'>Thank you :) <br> your ad has been placed successfully</center>
				  </div>
				  <div id="ads_success" class="modal-body" style="display:none">
					<center style=\'color:blue\'>Thank you :) <br> your ad has been placed successfully</center>
				  </div>
				  <div id="ads_error" class="modal-body" style="display:none">
					<center style=\'color:red\'>Sorry ): <br> your ad has not been placed successfully, you might have run out of credits for ads <br> You can buy more ad credits and continue</center>
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
								<input class="filechooser" type="file" id="ad_pic1" name="pic1" style="display:none" onchange="readURL(this,\'pic1\');" />
							</div>
							<div class="col-sm-4">
								<img id="pic2" class="ad_pictures" style="cursor:pointer;border:2px solid black;" src="img/icons/Camera.png" width="120" height="120" accept="image/gif, image/jpeg, image/png" />
								<input class="filechooser" type="file" id="ad_pic2" name="pic2" style="display:none" onchange="readURL(this,\'pic2\');" />
							</div>
							<div class="col-sm-4">
								<img id="pic3" class="ad_pictures" style="cursor:pointer;border:2px solid black;" src="img/icons/Camera.png" width="120" height="120" accept="image/gif, image/jpeg, image/png" />
								<input class="filechooser" type="file" id="ad_pic2" name="pic3" style="display:none" onchange="readURL(this,\'pic3\');" />
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
			  
			</div><!-- /.modal -->';
	
	return $ad_component;
}

function post_interface(){
    $component ='<div id="center" class="col-sm-6" >
                                <div class="ui-68">
			                    <div class="container-fluid">	
				                    <div class="ui-content">
					                    <!-- TextArea -->
					                    <textarea class="form-control" rows="4" placeholder="Share to your customers" style="margin-bottom:3px;resize:none;"></textarea>
					                    <!-- Button -->
					                    <div class="row">
						                    <!-- Icon -->
						                    <div class="col-sm-3">
							                    <!-- Music -->
							                    <a href="#" class="col-sm-4" data-toggle="tooltip" data-placement="top" title="Attach File"><i class="fa fa-paperclip"></i></a>
							                    <!-- Picture -->
							                    <a href="#" class="col-sm-4" data-toggle="tooltip" data-placement="top" title="Attach Photo"><i class="fa fa-camera"></i></a>
							                    <!-- Camera -->
							                    <a href="#" class="col-sm-4" data-toggle="tooltip" data-placement="top" title="Attach Video"><i class="fa fa-video-camera"></i></a>
						                    </div>
						                    <!-- Button -->
                                            <div class="col-sm-offset-7 col-sm-1">
						                    <a href="#" class="btn btn-info btn-xs " style="background-color:white; color: #004A6E;">Submit</a>
                                            </div>
					                    </div>
				                    </div>
			                    </div>
		                    </div>
                            <br>';
        return $component;
}



?>