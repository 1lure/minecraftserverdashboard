<?php
if(isset($_POST['whitelist'])) {
    $whitelist = $_POST['whitelist'];
    system("screen -S minecraft -X stuff 'whitelist add $whitelist^M'");
    header('Location: https://mc.remorse.cc/index.php');
} else {
    
};
header('https://mc.remorse.cc/index.php');