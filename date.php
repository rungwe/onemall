<?php

//$date =new Date();
$current_date = date_create();
$prev_date = date_create_from_format("d.m.y","8.9.15");

echo "Current date ".date_format($current_date,"d.m.y");

echo "<br>Previous session date ".date_format($prev_date,"d.m.y");

$diff=date_diff($current_date,$prev_date);
$value =$diff->format("%a");
$value = intval($value);
echo "<br> difference between dates ".$value;

?>