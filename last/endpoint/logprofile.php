<?php
    $opts = array('http' =>
    array(
        'method' => 'GET',
        'header' => 'Content-Type: application/json',
        'content' => '')
    );
        
    $result = file_get_contents('https://httpbin.org/get', false, stream_context_create($opts));

    $response = json_decode($result);
    echo $response -> {"origin"};

?>