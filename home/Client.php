<?php

	
	$broadcasts = array(
	 array("shop_name"=>"Mr Price","shop_profile_pic"=>"img/mrlog.jpg","poster"=>"img/mrpost.jpg","post_info"=>"hurry for the summer specials","num_likes"=>"12", "liked"=>"liked", "num_comments"=>"18", "time"=>"@30min" , "postID"=>"1234"),
	 array("shop_name"=>"Edgars","shop_profile_pic"=>"img/edprof.png","poster"=>"img/edpost.jpg","post_info"=>"Red Hanger sale","num_likes"=>"10", "liked"=>"", "num_comments"=>"8", "time"=>"@33min" , "postID"=>"32346")
	 );
	 
	 $suggestions = array(
	  array("shop_name"=>"Identity Stores" , "shop_profile_picture"=>"img/edprof.png",  "shop_id"=>"2345" , "num_followers"=>"118"),
	  array("shop_name"=>"Trueworths" , "shop_profile_picture"=>"img/trulog.jpg",  "shop_id"=>"23475" , "num_followers"=>"267"),
	  array("shop_name"=>"Game Stores", "shop_profile_picture"=>"img/glog.jpg",  "shop_id"=>"123475" , "num_followers"=>"473")
	 );
	 //SEND => name: postID , name: pull_comments = 'true'
	//RECEIVE => commenter_name , commenter_picture , comment_txt , comment_time ;
	 $comments = array( 
	  array("commenter_name" => "Sarah", "commenter_picture" => "img/babe.jpg", "comment_txt"=>"hello are there shoes in this special, I wanted to buy as soon as possibly","comment_time"=>"11min")
	 );
	//var id= shop_data["shop_id"], shop_pic = shop_data["shop_wall_picture"], shop_name=shop_data["shop_name"], followers=shop_data["num_followers"];
	 $popular =array(
		array("shop_id"=>"12345", "shop_wall_picture"=>"img/pnp.jpg","shop_name"=>"Pick n Pay","num_followers"=>"1780"),
		array("shop_id"=>"6789", "shop_wall_picture"=>"img/trueworths.jpg","shop_name"=>"Trueworths","num_followers"=>"900"),
		array("shop_id"=>"101112", "shop_wall_picture"=>"img/checkers.jpg","shop_name"=>"Checkers","num_followers"=>"1200"),
		array("shop_id"=>"131415", "shop_wall_picture"=>"img/glomail.jpg","shop_name"=>"Glomail","num_followers"=>"989")
	 );
	
	$recommended =array(
		array("shop_id"=>"16171819", "shop_wall_picture"=>"img/game.jpg","shop_name"=>"Game","num_followers"=>"180"),
		array("shop_id"=>"20212223", "shop_wall_picture"=>"img/istore.png","shop_name"=>"iStore","num_followers"=>"930"),
		array("shop_id"=>"24252627", "shop_wall_picture"=>"img/checkers.jpg","shop_name"=>"Nike","num_followers"=>"412"),
		array("shop_id"=>"252627", "shop_wall_picture"=>"img/adidas.jpg","shop_name"=>"Addidas","num_followers"=>"989"),
		array("shop_id"=>"16171819", "shop_wall_picture"=>"img/mtn.jpg","shop_name"=>"Mtn","num_followers"=>"180"),
		array("shop_id"=>"20212223", "shop_wall_picture"=>"img/md.jpg","shop_name"=>"McDonalds","num_followers"=>"900"),
		array("shop_id"=>"24252627", "shop_wall_picture"=>"img/vodacom.jpg","shop_name"=>"Vodacom","num_followers"=>"560"),
		array("shop_id"=>"252627", "shop_wall_picture"=>"img/identity.jpg","shop_name"=>"identity","num_followers"=>"891")
	 );
	
	$clothing =array(
		array("shop_id"=>"12345", "shop_wall_picture"=>"img/edgars.jpg","shop_name"=>"Edgars","num_followers"=>"480"),
		array("shop_id"=>"6789", "shop_wall_picture"=>"img/mrp.jpg","shop_name"=>"Mr Price","num_followers"=>"200"),
		array("shop_id"=>"101112", "shop_wall_picture"=>"img/trueworths.jpg","shop_name"=>"Trueworths","num_followers"=>"300"),
		array("shop_id"=>"131415", "shop_wall_picture"=>"img/glomail.jpg","shop_name"=>"Glomail","num_followers"=>"689")
	 );
	 
	 $electronics=array(
		array("shop_id"=>"12345", "shop_wall_picture"=>"img/dion.jpg","shop_name"=>"Dion Wired","num_followers"=>"413"),
		array("shop_id"=>"6789", "shop_wall_picture"=>"img/samsung.jpg","shop_name"=>"Samsung","num_followers"=>"345"),
		array("shop_id"=>"101112", "shop_wall_picture"=>"img/istore.png","shop_name"=>"iStore","num_followers"=>"621"),
		array("shop_id"=>"131415", "shop_wall_picture"=>"img/communica.jpg","shop_name"=>"Communica","num_followers"=>"234")
	 );
	 
	 $banks=array(
		array("shop_id"=>"12345", "shop_wall_picture"=>"img/absa.jpg","shop_name"=>"ABSA","num_followers"=>"413"),
		array("shop_id"=>"6789", "shop_wall_picture"=>"img/standard.jpg","shop_name"=>"Standard Bank","num_followers"=>"345"),
		array("shop_id"=>"101112", "shop_wall_picture"=>"img/fnb.jpg","shop_name"=>"FNB","num_followers"=>"621"),
		array("shop_id"=>"131415", "shop_wall_picture"=>"img/nedbank.jpg","shop_name"=>"Nedbank","num_followers"=>"234")
	 );
	 
	 //SEND => name: pull_friends, name: user_id
	 //RECEIVE => name: profile_pic,user_name,user_id, num_following, num_ads, num_mutual_friends;
	 $friends= array(
		array("profile_pic"=>"img/babe.jpg","user_name"=>"Chaddy","user_id"=>"12oe34","num_following"=>"172","num_ads"=>"12","num_mutual_friends"=>"29"),
		array("profile_pic"=>"img/Koala.jpg","user_name"=>"Dejan","user_id"=>"78yda89","num_following"=>"212","num_ads"=>"16","num_mutual_friends"=>"60")
	 );
	 
	 
	if (!empty($_REQUEST["pull_friends"]) or !empty($_REQUEST["pull_followers"]) or !empty($_REQUEST["num_ads"]) or !empty($_REQUEST["num_following"]) or !empty($_REQUEST["num_friends"]) or !empty($_REQUEST["create_ad"]) or !empty($_REQUEST["request_companies"]) or !empty($_REQUEST["put_comment"]) or !empty($_REQUEST["pull_comments"]) or !empty($_REQUEST["request_suggestions"]) or !empty($_REQUEST["pull_broadcasts"]) or !empty($_REQUEST["like_broadcasts"]) or !empty($_REQUEST["unlike_broadcasts"]) ){
		
		

		if (!empty($_REQUEST["pull_broadcasts"])){
			echo json_encode($broadcasts);
		}
		
		else if(!empty($_REQUEST["like_broadcasts"])){
			echo($_REQUEST["postID"]." "."liked successfully");
		}
		
		else if(!empty($_REQUEST["unlike_broadcasts"])){
			echo($_REQUEST["postID"]." "."unliked successfully");
		}
		
		else if(!empty($_REQUEST["request_suggestions"])){
			echo json_encode($suggestions);
		}
		
		else if(!empty($_REQUEST["pull_friends"])){
			echo json_encode($friends);
		}
		
		else if(!empty($_REQUEST["pull_followers"])){
			echo json_encode($recommended);
		}
		
		else if(!empty($_REQUEST["num_friends"])){
			echo 29;
		}
		
		else if(!empty($_REQUEST["num_following"])){
			echo 50;
		}
		
		else if(!empty($_REQUEST["num_ads"])){
			echo 15;
		}
		
		else if(!empty($_REQUEST["pull_comments"])){
			if($_REQUEST["postID"]=="1234"){
				echo json_encode($comments);
			}
			else{
				echo "";
			}
		}
		else if(!empty($_REQUEST["put_comment"])){
			echo "30seconds";
		}
		
		else if(!empty($_REQUEST["request_companies"])){
			
			if($_REQUEST["category"]=="popular") {
				echo json_encode($popular);
			}
			
			else if( $_REQUEST["category"]=="recommended"){
				echo json_encode($recommended);
			}
			else if( $_REQUEST["category"]=="electronics"){
				echo json_encode($electronics);
			}
			
			else if( $_REQUEST["category"]=="clothing"){
				echo json_encode($clothing);
			}
			else if( $_REQUEST["category"]=="banks"){
				echo json_encode($banks);
			}
			
		}
		
		else if( !empty($_REQUEST["create_ad"]) ){
				echo "success";
				//echo $_POST["title"]."\n".$_POST["product_info"]."\n".$_POST["category"];
				/* $pic= array("pic1","pic2","pic3");
				$dir="C:/wamp/tmp/uploads/"."Testing/";
				
				for($i=0;$i<3;$i++){
									// check whether the file has been uploaded
									if(!empty($_FILES[$pic[$i]]["tmp_name"])){
										if($_FILES[$pic[$i]]["size"]>0 and $_FILES[$pic[$i]]["size"]<100000000){
											move_uploaded_file($_FILES[$pic[$i]]["tmp_name"],$dir.basename($_FILES[$pic[$i]]["name"]));
										}
										
									}
									
								} */
			}
	}
	else{
		echo "no ajax call made";
	}






?>
