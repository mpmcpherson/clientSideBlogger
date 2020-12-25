<?php
$postdata = http_build_query(
    array(
        'ipAdd' => $_SERVER['REMOTE_ADDR'],
        'var2' => 'doh'
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context  = stream_context_create($opts);

$result = file_get_contents('http://example.com/submit.php', false, $context);
?>