<?php
$renewal_date = 20231017000000;

$year1 = substr($renewal_date, 0, 4);
$month1 = substr($renewal_date, 4, 2);
$day1 = substr($renewal_date, 6, 2);
$renewal_date = $year1."-".$month1."-".$day1;

var_dump($renewal_date);
?>