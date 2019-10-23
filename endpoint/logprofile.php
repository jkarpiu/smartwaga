<?php
    $opts = array('http' =>
    array(
        'method' => 'GET',
        'header' => 'Content-Type: application/json',
        'header' => 'Authorization: Bearer ya29.Il-pB30txhZ1Ypgwe6RqCMYS20D_xNffXu-IOZJHgmJd7s8PYMqiSadFgGvQkUFIxQypk1MGxDKpuSn95PlA9aqznkarU1hgIekz1IBqaP_PV6ALLop6o8K5Ds7PPWwI2A',
        'content' => '')
    );
        
    $result = file_get_contents('https://www.googleapis.com/fitness/v1/users/me/dataSources', false, stream_context_create($opts));

    $response = json_decode($result);

    echo $response;

?>