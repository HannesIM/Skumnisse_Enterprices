<?php

if(!isset($_SESSION['login_id'])) {
    echo "Du er ikke logget inn";
    header('refresh:1; url=logginn.php', true, 303);
    die();
}

?>