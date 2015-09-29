<?php

header("HTTP/1.1 200 OK");
$file =fopen("debug.txt","w");
$output ="";
foreach( $_POST as $key => $val ){
	    $output.="\t".$key."\t".$val."\n";
	}
fwrite($file, "testing");
fclose($file);

?>