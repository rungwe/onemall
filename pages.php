<?php

function signup_page($message=""){
	
	$page='<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
		<link src="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/typicons.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/popup.css">
		<link rel="stylesheet" href="css/form-elements.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/media-query.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="img/log3.png">
		<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"> </script>
    </head>

    <body>
    
        
				
        <!-- Top content -->
        <div class="top-content" style="position: relative; z-index: 0; background: none;">
        	
        	<!-- Top menu -->
			<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!--<a class="navbar-brand" src="img/log3.png">One MALL</a> -->
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="top-navbar-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="scroll-link" href="#features">Features</a></li>
							<li><a class="scroll-link" href="#how-it-works">How it works</a></li>
							<li><a class="scroll-link" href="#testimonials">Testimonials</a></li>
							<li><a class="btn btn-link-2" href="login.php">Login</a></li>
						</ul>
					</div>
				</div>
			</nav>
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            <h1 class="wow fadeInLeftBig animated animated" style="visibility: visible; animation-name: fadeInLeftBig;">At one place, at one time<br> <strong>on One Market</strong></h1>
                            <div class="description wow fadeInLeftBig animated animated" style="visibility: visible; animation-name: fadeInLeftBig;">
                            	<p style="color:black;font-weight:400;">
									
										<big>
											<i>
												We bring everything closer to you, at one place, at your finger tips.
												Buy, sell your products, tell the world what you do, Grow your business.
												Stay connected.
											</i>
										</big>
									
                            	</p>
                            </div>
                            <div class="top-big-link wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                            	<a class="btn btn-link-1 " href="login.php">Login</a>
                            	<a class="btn btn-link-2 scroll-link" href="#features">Learn more</a>
                            </div>
                        </div>
                        <div class="col-sm-5 wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;background-color: rgba(5,4,2,0);">
                        	<div class="form-top" style="background-color: rgba(5,4,2,0.1);">
                        		<div class="form-top-left">
                        			<h3 style="color:white;">Sign up now</h3>
                            		
                        		</div>
                        		<div class="form-top-right">
                        			<span aria-hidden="true" class="glyphicon glyphicon-pencil"></span>
                        		</div>
                            </div>
                            <div class="form-bottom" style="background-color: rgba(5,4,2,0.1);">
								<h3 style="color:red;" id="error">'.$message.'</h3>
			                    <form role="form" action="registration.php" method="post" id ="reg-form">
									<input type="hidden"  name="signup" value="true">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">First name</label>
			                        	<input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name" value="">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">Last name</label>
			                        	<input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name" value="">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
			                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email" value="">
			                        </div>
									 <div class="form-group">
			                        	<label class="sr-only" for="pswd">Password</label>
			                        	<input type="password" name="pswd" placeholder="Enter password" class="form-email form-control" id="pswd" value="">
			                        </div>
									 <div class="form-group">
			                        	<label class="sr-only" for="pswd1">confirm password</label>
			                        	<input type="password" name="pswd1" placeholder="Confirm password" class="form-email form-control" id="pswd1" value="">
			                        </div>
                                    <style>
                                        .type{
                                            background-color: white;
                                            color: #004A6E;
                                        }
                                    </style>
			                        <div class="btn-group pull-right" data-toggle="buttons">
                                        <label class="btn btn-primary type active">
                                        <input type="radio" name="options" id="option1" autocomplete="off" value="customer" checked> Individual
                                        </label>
                                        <label class="btn btn-primary type">
                                        <input type="radio" name="options" id="option2" autocomplete="off" value="merchant">Merchant
                                        </label>
                                        <label class="btn btn-primary type">
                                        <input type="radio" name="options" id="option2" autocomplete="off" value="company">Organisation
                                        </label>
                                        
                                    </div><br><br>
			                        <button type="button" onclick="validate_reg_form()" class="btn" style="background-color:#004A6E;">Sign me up!</button>
			                        <div class="form-links">
			                        	<a href="#" class="launch-modal" data-modal-id="modal-privacy">Privacy Policy</a> - 
			                        	<a href="#" class="launch-modal" data-modal-id="modal-faq">FAQ</a>
			                        </div>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 907px; width: 100%; z-index: -999998; position: absolute;">
                <img src="img/main3.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 947.25px; max-height: none; max-width: none; z-index: -999999; left: 0px; top: -20.125px;" class="deleteable">
            </div>
        </div>
        
        <!-- Features -->
        <div class="features-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 features section-description wow fadeIn animated" style="visibility: hidden; animation-name: none;">
	                    <h2>What is included</h2>
	                    <div class="divider-1 wow fadeInUp" style="visibility: hidden; animation-name: none;"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
                	<div class="col-sm-4 features-box features-box-gray wow fadeInUp" style="visibility: hidden; animation-name: none;">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span>
	                	</div>
	                    <h3>Access to Products</h3>
	                    <p>Get access to a massive and gigantic market which is made up by Individuals like you selling their products, Large enterprise merchants and Small startup merchants.</p>
                    </div>
                    <div class="col-sm-4 features-box wow fadeInDown" style="visibility: hidden; animation-name: none;">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-usd"></span>
	                	</div>
	                    <h3>Post Ads</h3>
	                    <p>You want to sell your personal stuff? This is the right place for you, we offer you a platform to market and sell your goods easily and get paid quickly</p>
                    </div>
					<div class="col-sm-4 features-box features-box-gray wow fadeInUp" style="visibility: hidden; animation-name: none;">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-retweet"></span>
	                	</div>
	                    <h3>Get connected</h3>
	                    <p>Do not be left behind, Stay connected to the market, we keep you updated to your favourite companies. Be the first one to know when they make specials. Get access to all the companies</p>
                    </div>
					 
                   
	            </div>
	            <div class="row">
                	<div class="col-sm-4 features-box wow fadeInUp" style="visibility: hidden; animation-name: none;">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-credit-card"></span>
	                	</div>
	                    <h3>Sell online</h3>
	                    <p>Are you a startup merchant? or A large Enterprise? either way growth is not a bad idea. Lets get you started by putting your store and your products online with no worries about the IT infrastructure and capabilities to archive this. We carry that burden </p>
                    </div>
                    <div class="col-sm-4 features-box features-box-gray wow fadeInDown" style="visibility: hidden; animation-name: none;">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-blackboard"></span>
	                	</div>
	                    <h3>Create a Page</h3>
	                    <p>Its time to get your business known. Easily create a profile page where everyone is able to get to know about you more as well as your products and services. Interact with the community and know what they think, improve the Business</p>
                    </div>
                    <div class="col-sm-4 features-box features-box wow fadeInUp" style="visibility: hidden; animation-name: none;">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-globe"></span>
	                	</div>
	                    <h3>Connect to your customers</h3>
	                    <p>Are you a company? Lets get you connected to your customers in real time. We give you a platform to interact with your customers, know how they think and what they want.</p>
                    </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 section-bottom-button wow fadeInUp" style="visibility: hidden; animation-name: none;">
                        <a class="btn btn-link-1 scroll-link" href="#top-content">Get Started</a>
	            	</div>
	            </div>
	        </div>
        </div>

		<!-- More features -->
        <div class="more-features-container section-container section-container-gray-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 more-features section-description wow fadeIn" style="visibility: hidden; animation-name: none;">
	                    <h2>More features</h2>
	                    <div class="divider-1 wow fadeInUp" style="visibility: hidden; animation-name: none;"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-5 more-features-box wow fadeInLeft" style="visibility: hidden; animation-name: none;">
	                    <img src="img/pc.png" alt="">
	                </div>
	                <div class="col-sm-7 more-features-box wow fadeInUp" style="visibility: hidden; animation-name: none;">
	                    <div class="more-features-box-text">
	                    	<div class="more-features-box-text-icon">
	                    		<span aria-hidden="true" class="glyphicon glyphicon-send"></span>
	                    	</div>
	                    	<h3>Courier Service</h3>
	                    	<div class="more-features-box-text-description">
	                    		Are you courier services company? Come Lets work together with a common goal of delivering goods to customers.
	                    	</div>
	                    </div>
	                    <div class="more-features-box-text">
	                    	<div class="more-features-box-text-icon">
	                    		<span aria-hidden="true" class="glyphicon glyphicon-stats"></span>
	                    	</div>
	                    	<h3>Commercial Ads</h3>
	                    	<div class="more-features-box-text-description">
	                    		Lets get your business boosted, we have variety of packages for commercial adverts, whether you are a Large enterprise or startup, we will suit your needs. 
	                    	</div>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>
        
        <!-- Always beautiful -->
        <div class="always-beautiful-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 always-beautiful section-description wow fadeIn" style="visibility: hidden; animation-name: none;">
	                    <h2>What we do</h2>
	                    <div class="divider-1 wow fadeInUp" style="visibility: hidden; animation-name: none;"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-7 always-beautiful-box wow fadeInLeft" style="visibility: hidden; animation-name: none;">
	                    <div class="always-beautiful-box-text always-beautiful-box-text-left">
	                    	<h3>First things first</h3>
	                    	<p class="medium-paragraph">
	                    		We work to provide social and commerce internet products which run smoothly and efficiently 
	                    		to make companies as well as individual startups get connected together to their customers and strengthen that bond.
	                    	</p>
	                    	<p>
	                    		We offer you a live community where individuals are able to know more in detail about the companies around them and help them
								access their services and products easily. An online platform where people are able to buy all sorts of physical products instantly and 
								get them delivered through available courier companies of their choice at very very cheaper rates due to economies of scale. Yes we have integrated courier service companies 
								within our system as well.
								We are also up to providing marketing to all companies, get them known better than before. Helping the startups and individual to get started and integrate them into global commerce
								without much difficulties, we carry them through our shoulder. 
	                    	</p>
	                    </div>
	                </div>
	                <div class="col-sm-5 always-beautiful-box wow fadeInUp" style="visibility: hidden; animation-name: none;">
	                    <img src="img/pc2.png" alt="">
	                </div>
	            </div>
	        </div>
        </div>
        
        <!-- How it works -->
        <div class="how-it-works-container section-container section-container-image-bg" style="position: relative; z-index: 0; background: none;">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 how-it-works section-description wow fadeIn" style="visibility: hidden; animation-name: none;">
	                    <h2>Ready in 4 steps</h2>
	                    <div class="divider-1 wow fadeInUp" style="visibility: hidden; animation-name: none;"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
                	<div class="col-sm-4 col-sm-offset-1 how-it-works-box wow fadeInUp" style="visibility: hidden; animation-name: none;">
	                	<div class="how-it-works-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-pencil"></span>
	                		<span aria-hidden="true" class="how-it-works-step">1</span>
	                	</div>
	                    <h3><strong>Sign up</strong></h3>
	                    <p><b><i>Yes its free and easy, we will not take much of your time to get you registered</i></b></p>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 how-it-works-box wow fadeInDown" style="visibility: hidden; animation-name: none;">
	                	<div class="how-it-works-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-user"></span>
	                		<span aria-hidden="true" class="how-it-works-step">2</span>
	                	</div>
	                    <h3><strong>Create your profile</strong></h3>
	                    <p><b>How about knowing each other a little bit more? Lets also get you verified</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1 how-it-works-box wow fadeInUp" style="visibility: hidden; animation-name: none;">
	                	<div class="how-it-works-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-lock"></span>
	                		<span aria-hidden="true" class="how-it-works-step">3</span>
	                	</div>
	                    <h3><strong>Log in</strong></h3>
	                    <p><b><i>Have you signed up? Bingo, put your login credentials and you are good to go. Just remember to keep them safe</i></b></p>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 how-it-works-box wow fadeInDown" style="visibility: hidden; animation-name: none;">
	                	<div class="how-it-works-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-briefcase"></span>
	                		<span aria-hidden="true" class="how-it-works-step">4</span>
	                	</div>
	                    <h3><strong>Get started</strong> </h3>
	                    <p><b><i>Are you an individual? its time to buy products, and maybe sell. Are you an individual merchant? this is prime time, get known. Oh you are a company? do what you got to do.</i></b></p>
                    </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 section-bottom-button wow fadeInUp" style="visibility: hidden; animation-name: none;">
                        <a class="btn btn-link-1 scroll-link" href="#top-content">Sign up now</a>
	            	</div>
	            </div>
	        </div>
            <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 918px; width: 100%; z-index: -999998; position: absolute;">
                <img src="img/main5.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 947.25px; max-height: none; max-width: none; z-index: -999999; left: 0px; top: -14.625px;" class="deleteable">
                
            </div>
        </div>

        <!-- Testimonials -->
        <div class="testimonials-container section-container section-container-gray-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 testimonials section-description wow fadeIn" style="visibility: hidden; animation-name: none;">
	                    <h2>Testimonials</h2>
	                    <div class="divider-1 wow fadeInUp" style="visibility: hidden; animation-name: none;"><span></span></div>
	                </div>
	            </div>
	           
	        </div>
        </div>

        <!-- Footer -->
        <footer>
	        <div class="container">
	        	
	            <div class="row">
                    <div class="col-sm-12 footer-copyright">
                    	© One Market
                    </div>
                </div>
	        </div>
        </footer>
        
        
        <!-- MODAL: Privacy policy -->
        <div class="modal fade" id="modal-privacy" tabindex="-1" role="dialog" aria-labelledby="modal-privacy-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">×</span><span class="sr-only">Close</span>
        				</button>
        				<h2 class="modal-title" id="modal-privacy-label">Privacy policy</h2>
        			</div>
        			<div class="modal-body">
        				<h3>1. Dolor sit amet</h3>
        				<p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                    <ul>
	                    	<li>Easy To Use</li>
	                    	<li>Awesome Design</li>
	                    	<li>Cloud Based</li>
	                    </ul>
	                    <p>
	                    	Ut wisi enim ad minim veniam, <a href="http://azmind.com/premium/marco/v1-9/layout-1/index.php#">quis nostrud exerci tation</a> ullamcorper suscipit lobortis nisl ut aliquip ex ea 
	                    	commodo consequat nostrud tation.
	                    </p>
	                    <h3>2. Sed do eiusmod</h3>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                    <h3>3. Nostrud exerci tation</h3>
	                    <p>
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea 
	                    	commodo consequat nostrud tation.
	                    </p>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
        			</div>
        			<div class="modal-footer">
        				<button type="button" class="btn" data-dismiss="modal">Close</button>
        			</div>
        		</div>
        	</div>
        </div>
        
        <!-- MODAL: Frequent questions -->
        <div class="modal fade" id="modal-faq" tabindex="-1" role="dialog" aria-labelledby="modal-faq-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">×</span><span class="sr-only">Close</span>
        				</button>
        				<h2 class="modal-title" id="modal-faq-label">Frequent questions</h2>
        			</div>
        			<div class="modal-body">
        				<h3>1. Lorem ipsum dolor?</h3>
        				<p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                    <h3>2. Ut wisi enim ad minim?</h3>
	                    <p>
	                    	Ut wisi enim ad minim veniam, <a href="http://azmind.com/premium/marco/v1-9/layout-1/index.php#">quis nostrud exerci tation</a> ullamcorper suscipit lobortis nisl ut aliquip ex ea 
	                    	commodo consequat nostrud tation.
	                    </p>
	                    <h3>3. Sed do eiusmod tempor?</h3>
	                    <p>
	                    	Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                    <h3>4. Nostrud exerci tation?</h3>
	                    <p>
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea 
	                    	commodo consequat nostrud tation.
	                    </p>
	                    <h3>5. Consectetur adipisicing elit?</h3>
	                    <p>
	                    	Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
        			</div>
        			<div class="modal-footer">
        				<button type="button" class="btn" data-dismiss="modal">Close</button>
        			</div>
        		</div>
        	</div>
        </div>


        <!-- Javascript -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="./Marco - Bootstrap Landing Page_files/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/retina-1.1.0.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/script.js"></script>
		<script src ="js/registration.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    

</body></html>';

return $page;
	
}

