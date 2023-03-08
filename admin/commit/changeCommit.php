<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../2-tools/E-login/helper/config.php');
    require_once ('../2-tools/E-login/helper/Helper.php');

    if( $_SESSION["logedAdmin"] == false ){
        header("Location: admin.php");
    }

    //rozne zmeny, uprava tabuliek a databazy
    function commitChange($conn){
        //ak mam nove udaje pridam tu insert aj update, pripadne ine prikazy

        

        //
        mysqli_close($conn);
    }
?>