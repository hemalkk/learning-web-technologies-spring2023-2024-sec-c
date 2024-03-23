<?php
    session_start();
    session_destroy();
    setcookie('flag', 'true', time()-10, '/');
    header('location: ../view/signOutSMS.php');
    exit();
?>
