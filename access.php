<?php
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
    header("Location: index.php");
    
}

?>


