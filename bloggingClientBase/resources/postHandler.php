<?php

//print_r($_GET, TRUE)
//file_put_contents('php://stderr', var_dump($_GET));

//echo $_POST["value"];
echo var_dump($HTTP_RAW_POST_DATA);
//file_put_contents("testData.txt", file_get_contents('php://input'));
//echo $_POST["value"];

?>