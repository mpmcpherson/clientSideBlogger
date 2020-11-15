<?php

//looks like I can save it into the DB and then get it back out unchanged. Beautiful.


file_put_contents("posts/".date, htmlspecialchars(file_get_contents('php://input')));

?>