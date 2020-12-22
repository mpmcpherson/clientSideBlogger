<?php
namespace REST_API;
require '../../vendor/autoload.php';
//$loader->addPsr4('rest\\api\\',__DIR__);

//use rest\api\config;





$post = new blogPost();
$post->construct();

$post->abstractPrint();





function iterative_dump($ary)
{
	foreach($ary as $key => $value) {
		echo "Key: ".$key." value: ".$value."\n";
	}		
}
// get_class_vars($loader);

//var_dump($loader);
?>

