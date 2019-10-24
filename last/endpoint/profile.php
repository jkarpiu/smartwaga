<?php
if(isset($_POST)){
    echo "\n\n\n";
    if(isset($_POST['data'])){
    $token = $_POST['data'];

    echo $token;

    $opts = array('http' =>
    array(
        'method' => 'GET',
        'header' => 'Content-Type: application/json',
        'content' => '')
    );
        
    $result = file_get_contents('https://httpbin.org/get', false, stream_context_create($opts));

    $response = json_decode($result);

    echo $response;

    foreach($item as $response)
      echo $item;

}}
?>