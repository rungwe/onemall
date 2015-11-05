<?php

	//email, category, mon, tue, wed, fri, sat, sun
	// insert into users () values ()
	$fields = array("email","category","mon","tue","wed","thur","fri","sat","sun");
	if(!empty($_POST) ){
		if(empty($_POST["email"])){
			echo "no email supplied";
			exit();
		}
		if(empty($_POST["category"])){
			echo "no category supplied";
			exit();
		}
		$db = new mysqli("email.c9ssouqvesbm.us-west-2.rds.amazonaws.com","root","email123","Email Subscription");
		if($db->connect_error){
			echo $db->connect_error."<br>"."connection not successfull";
			
		}
		$stmt = $db->prepare("INSERT INTO users (email,category, mon,tue,wed,thur,fri,sat,sun) VALUES(?,?,?,?,?,?,?,?,?) ON DUPLICATE KEY UPDATE mon =?, tue=?, wed=?,thur=?,fri=?,sat=?,sun=?");
		 if(!$stmt)  //if there is an error, then it will be shown!. 
         { // show error                                                                                                       
          echo $db->error;
		  exit();
          } else {
           // everything is good to go !. 
         }
		foreach($fields as $field){
			if (empty($_POST[$field]) ){
				$_POST[$field]=null;
			}
		}
		
		$stmt->bind_param('ssiiiiiiiiiiiiii',$_POST["email"],$_POST["category"],$_POST["mon"],$_POST["tue"],$_POST["wed"],$_POST["thur"],$_POST["fri"],$_POST["sat"],$_POST["sun"],$_POST["mon"],$_POST["tue"],$_POST["wed"],$_POST["thur"],$_POST["fri"],$_POST["sat"],$_POST["sun"]);
		$response = $stmt->execute();
		
		if($response){
			echo "success";
		}
		else{
			echo "unsuccessful";
		}
		
	}
	else{
		echo "no input found";
	}

 



?>