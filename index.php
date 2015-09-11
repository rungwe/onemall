<?php

session_set_cookie_params (3600*24*7);
session_start();
require 'session.php';

aunthenticate(main_page());
//phpinfo();

?>