<?php
if(isset($_POST['whitelist'])) {
    $whitelist = $_POST['whitelist'];
    $command = "screen -S minecraft -X stuff 'whitelist add $whitelist^M'";
    system($command);
    header('Location: ../index.php');
} else {
    
};
header('../index.php');