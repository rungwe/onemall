<?php
require 'session.php';
init();

aunthenticate();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1024">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ad center</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
    <link href="https://s3.eu-central-1.amazonaws.com/userinterface-scripts/Scripts/css/prettyPhoto.css" rel="stylesheet">
    <link href="https://s3.eu-central-1.amazonaws.com/userinterface-scripts/Scripts/css/price-range.css" rel="stylesheet">
	<link href="home/css/myshops.css" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<link href="home/css/main.css" rel="stylesheet">
    <link href="home/css/profile.css" rel="stylesheet">
    <link href="./menu_files/style-24.css" rel="stylesheet">
    <link rel="stylesheet" href="http://css-spinners.com/css/spinners.css" type="text/css">
	<link href="https://s3.eu-central-1.amazonaws.com/userinterface-scripts/Scripts/css/responsive.css" rel="stylesheet">
    <link href="home/css/animate.css" rel="stylesheet">

	<script type="text/javascript" src="home/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="home/js/constants.js"></script>
	<script type="text/javascript" src="home/js/navigation-drawer.js"></script>
	<script type="text/javascript" src="home/js/ads.js"></script>
    <script type="text/javascript" src="home/js/create_ad.js"></script>
	<script type="text/javascript" src="home/js/like.js"></script>
	<script type="text/javascript" src="home/js/comment.js"></script>
    <script type="text/javascript" src="home/js/bootstrap-notify.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="icon" href="img/fav2.png"/>
   
</head><!--/head-->

<body onload="<?php 
    
    if(empty($_REQUEST)){
        echo "ads_init('')";
    }
    else{
        $category = $_REQUEST["category"];
        echo "ads_init('$category')";
        
    }?>" style="background-color:#F2F2F2;">
	
	
	<div id="nav" class="navbar-fixed-top" style="width:100%;height:55px;margin:0px;padding:0px;">
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-sm-2">
						<div class="col-sm-2">
							<a href="index.php"><img src="img/log3.png" height="50" /></a>
						</div>
					</div>
					
						
						<div class="col-sm-offset-1 col-sm-4">
							
								<div class="input-group" style="margin-top:3%;width:150%;">
								  <input type="text" class="form-control" placeholder="Search for Ads">
								  <span class="input-group-btn">
									
									<button class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" type="button">category&nbsp;<span class="caret"></span></button>
									<div class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
									<li role="presentation"><a >All</a></li>
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
			
		</div> <!-- navabar end -->
        <?php 
            echo nav_drawer();
		    echo create_ad();
		    echo edit_account_modal();
	        echo ad_detail();
        ?>
        <br><br><br>
	

	<section >
		<div class="container" >
        
			<div class="row" >
				<div class="col-sm-3">
					<div class="left-sidebar">
                        <br><br>
						<div class="panel-group  panel-info category-products" id="accordian"><!--category-productsr-->
							<?php 
                               echo generate_category()
                              ?>
							
							
						</div><!--/category- products-->
						
						
						
						
					
					</div>
				</div>
				
				<div class="col-sm-6 padding-right">

					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">
                            <?php
                                if(empty($_REQUEST)){
                                    echo "Featured Adverts";
                                }
                                else{
                                    echo $_REQUEST["category"];
                                }
                                
                            ?>
                            
                        
                        
                        
                        </h2>
						
						 <div id="adcenter" style="margin-left:6px;margin-right:0px;">
                            
                             <center>
							        <div class="throbber-loader">
                                       
                                    </div>
                              </center>

                         </div>
						
						
					</div><!--features_items-->
					
					
					
				</div>
				
				<div class="col-sm-3 padding-left" id="right">
                    <br><br>
					<div class="panel" style="margin-top: 10px;" >
							<div class="panel-heading" style="background-color:white;color:#004A6E;font-weight:700;"><h5>Suggested companies to follow</h5></div>
							<div id="suggestions" class="panel-body">
								
								
							</div>
							<center style="color:#008AB8;"><a href="companies.php">view more</a></center>
							 
						</div>
					
				</div>
			</div>
			
			<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="img/products/jackets.jpg" alt="" />
													<h2>R456</h2>
													<p>Mens Jacket</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
                                    <div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="img/products/jeans.jpg" alt="" />
													<h2>R600</h2>
													<p>Mens apparel</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="img/products/converse.png" alt="" />
													<h2>R670</h2>
													<p>Converse</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="img/products/hose-fittings.jpg" alt="" />
													<h2>R560</h2>
													<p>Hose pipe connector</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="img/products/foodmixer.jpg" alt="" />
													<h2>R200</h2>
													<p>Food mixer</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="img/products/bed.jpg" alt="" />
													<h2>R800</h2>
													<p>Childs bed</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
                                    <div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="img/products/jackets.jpg" alt="" />
													<h2>R456</h2>
													<p>Mens Jacket</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="img/products/jeans.jpg" alt="" />
													<h2>R600</h2>
													<p>Mens apparel</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
		</div>
	</section>

	
	<script src="js/bootstrap.min.js"></script>
	
	<script src="home/js/suggestions.js"></script>
</body>
</html>';
