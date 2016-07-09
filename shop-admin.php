<?php
require 'session.php';
init();
company_restricted();
aunthenticate();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
	<link href="css/myshops.css" rel="stylesheet">
    <link href="home/css/main.css" rel="stylesheet">
    <link href="./menu_files/style-24.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0;background-color: #fff;">
            <div class="container-fluid">
				<div class="row">
					
					<div class="col-sm-2">
						<div class="col-sm-2">
							<a href="home.php"><img src="img/log3.png" height="50px" width="50px"/></a>
						</div>
					</div>
					
						
						<div class="col-sm-offset-1 col-sm-4">
							
								<div class="input-group" style="margin-top:3%;width:150%;">
								  <input type="text" class="form-control" placeholder="Search ">
								  <span class="input-group-btn">
									
									<button class="btn btn-default" type="button">search</button>
			
								  </span>
								  
								  
								</div><!-- /input-group -->
							
						</div>
						
						<div id="nav_content" style="margin-right:3%;">
						  <ul class="nav navbar-nav navbar-right style_font" >
								
							<li class="home" style="color:white;font-weight:900;font-size:150%;margin-top:10px;"><i class="icon ion-ios-home-outline" style="font-size:30px;color:#004A6E"><label style="font-size:13px;font-weight:400;">&nbsp;Home&nbsp;&nbsp;</label></i></li>
							<!-- <li style="color:white;font-weight:900;font-size:150%;margin-top:15px;"><span class="glyphicon glyphicon-bell" ><label style="font-size:13px;">&nbsp;Notifications&nbsp;</label></span></li> -->
							
							<li style="cursor:pointer;"><span class="input-group" style="color:white;font-weight:900;font-size:150%;margin-top:10px;">
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

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a data-toggle="tab" class="tab" href="#page-wrapper"><i class="fa fa-dashboard fa-fw"></i>Shop Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i> Products<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a data-toggle="tab" class="tab" href="#active_products">Active Products</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" class="tab" href="#expired_products">Expired Products</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list-alt"></i> Orders<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#new_orders" data-toggle="tab" class="tab">New orders</a>
                                </li>
                                <li>
                                    <a href="#">In Progress</a>
                                </li>
                                <li>
                                    <a href="#">Delivered</a>
                                </li>
                                <li>
                                    <a href="#">Cancelled</a>
                                </li>
                                <li>
                                    <a href="#">All Orders</a>
                                </li>
                                <li>
                                    <a href="#">Archived</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-comments-o fa-fw"></i> Live chat</a>
                        </li>
                        <li>
                            <a href="home.php"><i class="fa fa-edit fa-fw"></i> Profile page</a>
                        </li>
                        
                       
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div class="tab-content">
            <br>
           <div id="page-wrapper" class="page-wrapper tab-pane fade in active">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">XPERIENCE</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-certificate fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#new_orders" data-toggle="tab">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-check-square fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>Successfull Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>Total Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-exclamation fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Expired products!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Sales Report
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    
                </div>
                
            </div>
            <!-- /.row -->
        </div>

           <div id="active_products" class="page-wrapper tab-pane fade" style="background-color: #fff">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="color: #000">Active Products</h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    <div class="padding-right">
					<div class="features_items"><!--features_items-->
						
						
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="img/products/clock.jpg" class="item-img" alt="" />
										<h2>R650</h2>
										<p>Bedding set</p>
										<a href="#" class="btn btn-default add-to-cart">View</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>R650</h2>
											<p>Full bedding set</p>
											<a href="#" class="btn btn-default add-to-cart">View</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Product Details</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Purchase</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="img/products/bedding.jpg" class="item-img" alt="" />
										<h2>R650</h2>
										<p>Bedding set</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>R650</h2>
											<p>Full bedding set</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Product Details</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Purchase</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="img/products/Microwave.jpg" alt="" />
										<h2>R2650</h2>
										<p>Microwave </p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>R2650</h2>
											<p>Silver Philips</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Product Details</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Purchase</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="img/products/jackets.jpg" alt="" />
										<h2>R790</h2>
										<p>Jackets</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>R790</h2>
											<p>Mens winter jackets</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
									
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Product Details</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Purchase</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="img/products/makeup.jpg" alt="" />
										<h2>R1095</h2>
										<p>Make up kit</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>R1095</h2>
											<p>Ladies Make up kit</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
									
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Product Details</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Purchase</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="img/products/macbook.jpg" alt="" />
										<h2>R15380</h2>
										<p>Macbook</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>R15380</h2>
											<p>Brand new Macbook</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Product Details</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Purchase</a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div><!--features_items-->
					
					
					
				</div>

                </div>
           </div>

           <div id="expired_products" class="page-wrapper tab-pane fade">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="color: #000">Expired Products</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
           </div>

           <div id="new_orders" class="page-wrapper tab-pane fade in">
            <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="color: #000">New Orders</h1>
                    </div>
                    <!-- /.col-lg-12 -->
              </div>

             <table class="table table-striped">
				<thead>
				  <tr>
					<th>Order ID</th>
					<th>Date</th>
					<th>Product Title</th>
					<th>Price</th>
					<th>Status</th>
					<th>View</th>
                    <th>Accept</th>
                    <th>Reject</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>1233</td>
					<td>12-03-2016</td>
					<td>Hisense 40 inch tv</td>
					<td>R3000</td>
					<td> 
						pending
					</td>
					<td><button type="button" class="btn btn-info">View Item</button></td>
                    <td><button type="button" class="btn btn-success">Accept</button></td>
                    <td><button type="button" class="btn btn-danger">Reject</button></td>
				  </tr>
				  <tr>
					<td>1335</td>
					<td>16-03-2016</td>
					<td>Samsung Iron</td>
					<td>R4000</td>
					<td> 
						pending
					</td>
                    <td><button type="button" class="btn btn-info">View Item</button></td>
                    <td><button type="button" class="btn btn-success">Accept</button></td>
                    <td><button type="button" class="btn btn-danger">Reject</button></td>
				  </tr>
				  <tr>
					<td>1279</td>
					<td>12-03-2016</td>
					<td>Philips Microwave</td>
					<td>R4500</td>
					<td> 
						pending
					</td>
					<td><button type="button" class="btn btn-info">View Item</button></td>
                    <td><button type="button" class="btn btn-success">Accept</button></td>
                    <td><button type="button" class="btn btn-danger">Reject</button></td>
				  </tr>
				</tbody>
			  </table>

           </div>
        
      </div>
        
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
   <script type="text/javascript" src="home/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <script src="js/price-range.js"></script>
    <script src="js/price.js"></script>

</body>

</html>
