<?php
	header('Access-Control-Allow-Origin: *');
	
	$broadcasts = array(
	 array("company"=>array("name"=>"ABC Fashion","profile_pic"=>"img/clogo1.png"),"images"=>array("url"=>"img/br1.jpg"),"details"=>"get ready for the winter, come check out our winter stock","number_of_likes"=>"12", "liked"=>"liked", "number_of_comments"=>"18","number_of_views"=>"12", "minutes"=>"5" , "ID"=>uniqid()),
     array("company"=>array("name"=>"Xtreme","profile_pic"=>"img/clogo2.png"),"images"=>array("url"=>"img/br3.jpg"),"details"=>"Remember the kids, great toys at lower prices","number_of_likes"=>"12", "liked"=>"liked", "number_of_comments"=>"18","number_of_views"=>"12", "minutes"=>"5" , "ID"=>uniqid()),
     array("company"=>array("name"=>"Chicken Spiced Onion","profile_pic"=>"img/clogo3.png"),"images"=>array("url"=>"img/br2.jpg"),"details"=>"Dont forget our wednesday special, get one plate for free","number_of_likes"=>"12", "liked"=>"liked", "number_of_comments"=>"18","number_of_views"=>"12", "minutes"=>"5" , "ID"=>uniqid()),
     array("company"=>array("name"=>"My Paint","profile_pic"=>"img/clogo4.png"),"images"=>array("url"=>"img/br4.jpg"),"details"=>"We continue delivering state of the art paint, meeting your needs is our priority","number_of_likes"=>"12", "liked"=>"liked", "number_of_comments"=>"18","number_of_views"=>"12", "minutes"=>"5" , "ID"=>uniqid()),
     array("company"=>array("name"=>"Infinity","profile_pic"=>"img/clogo5.png"),"images"=>array("url"=>"img/br5.jpg"),"details"=>"Always bringing you high quality shoes","number_of_likes"=>"12", "liked"=>"liked", "number_of_comments"=>"18","number_of_views"=>"12", "minutes"=>"5" , "ID"=>uniqid()),
	 
	 );
	 
	 $suggestions = array(
	  array("name"=>"Identity Stores" , "profile_pic"=>array("url"=>"img/edprof.png", "id"=>32324),  "ID"=>uniqid() , "number_of_followers"=>"118"),
	  array("name"=>"Trueworths" ,"profile_pic"=>array("url"=>"img/trulog.jpg", "id"=>32325),  "ID"=>uniqid() , "number_of_followers"=>"267"),
	  array("name"=>"Game Stores","profile_pic"=>array("url"=>"img/glog.jpg", "id"=>32326),  "ID"=>uniqid() , "number_of_followers"=>"473")
	 );
	 //SEND => name: postID , name: pull_comments = 'true'
	//RECEIVE => commenter_name , commenter_picture , comment_txt , comment_time ;
	 $comments = array( 
	  array("commenter_name" => "Sarah", "commenter_picture" => "img/babe.jpg", "comment_txt"=>"hello are there shoes in this special, I wanted to buy as soon as possibly","comment_time"=>"11min")
	 );
	//var id= shop_data["shop_id"], shop_pic = shop_data["shop_wall_picture"], shop_name=shop_data["shop_name"], followers=shop_data["num_followers"];
	 $recommended =array(
		array("ID"=>123456, "profile_pic"=>array("url"=>"img/pnp.jpg"),"wallpaper"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","number_of_followers"=>"1780"),
		array("ID"=>123457, "profile_pic"=>array("url"=>"img/pnp.jpg"),"wallpaper"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","number_of_followers"=>"1780"),
		array("ID"=>123458, "profile_pic"=>array("url"=>"img/pnp.jpg"),"wallpaper"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","number_of_followers"=>"1780"),
		array("ID"=>123459, "profile_pic"=>array("url"=>"img/pnp.jpg"),"wallpaper"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","number_of_followers"=>"1780"),
	 );
	
	$popular =array(
		array("ID"=>"1234goeg5", "profile_pic"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","num_of_followers"=>"1780"),
		array("ID"=>"12opmn345", "profile_pic"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","num_of_followers"=>"1780"),
		array("ID"=>"1emge2345", "profile_pic"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","num_of_followers"=>"1780"),
		array("ID"=>"1ege2t345", "profile_pic"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","num_of_followers"=>"1780"),
	 );
	
	$clothing =array(
		array("ID"=>"1geg23r45", "profile_pic"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","num_of_followers"=>"1780"),
		array("ID"=>"12hthe3g45", "profile_pic"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","num_of_followers"=>"1780"),
		array("ID"=>"123keke,45", "profile_pic"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","num_of_followers"=>"1780"),
		array("ID"=>"1234dmdmd5", "profile_pic"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","num_of_followers"=>"1780"),
	 );
	 
	 $electronics=array(
		array("ID"=>"1infr2345", "profile_pic"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","num_of_followers"=>"1780"),
		array("ID"=>"nfne12345", "profile_pic"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","num_of_followers"=>"1780"),
		array("ID"=>"1234jjjdue5", "profile_pic"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","num_of_followers"=>"1780"),
		array("ID"=>"1234fbbfhrh5", "profile_pic"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","num_of_followers"=>"1780"),
	 );
	 
	 $banks=array(
		array("ID"=>"ffef12345", "profile_pic"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","num_of_followers"=>"1780"),
		array("ID"=>"1cs2345", "profile_pic"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","num_of_followers"=>"1780"),
		array("ID"=>"1234vse5", "profile_pic"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","num_of_followers"=>"1780"),
		array("ID"=>"123wgweg45", "profile_pic"=>array("url"=>"img/pnp.jpg"),"name"=>"Pick n Pay","num_of_followers"=>"1780"),
	 );
	 
	 //SEND => name: pull_friends, name: user_id
	 //RECEIVE => name: profile_pic,user_name,user_id, num_following, num_ads, num_mutual_friends;
	 $friends= array(
		array("profile_pic"=>"img/babe.jpg","user_name"=>"Chaddy","user_id"=>uniqid(),"num_following"=>"172","num_ads"=>"12","num_mutual_friends"=>"13"),
		array("profile_pic"=>"img/Koala.jpg","user_name"=>"Dejan","user_id"=>uniqid(),"num_following"=>"212","num_ads"=>"18","num_mutual_friends"=>"2"),
        array("profile_pic"=>"img/Koala.jpg","user_name"=>"Tinotenda","user_id"=>uniqid(),"num_following"=>"212","num_ads"=>"6","num_mutual_friends"=>"10"),
        array("profile_pic"=>"img/Koala.jpg","user_name"=>"Tariro","user_id"=>uniqid(),"num_following"=>"212","num_ads"=>"11","num_mutual_friends"=>"5"),
        array("profile_pic"=>"img/Koala.jpg","user_name"=>"Tinashe","user_id"=>uniqid(),"num_following"=>"212","num_ads"=>"27","num_mutual_friends"=>"3"),
        array("profile_pic"=>"img/Koala.jpg","user_name"=>"Gracia","user_id"=>uniqid(),"num_following"=>"212","num_ads"=>"9","num_mutual_friends"=>"7")
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
