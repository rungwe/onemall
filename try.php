<?php
	session_start();
	$out="fcvbn";
	foreach( $_SESSION as $key => $val ){
					 $out.=$key."\t".$val."<br>";
				}
	echo $out;
?>