function signin_page($message=""){
	
	$page='<!DOCTYPE html>

<html lang="en"><head>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
		<link src="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/typicons.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/popup.css">
		<link rel="stylesheet" href="css/form-elements.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/media-query.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="img/log3.png">
		<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"> </script>
    </head>

    <body>
    
        <!-- Loader -->
    	<div class="loader" style="display: none;">
    		<div class="loader-img" style="display: none;"></div>
    	</div>
				
        <!-- Top content -->
        <div class="top-content" style="position: relative; z-index: 0; background: none;">
        	
        	<!-- Top menu -->
			<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="top-navbar-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="scroll-link" href="#features">Features</a></li>
							<li><a class="scroll-link" href="#how-it-works">How it works</a></li>
							<li><a class="scroll-link" href="#testimonials">Testimonials</a></li>
							<li><a class="btn btn-link-2" href="signup.php">Sign up</a></li>
						</ul>
					</div>
				</div>
			</nav>
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            <h1 class="wow fadeInLeftBig animated animated" style="visibility: visible; animation-name: fadeInLeftBig;">At one place, at one time<br> <strong>on One Market</strong></h1>
                            <div class="description wow fadeInLeftBig animated animated" style="visibility: visible; animation-name: fadeInLeftBig;">
                            	<p style="color:black;font-weight:400;">
									
										<big>
											<i>
												We bring everything closer to you, at one place, at your finger tips.
												Buy, sell your products, tell the world what you do, Grow your business.
												Stay connected.
											</i>
										</big>
									
                            	</p>
                            </div>
                            <div class="top-big-link wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                            	<a class="btn btn-link-1 " href="signup.php">Sign up</a>
                            	<a class="btn btn-link-2 scroll-link" href="#features">Learn more</a>
                            </div>
                        </div>
                        <div class="col-sm-5 wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;background-color: rgba(5,4,2,0);">
                        	<div class="form-top" style="background-color: rgba(5,4,2,0.1);">
                        		<div class="form-top-left">
                        			<h3 style="color:white;">Log in</h3>
                            		
                        		</div>
                        		<div class="form-top-right">
                        			<span aria-hidden="true" class="glyphicon glyphicon-lock"></span>
                        		</div>
                            </div>
                            <div class="form-bottom" style="background-color: rgba(5,4,2,0.1);">
								<h3 style="color:red;" id="error">'.$message.'</h3>
			                    <form role="form" action="signin.php" method="post">
			                    	<input type="hidden"  name="login" value="true">
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
			                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
			                        </div>
									 <div class="form-group">
			                        	<label class="sr-only" for="pswd">Password</label>
			                        	<input type="password" name="pswd" placeholder="Enter password" class="form-email form-control" id="pswd">
			                        </div>
			                        
			                        <button type="submit" class="btn" style="background-color:#004A6E;">Log in</button>
			                        <div class="form-links">
			                        	<a href="#" class="launch-modal" data-modal-id="modal-privacy">Privacy Policy</a> - 
			                        	<a href="#" class="launch-modal" data-modal-id="modal-faq">FAQ</a>
			                        </div>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 907px; width: 100%; z-index: -999998; position: absolute;">
                <img src="img/main3.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 947.25px; max-height: none; max-width: none; z-index: -999999; left: 0px; top: -20.125px;" class="deleteable">
        
            </div>
        </div>
        
        <!-- Features -->
        <div class="features-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 features section-description wow fadeIn animated" style="visibility: hidden; animation-name: none;">
	                    <h2>What is included</h2>
	                    <div class="divider-1 wow fadeInUp" style="visibility: hidden; animation-name: none;"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
                	<div class="col-sm-4 features-box features-box-gray wow fadeInUp" style="visibility: hidden; animation-name: none;">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span>
	                	</div>
	                    <h3>Access to Products</h3>
	                    <p>Get access to a massive and gigantic market which is made up by Individuals like you selling their products, Large enterprise merchants and Small startup merchants.</p>
                    </div>
                    <div class="col-sm-4 features-box wow fadeInDown" style="visibility: hidden; animation-name: none;">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-usd"></span>
	                	</div>
	                    <h3>Post Ads</h3>
	                    <p>You want to sell your personal stuff? This is the right place for you, we offer you a platform to market and sell your goods easily and get paid quickly</p>
                    </div>
					<div class="col-sm-4 features-box features-box-gray wow fadeInUp" style="visibility: hidden; animation-name: none;">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-retweet"></span>
	                	</div>
	                    <h3>Get connected</h3>
	                    <p>Do not be left behind, Stay connected to the market, we keep you updated to your favourite companies. Be the first one to know when they make specials. Get access to all the companies</p>
                    </div>
					 
                   
	            </div>
	            <div class="row">
                	<div class="col-sm-4 features-box wow fadeInUp" style="visibility: hidden; animation-name: none;">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-credit-card"></span>
	                	</div>
	                    <h3>Sell online</h3>
	                    <p>Are you a startup merchant? or A large Enterprise? either way growth is not a bad idea. Lets get you started by putting your store and your products online with no worries about the IT infrastructure and capabilities to archive this. We carry that burden </p>
                    </div>
                    <div class="col-sm-4 features-box features-box-gray wow fadeInDown" style="visibility: hidden; animation-name: none;">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-blackboard"></span>
	                	</div>
	                    <h3>Create a Page</h3>
	                    <p>Its time to get your business known. Easily create a profile page where everyone is able to get to know about you more as well as your products and services. Interact with the community and know what they think, improve the Business</p>
                    </div>
                    <div class="col-sm-4 features-box features-box wow fadeInUp" style="visibility: hidden; animation-name: none;">
	                	<div class="features-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-globe"></span>
	                	</div>
	                    <h3>Connect to your customers</h3>
	                    <p>Are you a company? Lets get you connected to your customers in real time. We give you a platform to interact with your customers, know how they think and what they want.</p>
                    </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 section-bottom-button wow fadeInUp" style="visibility: hidden; animation-name: none;">
                        <a class="btn btn-link-1 scroll-link" href="#top-content">Get Started</a>
	            	</div>
	            </div>
	        </div>
        </div>

		<!-- More features -->
        <div class="more-features-container section-container section-container-gray-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 more-features section-description wow fadeIn" style="visibility: hidden; animation-name: none;">
	                    <h2>More features</h2>
	                    <div class="divider-1 wow fadeInUp" style="visibility: hidden; animation-name: none;"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-5 more-features-box wow fadeInLeft" style="visibility: hidden; animation-name: none;">
	                    <img src="img/pc.png" alt="">
	                </div>
	                <div class="col-sm-7 more-features-box wow fadeInUp" style="visibility: hidden; animation-name: none;">
	                    <div class="more-features-box-text">
	                    	<div class="more-features-box-text-icon">
	                    		<span aria-hidden="true" class="glyphicon glyphicon-send"></span>
	                    	</div>
	                    	<h3>Courier Service</h3>
	                    	<div class="more-features-box-text-description">
	                    		Are you courier services company? Come Lets work together with a common goal of delivering goods to customers.
	                    	</div>
	                    </div>
	                    <div class="more-features-box-text">
	                    	<div class="more-features-box-text-icon">
	                    		<span aria-hidden="true" class="glyphicon glyphicon-stats"></span>
	                    	</div>
	                    	<h3>Commercial Ads</h3>
	                    	<div class="more-features-box-text-description">
	                    		Lets get your business boosted, we have variety of packages for commercial adverts, whether you are a Large enterprise or startup, we will suit your needs. 
	                    	</div>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>
        
        <!-- Always beautiful -->
        <div class="always-beautiful-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 always-beautiful section-description wow fadeIn" style="visibility: hidden; animation-name: none;">
	                    <h2>What we do</h2>
	                    <div class="divider-1 wow fadeInUp" style="visibility: hidden; animation-name: none;"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-7 always-beautiful-box wow fadeInLeft" style="visibility: hidden; animation-name: none;">
	                    <div class="always-beautiful-box-text always-beautiful-box-text-left">
	                    	<h3>First things first</h3>
	                    	<p class="medium-paragraph">
	                    		We work to provide social and commerce internet products which run smoothly and efficiently 
	                    		to make companies as well as individual startups get connected together to their customers and strengthen that bond.
	                    	</p>
	                    	<p>
	                    		We offer you a live community where individuals are able to know more in detail about the companies around them and help them
								access their services and products easily. An online platform where people are able to buy all sorts of physical products instantly and 
								get them delivered through available courier companies of their choice at very very cheaper rates due to economies of scale> Yes we have integrated courier service companies 
								within our system as well.
								We are also up to providing marketing to all companies, get them known better than before. Helping the startups and individual to get started and integrate them into global commerce
								without much difficulties, we carry them through our shoulder. 
	                    	</p>
	                    </div>
	                </div>
	                <div class="col-sm-5 always-beautiful-box wow fadeInUp" style="visibility: hidden; animation-name: none;">
	                    <img src="img/pc2.png" alt="">
	                </div>
	            </div>
	        </div>
        </div>
        
        <!-- How it works -->
        <div class="how-it-works-container section-container section-container-image-bg" style="position: relative; z-index: 0; background: none;">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 how-it-works section-description wow fadeIn" style="visibility: hidden; animation-name: none;">
	                    <h2>Ready in 4 steps</h2>
	                    <div class="divider-1 wow fadeInUp" style="visibility: hidden; animation-name: none;"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
                	<div class="col-sm-4 col-sm-offset-1 how-it-works-box wow fadeInUp" style="visibility: hidden; animation-name: none;">
	                	<div class="how-it-works-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-pencil"></span>
	                		<span aria-hidden="true" class="how-it-works-step">1</span>
	                	</div>
	                    <h3><strong>Sign up</strong></h3>
	                    <p><b><i>Yes its free and easy, we will not take much of your time to get you registered</i></b></p>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 how-it-works-box wow fadeInDown" style="visibility: hidden; animation-name: none;">
	                	<div class="how-it-works-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-user"></span>
	                		<span aria-hidden="true" class="how-it-works-step">2</span>
	                	</div>
	                    <h3><strong>Create your profile</strong></h3>
	                    <p><b>How about knowing each other a little bit more? Lets also get you verified</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1 how-it-works-box wow fadeInUp" style="visibility: hidden; animation-name: none;">
	                	<div class="how-it-works-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-lock"></span>
	                		<span aria-hidden="true" class="how-it-works-step">3</span>
	                	</div>
	                    <h3><strong>Log in</strong></h3>
	                    <p><b><i>Have you signed up? Bingo, put your login credentials and you are good to go. Just remember to keep them safe</i></b></p>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 how-it-works-box wow fadeInDown" style="visibility: hidden; animation-name: none;">
	                	<div class="how-it-works-box-icon">
	                		<span aria-hidden="true" class="glyphicon glyphicon-briefcase"></span>
	                		<span aria-hidden="true" class="how-it-works-step">4</span>
	                	</div>
	                    <h3><strong>Get started</strong> </h3>
	                    <p><b><i>Are you an individual? its time to buy products, and maybe sell. Are you an individual merchant? this is prime time, get known. Oh you are a company? do what you got to do.</i></b></p>
                    </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 section-bottom-button wow fadeInUp" style="visibility: hidden; animation-name: none;">
                        <a class="btn btn-link-1 scroll-link" href="index.php">Sign up now</a>
	            	</div>
	            </div>
	        </div>
            <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 918px; width: 100%; z-index: -999998; position: absolute;">
                <img src="img/main5.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 100%; height: 947.25px; max-height: none; max-width: none; z-index: -999999; left: 0px; top: -14.625px;" class="deleteable">
            </div>
        </div>

        <!-- Testimonials -->
        <div class="testimonials-container section-container section-container-gray-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 testimonials section-description wow fadeIn" style="visibility: hidden; animation-name: none;">
	                    <h2>Testimonials</h2>
	                    <div class="divider-1 wow fadeInUp" style="visibility: hidden; animation-name: none;"><span></span></div>
	                </div>
	            </div>
	            
	        </div>
        </div>

        <!-- Footer -->
        <footer>
	        <div class="container">
	        	
	            <div class="row">
                    <div class="col-sm-12 footer-copyright">
                    	© One Market
                    </div>
                </div>
	        </div>
        </footer>
        
        
        <!-- MODAL: Privacy policy -->
        <div class="modal fade" id="modal-privacy" tabindex="-1" role="dialog" aria-labelledby="modal-privacy-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">×</span><span class="sr-only">Close</span>
        				</button>
        				<h2 class="modal-title" id="modal-privacy-label">Privacy policy</h2>
        			</div>
        			<div class="modal-body">
        				<h3>1. Dolor sit amet</h3>
        				<p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                    <ul>
	                    	<li>Easy To Use</li>
	                    	<li>Awesome Design</li>
	                    	<li>Cloud Based</li>
	                    </ul>
	                    <p>
	                    	Ut wisi enim ad minim veniam, <a href="http://azmind.com/premium/marco/v1-9/layout-1/index.php#">quis nostrud exerci tation</a> ullamcorper suscipit lobortis nisl ut aliquip ex ea 
	                    	commodo consequat nostrud tation.
	                    </p>
	                    <h3>2. Sed do eiusmod</h3>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                    <h3>3. Nostrud exerci tation</h3>
	                    <p>
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea 
	                    	commodo consequat nostrud tation.
	                    </p>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
        			</div>
        			<div class="modal-footer">
        				<button type="button" class="btn" data-dismiss="modal">Close</button>
        			</div>
        		</div>
        	</div>
        </div>
        
        <!-- MODAL: Frequent questions -->
        <div class="modal fade" id="modal-faq" tabindex="-1" role="dialog" aria-labelledby="modal-faq-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">×</span><span class="sr-only">Close</span>
        				</button>
        				<h2 class="modal-title" id="modal-faq-label">Frequent questions</h2>
        			</div>
        			<div class="modal-body">
        				<h3>1. Lorem ipsum dolor?</h3>
        				<p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                    <h3>2. Ut wisi enim ad minim?</h3>
	                    <p>
	                    	Ut wisi enim ad minim veniam, <a href="http://azmind.com/premium/marco/v1-9/layout-1/index.php#">quis nostrud exerci tation</a> ullamcorper suscipit lobortis nisl ut aliquip ex ea 
	                    	commodo consequat nostrud tation.
	                    </p>
	                    <h3>3. Sed do eiusmod tempor?</h3>
	                    <p>
	                    	Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                    <h3>4. Nostrud exerci tation?</h3>
	                    <p>
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea 
	                    	commodo consequat nostrud tation.
	                    </p>
	                    <h3>5. Consectetur adipisicing elit?</h3>
	                    <p>
	                    	Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
        			</div>
        			<div class="modal-footer">
        				<button type="button" class="btn" data-dismiss="modal">Close</button>
        			</div>
        		</div>
        	</div>
        </div>


        <!-- Javascript -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="./Marco - Bootstrap Landing Page_files/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/retina-1.1.0.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/script.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    

</body></html>';

return $page;	
}



?>