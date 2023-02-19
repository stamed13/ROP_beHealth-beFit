<?php
    session_start();
    
    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../helper/config.php');
    require_once ('../helper/Helper.php');

    if (session_destroy()) {
        header(actualLocation());
        //echo actualLocation();
        //echo $_SESSION["location"];
    }

?>