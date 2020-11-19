<?php

//looks like I can save it into the DB and then get it back out unchanged. Beautiful.
$user = "";
$pass = "";
$server = "";
$path = "/posts/";
$text = "";


$gets = json_decode(file_get_contents('php://input'), true);
//$gets = json_decode('{"username":"dh_rdc44b","password":"Adein1Dva2!","server":"blog.mpmcpherson.com","text":""}',true);

//var_dump($gets);

$user = $gets["username"];
$pass = $gets["password"];
$server = $gets["server"];
//$path = $_POST["path"];
$text = $gets["text"];





//file_put_contents("../frontEnd/posts/".date("Y-m-d H:i:s"), htmlspecialchars(file_get_contents('php://input')));

// create a stream context telling PHP to overwrite the file 
$options = array('ftp' => array('overwrite' => true));
$stream = stream_context_create($options);

// and finally, put the contents 
file_put_contents($hostname, $content, 0, $stream); 
$connectionString = "ssh2.sftp://" . $user . ":" . $pass . "@" . $server . ":22" . "/home/".$user.$path.date("Y-m-d H:i:s");

echo $connectionString;

file_put_contents($connectionString, $text, 0, $stream);

?>