<?php

	//require "signin.php";
	require "session.php";
	//validation

	if (empty($_POST)){
		
		echo signup_page("empty fields");
	}
	
	
	else{
	
			//register
			$url="http://ec2-52-88-102-30.us-west-2.compute.amazonaws.com/account/Register";
			//$url="testreg.php";
			$fields = array(
                                'lname' => $_POST["form-last-name"],
	                            'fname' => $_POST["form-first-name"],
                                'type'=> $_POST["options"],
								'Email' => $_POST["form-email"],
								'Password' => $_POST["pswd"],
								'ConfirmPassword' => $_POST["pswd1"]
						);
          

			
			$data = json_encode($fields);
			//$data ='{"Email":"test@admin.com","Password":"12345678","PasswordConfirm":"12345678"}';
			//echo $data;
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);                                                                  
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
				'Content-Type: application/json',                                                                                
				'Content-Length: ' . strlen($data))                                                                       
			);  
			
			$result = curl_exec($ch);
			$code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
			curl_close($ch);
			
			
			//echo $code."<br>".$result;
			
			
			
			//login the user
			if ($code=="200"){
				
				//echo "attempting to login";
				$response = login();
				
				if ($response[0]=="200"){
				    //echo $response[0]."<br>".$response[1]."<br> registration login testing";
					header("Location: index.php");
				}
				else{
					
					echo signin_page($response[1]);
					//echo $response[0]."<br>".$response[1];
				}
				
			}
			
			//throw error message 
			else{
				
				$msg = json_decode($result);
				$error = "";
				foreach( $msg->ModelState as $key => $val ){
					 $error.=$val[0]." <br>";
				}
				
				echo signup_page($error);
                //echo "Error code: \t".$code."<br> Error message: \t".$error."<br> error json: \t".$result;
			}
			
			//{"Message":"The request is invalid.","ModelState":{"model.ConfirmPassword":["The password and confirmation password do not match."]}}
	}
?>