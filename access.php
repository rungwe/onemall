<?php
ini_set('display_errors',true);
require 'session.php';
//custom_handler_init();
session_start();

if(!empty($_REQUEST["request"])){
        
    if( empty($_SESSION) ) {
        echo "invalid";
    }  
    else{
        echo $_SESSION["token"];
        
    } 

}
else{
    header("Location: login.php");
    
}

?>


