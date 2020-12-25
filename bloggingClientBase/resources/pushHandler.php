<?php

//in another php file, get a handle to the results of mysqli_connect. 
//In this case, it's literally named $dbhandle (see below).
require 'defaultConnector.php';


$gets = json_decode(file_get_contents('php://input'), true);

//var_dump($gets);

$ua_string = html_entity_decode($gets['UA_String']);
$ipAdd = html_entity_decode($gets['ipAdd']);



$qq = "INSERT INTO logging(`UA_String` , `ipAdd`, `logTime`, `programId`) VALUES ('".$ua_string."','".$ipAdd."','".gmdate('Y-m-d H:i:s')."','".strval(1)."')";//should actually rig up a call-and-response here so each program knows its id

    

$result = mysqli_query($dbhandle, $qq);

//var_dump($result);
?>

