<?php

$loader = require __DIR__.'/vendor/autoload.php';
$loader->addPsr4('rest\\api\\',__DIR__);

//require_once '/shared/abstractRestConnection.php';
//require_once 'vendor/michaelmcpherson/php-insecure-rest/api/shared/abstractRestConnection.php';
//require_once '/objects/blogPost.php';
//require_once 'vendor/michaelmcpherson/php-insecure-rest/api/objects/blogPost.php';


echo "\nclassMap\n";
iterative_dump($loader->getClassMap());


echo "\nclass methods\n";
iterative_dump(get_class_methods($loader));

echo "\nobject vars\n";
//iterative_dump();
//echo get_class_vars(gettype($loader));

var_dump($loader);


function iterative_dump($ary)
{
	foreach($ary as $key => $value) {
		echo "Key: ".$key." value: ".$value."\n";
	}		
}
// get_class_vars($loader);

//var_dump($loader);
?>

