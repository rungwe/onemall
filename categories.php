<?php
ini_set('display_errors',true);
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
											'.$category.'
										</a>
									</h4>
								</div>';
        }
        else{
            $html_result.='<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">'.$category.'</a></h4>
								</div>
							</div>';
        }
        if ( count($sub_category)!=0 ){
             $html_result.= '<div id="'.$id.'" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>';
            foreach($sub_category as $value){
            $html_result.= '<li><a href="#">'.$value.' </a></li>';

            }
            $html_result.='</ul>
									</div>
								</div>';
        }
        $id=$id +1;
    }
    return $html_result;
}
//echo generate_category();

/*
**/
?>

 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>

        <meta charset="utf-8">
    <link rel="icon" href="img/log3.png"/>
	<meta name="viewport" content="width=1024">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://s3.eu-central-1.amazonaws.com/userinterface-scripts/Scripts/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://s3.eu-central-1.amazonaws.com/userinterface-scripts/Scripts/css/prettyPhoto.css" rel="stylesheet">
    <link href="https://s3.eu-central-1.amazonaws.com/userinterface-scripts/Scripts/css/price-range.css" rel="stylesheet">
	<link href="css/myshops.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<link href="home/css/main.css" rel="stylesheet">
    <link href="./menu_files/style-24.css" rel="stylesheet">
	<link href="https://s3.eu-central-1.amazonaws.com/userinterface-scripts/Scripts/css/responsive.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/constants.js"></script>
    <script type="text/javascript" src="home/js/navigation-drawer.js"></script>
    <script type="text/javascript" src="home/js/products.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head>
    <body>
        <div class="col-sm-3">
             <div class="panel-group category-products" id="accordian" style="background-color:"><!--category-productsr-->
							
							    <?php
                                    echo generate_category();
                                ?>
							
		        </div><!--/category- products-->   
        </div>  
     <script src="js/bootstrap.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/price.js"></script>            
    </body>
    
</html>