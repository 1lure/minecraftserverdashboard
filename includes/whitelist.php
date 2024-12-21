<?php
if(isset($_POST['whitelist'])) {
    $whitelist = $_POST['whitelist'];
    $filtered_whitelist = str_replace(array(',', ' ', '!', '/', '\\', '[', ']', '{', "}", '.', ':', ';', '"', '-', '@', '#', '$', '%', '^', '&', '*', '(', ')', '+', '=', '`', '~', '?', '<', '>'), '', $whitelist);
    $command = "screen -S minecraft -X stuff 'whitelist add $filtered_whitelist^M'";
    system($command);
    header('Location: ../index.php');
} else {
    
};
header('../index.php');