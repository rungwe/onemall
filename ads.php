<?php
require 'session.php';
init();

aunthenticate(ads_page());

function ads_page(){
	$page = '<!DOCTYPE html>
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
	<link href="https://s3.eu-central-1.amazonaws.com/userinterface-scripts/Scripts/css/responsive.css" rel="stylesheet">
	<script type="text/javascript" src="home/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="home/js/constants.js"></script>
	<script type="text/javascript" src="home/js/navigation-drawer.js"></script>
	<script type="text/javascript" src="home/js/ads.js"></script>
	<script type="text/javascript" src="home/js/likes.js"></script>
	<script type="text/javascript" src="home/js/comments.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="img/log3.png">
   
</head><!--/head-->

<body onload="ads_init()" style="background-color:#F2F2F2;">
	
	
	<div id="nav" class="navbar-fixed-top" style="width:100%;height:55px;margin:0px;padding:0px;">
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-sm-2">
						<div class="col-sm-2">
							<a href="index.php"><img src="img/log3.png" height="50" width="50"/></a>
						</div>
					</div>
					
						
						<div class="col-sm-offset-1 col-sm-4">
							
								<div class="input-group" style="margin-top:3%;width:150%;">
								  <input type="text" class="form-control" placeholder="Search for Ads">
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
								
							<li onclick="Home()" style="color:white;font-weight:900;font-size:150%;margin-top:15px;"><i class="icon ion-ios-home-outline" style="font-size:30px;color:#004A6E"><label style="font-size:13px;font-weight:400;">&nbsp;Home&nbsp;&nbsp;</label></i></li>
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
	
		 '.create_ad().'
		'.edit_account_modal().'
	    '.ad_detail().'
        <br><br><br>
	<!-- <section id="slider" style="height:400px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1>EDGARS</h1>
									<h2>Red Hanger Specials</h2>
									<p>Go to the your nearest EDGARS store and check out our special deals and save some money, do not be the last one!!</p>
									<button type="button" class="btn btn-default get">Check it out</button>
								</div>
								<div class="col-sm-6">
									<br><br><br><br>
									<img src="img/commercials1.jpg" class="img-responsive" style="max-width:500px;" alt="" />
									
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									
									<h1>Game Mania</h1>
									<h2> </h2>
									<p>Bringing affordable gaming, come chat to us, we have gaming consoles at a nice price</p>
									<button type="button" class="btn btn-default get">Check it out</button>
								</div>
								<div class="col-sm-6">
									<br><br><br><br>
									<img src="img/commercials4.jpg" class="img-responsive" style="max-width:500px;" alt="" />
									
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1>Electronica</h1>
									<h2></h2>
									<p>Great television at affordable prices </p>
									<button type="button" class="btn btn-default get">Check it out</button>
								</div>
								<div class="col-sm-6">
									<br><br><br><br>
									<img src="img/commercials3.jpg" class="img-responsive" style="max-width:500px;" alt="" />
									
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section> slider-->

	<section >
		<div class="container" >
			<div class="row" >
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group  panel-primary category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">All</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Clothing
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Women </a></li>
											<li><a href="#">Men</a></li>
											<li><a href="#">Children</a></li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Computers and accessories
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">mobile phones</a></li>
											<li><a href="#">tablets</a></li>
											<li><a href="#">laptops and pc</a></li>
											<li><a href="#">other accessories</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Home and garden
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">kitchenware</a></li>
											<li><a href="#">furniture</a></li>
											<li><a href="#">garden</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Beauty and Therapy</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Vehicles</a></h4>
								</div>
							</div>
							
							
						</div><!--/category- products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="text-center"><!--shipping-->
							<img src="home/img/ads_banner2.png" alt="" height="400"  style="background-size:cover;"/>
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-6 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Featured Adverts</h2>
						
						 <div id="adcenter" style="margin-left:6px;margin-right:0px;">
							

                         </div>
						
						
					</div><!--features_items-->
					
					
					
				</div>
				
				<div class="col-sm-3 padding-left" id="right">

					<div class="panel panel-primary" style="margin-top:53px;">
							<div class="panel-heading" style="background-color:white;color:#004A6E;font-weight:700;">Suggested companies to follow</div>
							<div id="suggestions" class="panel-body">
								
								
							</div>
							<center style="color:#008AB8;"><a href="companies.php">view more</a></center>
					</div>
					<div style="background-color:white;height:300px;width:100%;border-radius:5px;">
		
					</div>
				</div>
			</div>
			
			<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
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
									<div class="col-sm-4">
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
									<div class="col-sm-4">
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
									<div class="col-sm-4">
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
									<div class="col-sm-4">
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
									<div class="col-sm-4">
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
	<script src="js/price-range.js"></script>
    <script src="js/price.js"></script>
	<script src="home/js/suggestions.js"></script>
</body>
</html>';

return $page;
}


?>