<?php

function company_recommender(){
    $modal='<div class="modal fade" data-backdrop="static" id="company_reommender" tabindex="-1" role="dialog" aria-labelledby="companies">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    
                    <h4 class="modal-title" id="companies">Choose at least 3 recommended company</h4>
                  </div>
                  <div class="modal-body">
                        <div class="row" id="recommend_modal"></div>  
                  </div>
                  <div class="modal-footer">
                    
                    <button id="done_recommend" type="button" class="btn btn-primary" >Proceed</button>
                  </div>
                </div>
              </div>
            </div>';

    echo $modal;
}

function post_broadcast(){
    $modal = '<!-- Modal -->
    <div class="modal fade" id="post_broadcast_modal" tabindex="-1" role="dialog" aria-labelledby="broadcast_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="broadcast_modal">Post Broadcast</h4>
          </div>
          <div class="modal-body">
            <center>
                <textarea readonly id="broadcast-post2" class="form-control" rows="4" cols="50" placeholder="" style="width:100%;resize:none;"></textarea>
                <br>
                <img  data-toggle="tooltip" title="click to upload image poster" id="broadcast_img" class="pictures" src="img/upload_broadcast.png" style="max-height:300px;min-height:200;max-width:100%;cursor:pointer;" accept="image/gif, image/jpeg, image/png" />
                <input class="filechooser" type="file" id="broadcast_upload" name="pic1" style="display:none" onchange=readURL(this,"broadcast_img") accept="image/*" />
            </center>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button id="post_my_broadcast" type="button" class="btn btn-primary">Post</button>
          </div>
        </div>
      </div>
    </div>';

    return $modal;
}

function generate_category(){
    $html_result="";
    $file = fopen("categories.json","r");
    $contents = fread($file, filesize("categories.json"));
    $categories = json_decode($contents, true);
    $id=0;
    foreach ($categories as $category => $sub_category){
        if (count($sub_category)!=0 ){
            $html_result.='<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#'.$id.'">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<a href="ads.php?category='.urlencode($category).'">'.$category.'</a>
										</a>
									</h4>
								</div>
                                </div>';
        }
        else{
            $html_result.='<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="ads.php?category='.urlencode($category).'">'.$category.'</a></h4>
								</div>
							</div>';
        }
        if ( count($sub_category)!=0 ){
             $html_result.= '<div id="'.$id.'" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>';
            foreach($sub_category as $value){
            $html_result.= '<li><a href="ads.php?category='.urlencode($value).'">'.$value.' </a></li>';

            }
            $html_result.='</ul>
									</div>
								</div><div style="height:4px;width:2px;"></div>';
        }
        $id=$id +1;
    }
    return $html_result;
}
function nav_drawer(){
	$drawer_html ='<div class="ui-24 open" style="left: 0px;z-index:100;margin-top:60px;position:fixed">
			<!-- Button -->
			<div class="ui-button" id="side-drawer">
				<a style="background-color:#004A6E; cursor:pointer">Dashboard</a>
			</div>
			<div class="ui-content" >
				<!-- Container Fluid -->
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="index.php"><img src="img/icons/Home.png" class="img-responsive" alt=""></a>
							</div>
							<!-- Heading -->
							<h5><a href="index.php">Home</a></h5>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="#"><img src="img/icons/Bell.png" class="img-responsive" alt=""></a>
							</div>
								<!-- Heading -->
							<h5><a href="#">Notifications</a></h5>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="#"><img data-toggle="modal" data-target="#cart" src="img/icons/Shopping-Cart.png" class="img-responsive" alt=""></a>
							</div>
								<!-- Heading -->
							<h5><a data-toggle="modal" data-target="#cart" href="#">Basket</a></h5>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="#"><img data-toggle="modal" data-target="#create_ad" onclick="setup_adCreate()" src="img/icons/Paper-Money.png" class="img-responsive" alt=""></a>
							</div>
							<h5><a data-toggle="modal" data-target="#create_ad" onclick="setup_adCreate()" href="#">Create Ads</a></h5>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="#"><img src="img/icons/Briefcase.png" class="img-responsive" alt=""></a>
							</div>
							<h5><a href="#">Manage Ads</a></h5>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="#"><img src="img/icons/Credit-Card.png" class="img-responsive" alt=""></a>
							</div>
							<h5><a href="#">Payments</a></h5>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="#"><img src="img/icons/Desktop.png" class="img-responsive" alt=""></a>
							</div>
							<h5><a href="#">Create Pages</a></h5>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="#"><img src="img/icons/social.png" class="img-responsive" alt=""></a>
							</div>
							<h5><a href="#">Social Integration</a></h5>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="#"><img src="img/icons/X.png" class="img-responsive" alt=""></a>
							</div>
							<!-- Heading -->
							<h5><a href="#">Verify Account</a></h5>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /UI X -->
        ';
		
	return $drawer_html;
	
}



