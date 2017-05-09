<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('content-type: text/plain');

$json = fopen("stof.json","r");
$string = fread($json,filesize("stof.json"));
$stof = array();

//convert json stream to an array
$stof = json_decode($string,true);

//var_dump(json_decode($string));

//print json data array
print_r($stof);

?>
