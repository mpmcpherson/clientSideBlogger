<?php

//looks like I can save it into the DB and then get it back out unchanged. Beautiful.
$user = "";
$pass = "";
$server = "";
$path = "";
$data = "";

file_put_contents("../frontEnd/posts/".date("Y-m-d H:i:s"), htmlspecialchars(file_get_contents('php://input')));

/* create a stream context telling PHP to overwrite the file */
$options = array('ftp' => array('overwrite' => true));
$stream = stream_context_create($options);

/* and finally, put the contents */
file_put_contents($hostname, $content, 0, $stream); 

file_put_contents("ssh2.sftp://" . $user . ":" . $pass . "@" . $server . ":22" . $path, $data, 0, $stream);

?>