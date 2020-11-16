<?php

//looks like I can save it into the DB and then get it back out unchanged. Beautiful.


file_put_contents("../posts/".date("Y-m-d H:i:s"), htmlspecialchars(file_get_contents('php://input')));

//file_get_contents('ssh2.sftp://user:pass@example.com:22/path/to/filename');

?>