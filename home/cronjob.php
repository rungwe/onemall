<?php
ini_set('display_errors',true);
date_default_timezone_set("Africa/Johannesburg");
$day = strtolower(date("D"));
$time = intval( strtolower(date("G")) );
echo $time."  ".$day;
$status = "verified";
$db = new mysqli("email.c9ssouqvesbm.us-west-2.rds.amazonaws.com","root","email123","Email Subscription");
if($db->connect_error){
	echo $db->connect_error."<br>"."connection not successfull<br>";
	
}

$stm = $db->prepare("SELECT email, category from users where ".$day." = ? and status = ?");
$stm->bind_param("is",$time,$status);

$response = $stm->execute();

if($response){
			echo "successfull prepared statement<br>";
		}
else{
	
			echo "unsuccessful prepared statement<br>";
		}
		

$result = $stm->get_result();

//var_dump($result->fetch_assoc());
	
/* now you can fetch the results into an array - NICE */
while ($myrow = $result->fetch_assoc()) {
	echo "<br> fetched results<br>";
	// use your $myrow array as you would with any other fetch
	
	$questions=get_questions( $myrow["category"]);
	
	send_email($myrow["email"], $questions);

}

function get_questions($var){
	echo 'getting questions for category: '.$var."<br>";
}

function send_email($var1, $var2){
	echo 'sending email to: '.$var1."<br>";
}
?>
