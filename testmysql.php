<?php 
$link = new mysqli('mysqldatabase.chujykwc6ihz.us-west-2.rds.amazonaws.com:3306','admin','project123'); 
if (!mysqli_connect_errno()){
	
		echo "<p> Connection successful thank you!! you are far to kind<br> database tables creation starting</p>";
	}
	else{
		echo  mysqli_connect_errno();
	}
?> 