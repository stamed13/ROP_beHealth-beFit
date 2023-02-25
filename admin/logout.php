<?php
    session_start();
    
    //error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../../E-login/helper/config.php');
    require_once ('../../E-login/helper/Helper.php');

    //header("Location: admin.php");

    if (session_destroy()) {
        $_SESSION["logedAdmin"] = false;
        header("Location: admin.php");
    }

    echo "logout please";
?>