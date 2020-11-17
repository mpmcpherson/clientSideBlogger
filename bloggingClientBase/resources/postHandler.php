<?php

//looks like I can save it into the DB and then get it back out unchanged. Beautiful.
$user = "";
$pass = "";
$server = "";
$path = "";

file_put_contents("../frontEnd/posts/".date("Y-m-d H:i:s"), htmlspecialchars(file_get_contents('php://input')));

file_put_contents("ssh2.sftp://" . $user . ":" . $pass . "@" . $server . ":22" . $path);

?>