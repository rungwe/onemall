<?php
    session_start();
    
    if(empty($_SESSION){
        echo "invalid";
    }  
    else{
        echo $_SESSION["token"];
    } 

?>


