<?php
ini_set('display_errors',true);
date_default_timezone_set('Africa/Johannesburg');
 /*
SESSION data email, username, timestamp, token, token-exp 
 
 
 */
 
 // Global variables
 define('SESSION_DURATION',3); // number of days
 define('TOKEN_DURATION', 13);
 require 'pages.php';
 require 'CustomSessionHandler.php';
 
 
 

 function aunthenticate(){
	     $branch=0;
	
		if (empty($_SESSION)){ // check if a session existed before
			$output.="\n session variables are not set \ncurrent session id:".session_id();
				$branch=1;	
		}
					
					
		else{
						
			if (is_session_valid()){
				update_session_time();
				$branch=3; //go to home page
							
			}
			else{
				delete_session();
							 
				$branch=2; //go to login
							
			}
		}
	
	if($branch==1 or $branch==2){
		header("Location: login.php");
	}
	else {
		// proceed  to 
	}
	
	
 }
 
 
 function customer_restricted(){
     if (empty($_SESSION)){
         return;
     }
     else if($_SESSION["type"]!="customer"){
			        header("Location: home.php");
                    exit();
	  }
      else{
          header("Location: logout.php");
          exit();
      }
 }

 function company_restricted(){
     if (empty($_SESSION)){
         return;
     }
     else if($_SESSION["type"]!="company"){
			        header("Location: index.php");
                    exit();
	  }
      else{
          header("Location: logout.php");
          exit();
      }
 }

 function is_session_valid(){
	    if(empty($_SESSION['timestamp']) or empty($_SESSION['token-issue']) ){
	        return FALSE;
	    }
		$session = duration($_SESSION['timestamp']);
		$token =  duration($_SESSION['token-issue']);
		if ($session>SESSION_DURATION){
			return false;
		}
		
		else if($token>TOKEN_DURATION){
			return false;
		}
		else if(empty($_SESSION["token"])){
			return false;
		}
		else{
			return true;
		}
 }
 
 function delete_session(){
	 session_unset();
	 session_destroy();
	 
 }
 
function verify_inputs(){
	 return true;
 }

function duration($date){
	$session = date_create_from_format("d.m.y",$date);
	$current = date_create();
	$diff =date_diff($current,$session);
	$value =$diff->format("%a");
	$value = intval($value);
	
	return $value;
}

function create_session($access){
	 //SESSION data email, username, timestamp, token, token-issue 
	 $_SESSION['timestamp']= update_session_time();
	 $_SESSION['token-issue']=update_session_time();
	 $_SESSION['email'] = $_POST['form-email'];
	 $_SESSION['token'] = $access->access_token;
     $_SESSION['type'] = $access->accountType; 
	 	
 }
 
 function update_session_time(){
	$current_date = date_create();
	$date_string = date_format($current_date,"d.m.y");
	return $date_string;
	
 }
 
 function login(){
	//login
			$url="http://ec2-52-32-82-172.us-west-2.compute.amazonaws.com/Token";
			
			 $fields = array(
								'grant_type'=>"password",
								'username' => $_POST["form-email"],
								'password' => $_POST["pswd"]
						);
			
			$fields_string="";
			foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
			rtrim($fields_string, '&');
			
			
			$ch = curl_init($url);
			
			curl_setopt($ch,CURLOPT_POST, count($fields));
			curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);                                                                  
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
			
			
			$result = curl_exec($ch);
			$code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
			curl_close($ch);
			
			
			$msg = json_decode($result);
			
			//login the user
			if ($code=="200"){
				$response =  Array($code,$result,$msg->accountType);
                custom_handler_init();
                //return $status;
                session_set_cookie_params (3600*24*365);
	            session_start();
				create_session($msg);
				return $response;
				
			}
			
			//throw error message 
			else{
				$response =  Array($code,$msg->error_description);
				//echo $msg->error_description."  ".$code;
                header("Location: login.php?error=".urlencode($msg->error_description."  Error code".$code));
				
			}
}

function custom_handler_init(){
    $handler = new CustomSessionHandler();
    $status = session_set_save_handler(
    array($handler, "open"),
    array($handler, "close"),
    array($handler, "read"),
    array($handler, "write"),
    array($handler, "destroy"),
    array($handler, "gc")
    );

    register_shutdown_function('session_write_close');
    return $status;
}

function init(){
    ini_set('display_errors',true);
    require 'components.php';
    custom_handler_init();
    session_start();
}

 
?>