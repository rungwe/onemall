<?php
ini_set('display_errors',true);
require 'session.php';

custom_handler_init();
session_start();
session_unset();
session_destroy();
	
header("Location: login.php");
	
	

?>