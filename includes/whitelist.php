<?php
if(isset($_POST['whitelist'])) {
    $whitelist = $_POST['whitelist'];
    system(`screen -S minecraft -X stuff 'whitelist add $whitelist^M'`);
    header('Location: ../index.php');
} else {
    
};
header('../index.php');