function nav_drawer_company(){
	$drawer_html ='<div class="ui-24 open" style="left: 0px;z-index:100;margin-top:60px;position:fixed">
			<!-- Button -->
			<div class="ui-button" id="side-drawer">
				<a style="background-color:#004A6E; cursor:pointer">Dashboard</a>
			</div>
			<div class="ui-content" >
				<!-- Container Fluid -->
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="index.php"><img src="img/icons/Home.png" class="img-responsive" alt=""></a>
							</div>
							<!-- Heading -->
							<h5><a href="index.php">Home</a></h5>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="#"><img src="img/icons/Bell.png" class="img-responsive" alt=""></a>
							</div>
								<!-- Heading -->
							<h5><a href="#">Notifications</a></h5>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="#"><img src="img/icons/social.png" class="img-responsive" alt=""></a>
							</div>
							<h5><a href="#">Social Integration</a></h5>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="#"><img src="img/icons/Desktop.png" class="img-responsive" alt=""></a>
							</div>
							<h5><a href="#">Create Pages</a></h5>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="#"><img src="img/icons/Briefcase.png" class="img-responsive" alt=""></a>
							</div>
							<h5><a href="#">Manage Pages</a></h5>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="#"><img src="img/icons/Credit-Card.png" class="img-responsive" alt=""></a>
							</div>
							<h5><a href="#">Payments</a></h5>
						</div>
					</div>
					<div class="row">
						
						<div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="#"><img src="img/icons/X.png" class="img-responsive" alt=""></a>
							</div>
							<!-- Heading -->
							<h5><a href="#">Verify Account</a></h5>
						</div>

                        <div class="col-md-4 col-sm-4 col-xs-4">
							<!-- UI Item -->
							<div class="ui-item">
								<!-- Image -->
								<a href="logout.php"><img src="home/img/icons/logout.png" class="img-responsive" alt=""></a>
							</div>
							<!-- Heading -->
							<h5><a href="logout.php">Logout</a></h5>
						</div>

					</div>
				</div>
			</div>
		</div><!-- /UI X -->
        ';
		
	return $drawer_html;
	
}





