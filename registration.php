<?php

	//require "signin.php";
	require "session.php";
	//validation
	
	session_set_cookie_params (3600*24*365);
	session_start();
	
	
	
	//'l' => urlencode($_POST["form-last-name"]),
	//'fname' => urlencode($_POST["form-first-name"]),
	if (empty($_POST)){
		
		echo signup_page("Error, form is empty");
	}
	
	
	else{
	
			//register
			$url="http://ec2-52-88-102-30.us-west-2.compute.amazonaws.com/account/Register";
			//$url="testreg.php";
			 $fields = array(
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
				
				
				$response = login();
				$out="fcvbn";
				foreach( $_SESSION as $key => $val ){
					 $out.=$key." <br>".$val;
				}
				echo $out;
				if ($response[0]=="200"){
					//create session
					//$_SESSION['email'] = $_POST['form-email'];
					
					//echo $status[0]."<br>".$status[1];
					header("Location: index.php");
				}
				else{
					
					//echo signin_page($response[1]);
					echo $status[0]."<br>".$status[1];
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
			}
			
			//{"Message":"The request is invalid.","ModelState":{"model.ConfirmPassword":["The password and confirmation password do not match."]}}
	}
?>