<?php
require 'session.php';

custom_handler_init();
session_start();
session_unset();
session_destroy();
	
header("Location: signin.php");
	
	

?>