<?php
	require_once('CouchDBConnection.php');
	require_once('CouchDBRequest.php');
	require_once('CouchDBResponse.php');
	require_once('../config/secretConfig.php');

	//get the posted values...
	$gets = json_decode(file_get_contents('php://input'), true);
	


	$newConn = new CouchDB('test_db','localhost',5984,$uname,$pw);

	$data = "{";

	foreach($gets as $key => $value) {
    	$data = $data .'"'.fullConvertDown($key).'":"'. fullConvertDown($value).'",';
	}
	//I don't feel like writing a bunch of lookaheads to know if I'm at the last element of an object, sooooo I'll just run until the end and then cut the last character (which will be an erroneous ,) out entirely.
	$data = substr($data,0,-1)."}";

	echo $data;
	
	$retVal = $newConn->send('/'.date("d-m-YTh:i:s"), 'PUT', $data);

	echo $retVal->getRawResponse();

	$body = $retVal->getBody();

	$decoded = json_decode($body);

	echo $decoded->rev;


function fullConvertDown($string)
{
	return htmlspecialchars(nl2br2($string), ENT_QUOTES, "UTF-8");
}
function fullConvertUp($string)
{
	echo br2nl(html_entity_decode($out, ENT_QUOTES));			 
}
function br2nl ( $string )
{
    return preg_replace('/\<br(\s*)?\/?\>/i', PHP_EOL, $string);
    
}
function nl2br2 ( $string )
{
    
    return str_replace(["\r\n", "\r", "\n"], '<br/>', $string);
}

?>