function edit_account_modal(){
	
	$modal = '<div id="edit_ac" class="modal fade">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="z-index:1000;position:relative;">&times;</span></button>
					<div class="row col-sm-offset-6" style="cursor:pointer;">
						<!-- <div class="col-sm-2" style="background-image:url(\'img/edit.png\');background-size:25px 25px;background-repeat:no-repeat;height:30px;width:30px;background-size:cover;"></div> -->
						<div class="col-sm-5" >Edit Account</div>
					</div>
				  </div>
				  <div class="modal-body">
						
                        <div class="" style="margin-top:-65px;">
                            <div class="row">
                                <div class="board">
                                    <div class="board-inner">
                                    <ul class="nav nav-tabs" id="myTab">
                                    <div class="liner"></div>
                                     <li>
                                     <a href="#home" data-toggle="tab">
                                      <span class="round-tabs one">
                                              <i class="glyphicon glyphicon-user middle"></i>
                                      </span> 
                                  </a></li>

                                  <li class="active"><a href="#profile" data-toggle="tab">
                                     <span class="round-tabs two">
                                         <i class="glyphicon glyphicon-user middle"></i>
                                     </span> 
                           </a>
                                 </li>
                                 <li><a href="#messages" data-toggle="tab">
                                     <span class="round-tabs three">
                                          <i class="glyphicon glyphicon-map-marker middle"></i>
                                     </span> </a>
                                     </li>

                                     <li><a href="#settings" data-toggle="tab">
                                         <span class="round-tabs four">
                                              <i class="glyphicon glyphicon-phone-alt middle"></i>
                                         </span> 
                                     </a></li>

                                     <li><a href="#doner" data-toggle="tab" title="completed">
                                         <span class="round-tabs five">
                                              <i class="glyphicon glyphicon-ok middle"></i>
                                         </span> </a>
                                     </li>
                     
                                     </ul></div>

                                     <div class="tab-content">
                                      <div class="tab-pane fade" id="home">
                                          <p id="profile_error1"> </p>
                                          <div class="row">
                                               <div class="col-sm-3">
								                    <img src="img/profile.png" height="80" width="80"/>
							                    </div>
							                    <div class="col-sm-6">
							                        <div class="form-group"
								                    <label for="exampleInputFile">upload pic</label>
								                    <input type="file" id="profile_pic">
								
							                        </div>
							                    </div>
                                            </div>
                                            <br>
                                            
                                            <div class="form-group">
                                                <label for="firstname">First Name</label>
                                                <input type="text" class="form-control" id="firstname" maxlength="26" placeholder="">
                                            </div>
                                             <div class="form-group">
                                                <label for="middlename">Middle Name</label>
                                                <input type="text" class="form-control" id="middlename" maxlength="26" placeholder="">
                                             </div>

                                             <div class="form-group">
                                                <label for="surname">Surname</label>
                                                <input type="text" class="form-control" id="surname" maxlength="26" placeholder="">
                                             </div>
                                             <button type="button" class="btn btn-primary pull-right" onclick="set_profile_personal1()">update</button>
                                      </div>
                                      <div class="tab-pane fade  in active" id="profile">
                                        <p id="profile_error2"></p>
                                          <div class="form-group">
                                                <label for="dob">Date of Birth</label>
                                                <input type="text" class="form-control" id="dob" maxlength="10">
                                            </div>
                                             <div class="form-group">
                                                <label for="rice">Ethinic group</label>
                                                <input type="text" class="form-control" id="race" maxlength="15" placeholder="">
                                             </div>
                                             <div class="row">
                                                 <div class="form-group">
                                                    <label for="sex" class="col-sm-2">
								                        Gender:
							                        </label>
							                        <div class="col-sm-4">
								                        <label class="radio">
									                        <input type="radio" name="sex" id="male" value="male">
									                        Male
								                        </label>
								                        <label class="radio">
									                        <input type="radio" name="sex" id="female" value="female">
									                        Female
								                        </label>
							                        </div>
                                                 </div>
                                             </div>
                                             <button type="button" class="btn btn-primary pull-right" onclick="set_profile_personal2()">update</button>
                                      </div>
                                      <div class="tab-pane fade" id="messages">
                                          <div class="row" >
						                    <div>
							                    <label for="autocomplete" class="col-sm-3">
								                    Search for Address:
							                    </label>
							                    <div class="col-sm-9">
								                    <input type="text" class="form-control" id="autocomplete" placeholder="search address" onFocus="geolocate()">
								                    
							                    </div>
							                    <div class="col-sm-3">
								                    <input type="hidden" class="form-control" id="street_number" placeholder="street address" disabled="true">
							                    </div>
							                    <div class="col-sm-2">
								                    <input type="hidden" class="form-control" id="route"
										                    disabled="true"></input>
							                    </div>
						                    </div>
					                    </div>
					                    <br>
					                    <div class="row">
							                    <label for="locality" class="col-sm-2">
								                    City:
							                    </label>
							                    <div class="col-sm-4">
								                    <input type="text" class="form-control" id="locality" placeholder="city" disabled="true">
							
							                    </div>
						                    <label for="administrative_area_level_1" class="col-sm-2">
							                    State:
							                    </label>
							                    <div class="col-sm-4">
								                    <input type="text" class="form-control" id="administrative_area_level_1" placeholder="state" disabled="true">
							                    </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <label for="country" class="col-sm-2">
						                    Country:
						                    </label>
							                <div class="col-sm-4">
								                <input class="form-control" id="country"
										                disabled="true" placeholder="country"></input>
							                </div>
						                    <label for="postal_code" class="col-sm-2">
							                    Zip Code
						                    </label>
							                    <div class="col-sm-4">
								                    <input class="form-control" id="postal_code"
										                    disabled="true" placeholder="zip code"></input>
							                    </div>
					                    </div>
                                        <button type="button" class="btn btn-primary pull-right">update</button>
                                      </div>
                                      <div class="tab-pane fade" id="settings">
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"  disabled="true">
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputPassword1">Cell</label>
                                            <input type="" class="form-control" id="exampleInputPassword1" >
                                          </div>
                                          <button type="button" class="btn btn-primary pull-right">update</button>
                                     </div>
                                      <div class="tab-pane fade" id="doner">
                                           <div class="alert alert-info">
                                                <strong>Thank you </strong> 
                                            </div>
                                      </div>
                <div class="clearfix"></div>
                </div>

                </div>
                </div>
                </div>
                
                   
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
					    <div class="alert alert-info">
                            <strong>Thank you </strong> your ads has be posted successfully
                        </div>
				  </div>
				  
				  <div id="ads_error" class="modal-body" style="display:none">
					<div class="alert alert-danger">
                        <strong>Sorry :(</strong> Something went wrong please, please try again. check if you still have credits
                    </div>
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
									<option>Automotive Vehicles</option>
									<option>business equipment</option>
									<option>services</option>
								  </select>
								</div>
							</div>
                            
                            <div class="form-group col-sm-3">
						        <label for="info">Price:</label>
						        <input class="form-control" type="number" min="0" id="price" placeholder="amount" name="price" maxlength="150" style="resize:none;" required>
						    </div>
                            
						</div>
						
						 <div class="form-group">
						  <label for="info">product information:</label>
						  <textarea class="form-control" rows="3" id="ad_info" name="product_info" maxlength="150" style="resize:none;" required></textarea>
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
                $component ='<div style="width:100%;background-color:#E0EBEB;">
                                <textarea id="broadcast-post" class="form-control" rows="4" cols="50" placeholder="Whats new" style="width:100%;resize:none;"></textarea>
                                
                                <div class="row" style="margin-top:4px;">
                                   
                                    <div class=" col-sm-1">
                                        <i class="fa fa-camera" onclick="broadcast_proceed()"  style="font-size:25px;color:grey;cursor:pointer;"></i>
                                    </div>
                                    <div class="col-sm-1">
                                        <i class="fa fa-video-camera" style="font-size:25px;color:grey;"></i>
                                    </div>
                                    <div class="col-sm-offset-8 pull-right col-sm-2" style="left:0px;">
                                        <button id="share" class="btn btn-primary"> share </button>
                                    </div>
                                </div>
                                
                                <h4>share via</h4>
                                <div class="row">
                                    <div class="col-sm-offset-1 col-sm-2 social-media fbk ">
                                        <i class="fa fa-facebook-official "></i>
                                    </div>
                                    <div class="col-sm-2 social-media twt">
                                        <i class="fa fa-twitter-square "></i>
                                    </div>
                                    <div class="col-sm-2 social-media inst">
                                      <i class="fa fa-instagram "></i>
                                    </div>
                                    <div class="col-sm-2 social-media ggp">
                                        <i class="fa fa-google-plus-square "></i>
                                    </div>
                                    <div class="col-sm-2 social-media lnkd">
                                        <i class="fa fa-linkedin-square "></i>
                                    </div>
                                </div>

                            </div>';
        return $component;
}

function shopping_cart(){
    
    $cart=' <div class="modal fade" id="cart" role="dialog">
    <div class="modal-dialog modal-lg" style="width:65%";>
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="col-sm-2" style="background-image:url(\'img/icons/Shopping-Cart.png\');background-size:30px 30px;background-repeat:no-repeat;height:30px;width:30px;background-size:cover;"></div>
		  <div class="col-sm-10 btn-xs" style="margin-top:5px;"><h4 class="modal-title">Shopping cart</h4></div>
          <br>
        </div>
        <div class="modal-body">
          <div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-8">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="img/products/clock.jpg" style="max-height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Wrist watch</a></h4>
                                <h5 class="media-heading"> by <a href="#">Rolex</a></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1" style="text-align: center">
                        <input type="number" class="form-control" id="" value="1">
                        </td>
                        <td class="col-sm-1 text-center"><strong>R1008.87</strong></td>
                        <td class="col-sm-1 text-center"><strong>R1008.87</strong></td>
                        <td class="col-sm-1 ">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr>
                    <tr>
                        <td class="col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="img/products/converse.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">High cut canvas</a></h4>
                                <h5 class="media-heading"> by <a href="#">Converse</a></h5>
                                <span>Status: </span><span class="text-warning"><strong>Leaves warehouse in 2 - 3 weeks</strong></span>
                            </div>
                        </div></td>
                        <td class="col-md-1" style="text-align: center">
                        <input type="number" class="form-control" id="na" value="1">
                        </td>
                        <td class="col-md-1 text-center"><strong>R578.99</strong></td>
                        <td class="col-md-1 text-center"><strong>R578.99</strong></td>
                        <td class="col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>R1157.98</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>R50</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>R1207.98</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <a href="products.php"><button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></a></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
        </div>
      </div>
      
    </div>
  </div>';

    return $cart;
}

function ad_detail(){

    $detailed ='<div class="modal fade" id="ad_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document" style="width:70%;">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Adcenter</h4>
		  </div>
		  <div class="modal-body">
				<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img id="ad_first_image" src="home/img/no_image.jpg" alt="" />
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2 id="ad_title">Title: womens apparel</h2>
								<p id="ad_description">Description:</p>
								<span>
									<span id="ad_price">US $59</span>
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
								
								<p><b>Condition:</b> New</p>
								
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="row">
						<div id="similar-product" class="carousel slide col-sm-5" data-ride="carousel">
									
									  <!-- Wrapper for slides -->
									<div id="ad_images" class="carousel-inner">
										<div class="item active">
										  <img src="images/product-details/similar1.jpg" alt="">
										  <img src="images/product-details/similar2.jpg" alt="">
										  <img src="images/product-details/similar3.jpg" alt="">
										  
										</div>
										<div class="item">
										  <img src="images/product-details/similar1.jpg" alt="">
										  <img src="images/product-details/similar2.jpg" alt="">
										  <img src="images/product-details/similar3.jpg" alt="">
										  
										</div>
									
									</div>
									
									  <!-- Controls -->
									  <a class="left item-control" href="#similar-product" data-slide="prev">
										<i class="fa fa-angle-left"></i>
									  </a>
									  <a class="right item-control" href="#similar-product" data-slide="next">
										<i class="fa fa-angle-right"></i>
									  </a>
						</div>
						
						<div class="category-tab shop-details-tab col-sm-6"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#features" data-toggle="tab">Features</a></li>
								<li><a href="#owner" data-toggle="tab">Owner Details</a></li>
								
								<li ><a href="#comments" data-toggle="tab">Comments</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="features" >
								Specifications
							</div>
							
							<div class="tab-pane fade" id="owner" >
								Owner Details
							</div>
							
							<div class="tab-pane fade active in" id="comments" >
								Comments
							</div>
							
						</div>
					</div><!--/category-tab-->
					</div>
					
		  </div>
		  
		</div>
	  </div>
	</div>';

    return $detailed;
}

?>