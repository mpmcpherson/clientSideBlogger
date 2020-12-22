<?php
namespace REST_API;
require '../../vendor/autoload.php';

$gets = json_decode(file_get_contents('php://input'), true);

$user = $gets["username"];
$pass = $gets["password"];

$subject = $gets["subject"];
$text = $gets["text"];

$outgoingFile = date("Y-m-d H:i:s");

try
{

	$post = new blogPost();
	$post->construct($user,$pass,'test_db','127.0.0.1');

	$post->author=$user;
	$post->subject=$subject;
	$post->body=$text;

	$post->POST();

}
catch(Exception $e)
{
    echo $e->getMessage() . "\n";
}
?>

