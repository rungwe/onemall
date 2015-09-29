<?php
	session_set_cookie_params (3600*24*365);
	session_start();
	require "session.php";

	//validation
	
	
		if (empty($_POST)){
			
			echo signin_page("Error, form is empty");
			//echo "testing";
		} 
		
		
		else{
			
			$response = login();
			if ($response[0]=="200"){
				//create session
				//$_SESSION['email'] = $_POST['form-email'];
				
				//echo $response[0]."<br>".$response[1];
				header("Location: index.php");
			}
			else{
				
				echo signin_page($response[1]);
				//echo $response[0]."<br>".$response[1];
			}
				
				
		}
	
	

?>