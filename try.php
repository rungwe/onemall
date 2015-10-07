<?php
require 'session.php';
custom_handler_init();
session_start();
echo $_SESSION['timestamp'];

?>


