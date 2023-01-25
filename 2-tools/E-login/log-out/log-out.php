<?php
    session_start();
    
    error_reporting(E_ERROR);// E_ALL, E_WARNING

    if (session_destroy()) {
        header("Location: ../../../index.php");
    }

    /*
        function logout($currentPage){
        if (session_destroy()) {
            header("Location: $currentPage");
        }
    }*/
?>