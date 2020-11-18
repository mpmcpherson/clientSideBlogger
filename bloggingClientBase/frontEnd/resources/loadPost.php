<?php
echo htmlspecialchars_decode(file_get_contents("../posts/".file_get_contents('php://input')));
?>

