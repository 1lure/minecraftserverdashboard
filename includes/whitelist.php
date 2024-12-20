<?php
if(isset($_POST['whitelist'])) {
    $data = file_get_contents('/home/lure/mcserver/whitelist.json');
    $data_array = json_decode($data);

    $input = array(
        'uuid' => " ",
        'name' => $_POST['whitelist']
    );
    $data_array[] = $input;
    $data_array = json_encode($data_array, JSON_PRETTY_PRINT);
    file_put_contents('/home/lure/mcserver/whitelist.json', $data_array); 
} else {
    
};
header('https://mc.remorse.cc/index.php');