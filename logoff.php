<?php
    session_start();

    // print_r($_SESSION);

    // unset($_SESSION['x']);
    // print_r($_SESSION);

    // session_destroy();
    // print_r($_SESSION);

    session_destroy();
    header('Location: index.php');
?>