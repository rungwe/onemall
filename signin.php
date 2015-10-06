<?php
	ini_set('display_errors',true);
	require "session.php";


	//validation
	
	
		if (empty($_POST)){
			
			echo signin_page();
			//echo "testing";
		} 
		
		
		else{
			echo "login starting<br>";
			$response = login();
            echo "login finished<br>";
            //echo $response;
			if ($response[0]=="200"){
				//create session
				//$_SESSION['email'] = $_POST['form-email'];
				//"it worked";
				//echo $response[0]."<br>".$response[1];
				header("Location: index.php");
			}
			else{
				//echo "nah it didn't";
				echo signin_page($response[1]);
				//echo $response[0]."<br>".$response[1];
			}
				
				
		}
	
	

?>