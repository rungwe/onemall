<?php
	ini_set('display_errors',true);
	require "session.php";


	//validation
	
	
		if (empty($_POST)){
			
			echo signin_page();
			//echo "testing";
		} 
		
		
		else{
			
			$response = login();
           
            //echo $response;
			if ($response[0]=="200"){
				if($response[2]=="customer"){
				    header("Location: index.php");
				}
                else if($response[2]=="company"){
                    header("Location: home.php");
                }
				
			}
			else{
				//echo "nah it didn't";
				echo signin_page($response[1]);
				//echo $response[0]."<br>".$response[1];
			}
				
				
		}
	
	

?>