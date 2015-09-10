<?php

 
 /*
SESSION data username, timestamp, token, name, ip_address
 
 login script
	function aunthenticate(string $page_html)
	1) check if there is an existing session.
 
					if session does not exist:
						if $_POST is empty:
							throw a sign up page
							return control
						else:
							if $_POST['login']:
								verify_inputs()
								login_user()
								if(login):
									create_session()
									go to home page
								else:
									throw login page with an error msg
									return control
								
							if $_POST['signup']:
								verify_inputs()
								register_user()
								create_session()
								go to home page
						return control
						
					else if session does exist and is not stale: is_session(), is_session_valid()
						update session timestamp
						proceed to requested page echo $page_html
						return control
					
					else if session exist and has expired:
						delete session 	delete_session()
						throw the login page
						return control
	
	end of function
	
	function is_session():
		if session_id()=='':
			return false
		else
			return true
		
	function is_session_valid(){
		$session = date_create_from_format("d.m.y",$_SESSION['timestamp']);
		$current = date_create();
		$diff =date_diff($current,$session);
		$value = diff=>format("%a");
		$value = intval($value);
		if (value<=3){
			return true;
		}
		else{
			return false;
		}
	}
 */
 
 // Global variables
 define('SESSION_DURATION',3); // number of days
 require 'pages.php';
 require 'home/pages.php';
 
 
 function aunthenticate($page_html){
	//1) check if there is an existing session.
					start_session();
 
					if (!is_session() ){
						if ( empty($_POST) ){
							//throw a sign up page, its most likely to be the first time the user has visited the page
							echo signup_page();
							return;
						}
						else{
							if ( !empty($_POST['login']) ){  // if its a login query
								$verify=verify_inputs();
								$login_status = login_user();
								if(login_status and $verify){
									create_session();
									header("Location: home/index.php"); //go to home page
									return;
								}
								else{
									//throw login page with an error msg
									echo signin_page();
									return;
								}
							}
								
							else if (!empty($_POST['signup'])){
								$verify = verify_inputs();
								$reg_status = register_user();
								
								if ($verify and $reg_status){
									create_session();
									header("Location: home/index.php"); //go to home page
									return;
								}
								else{
									//go back  to sign up page
									echo signup_page();
									return;
								}
								
							}
						}
						return;
					}
					
						
					else{
						if (is_session_valid()){
							update_session_time();
							echo $page_html;
							return;
						}
						else{
							delete_session();
							//throw the login page
							echo signin_page();
							return;
						}
					}
	//end of function
 }
 
 function create_session(){
	 //SESSION data firstname, email, timestamp, token, name, ip_address
	 session_start();
	 update_session_time();
	 $_SESSION['username']=$_POST['form-first-name'];
	 $_SESSION['email'] = $_POST['form-email'];
	 $_SESSION['lastname'] = $_POST['form-last-name'];
		
 }

 function is_session_valid(){
		$session = date_create_from_format("d.m.y",$_SESSION['timestamp']);
		$current = date_create();
		$diff =date_diff($current,$session);
		$value =$diff->format("%a");
		$value = intval($value);
		if (value<=SESSION_DURATION){
			return true;
		}
		else{
			return false;
		}
 }
 
 function is_session(){
	 if (empty($_SESSION)){
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
 
 function register_user(){
	 return true;
 }
 
 function login_user(){
	 return true;
 }
 
 function update_session_time(){
	$current_date = date_create();
	$date_string = date_format($current_date,"d.m.y");
	$_SESSION['timestamp']= $date_string;
	
 }
 
 
 




?>