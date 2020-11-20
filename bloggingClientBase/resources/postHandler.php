<?php
require 'SFTPConnector.php';

$user = "";
$pass = "";
$server = "";
$path = "/posts/";
$text = "";


$gets = json_decode(file_get_contents('php://input'), true);

//var_dump($gets);

$user = $gets["username"];
$pass = $gets["password"];
$server = $gets["server"];
//$path = $_POST["path"];
$text = $gets["text"];

$outgoingFile = date("Y-m-d H:i:s");
file_put_contents("../posts/".$outgoingFile, $text);

$fullOutPath = "/home/".$user."/".$server.$path.$outgoingFile;


//with enormous respect to David Barnes of PHP.net
try
{
    $sftp = new SFTPConnection($server, 22);
    $sftp->login($user, $pass);
    $sftp->uploadFile("../posts/".$outgoingFile, $fullOutPath);
    echo "success?";
}
catch (Exception $e)
{
    echo $e->getMessage() . "\n";
}

?>