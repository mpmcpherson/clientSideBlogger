<?php

//looks like I can save it into the DB and then get it back out unchanged. Beautiful.
echo htmlspecialchars_decode(htmlspecialchars(file_get_contents('php://input')));

?>