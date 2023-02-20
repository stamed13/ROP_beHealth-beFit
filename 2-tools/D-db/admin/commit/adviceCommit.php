<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../../E-login/helper/config.php');
    require_once ('../../E-login/helper/Helper.php');

    if( $_SESSION["logedAdmin"] == false ){
        header("Location: admin.php");
    }

    //len zmeny v tabulke advice
    function commitAdvice($conn){
        //ak mam nove udaje pridam tu insert aj update, pripadne ine prikazy
        $sql = "INSERT INTO advice (idAdvice, name) VALUES (1, 'Máš normálnu váhu.')";
        mysqli_query($conn, $sql);
        $sql = "INSERT INTO advice (idAdvice, name) VALUES (2, 'Máš nadváhu.')";
        mysqli_query($conn, $sql);
        $sql = "INSERT INTO advice (idAdvice, name) VALUES (3, 'Máš nízku váhu.')";
        mysqli_query($conn, $sql);
        $sql = "INSERT INTO advice (idAdvice, name) VALUES (4, 'Máš obezitu.')";
        mysqli_query($conn, $sql);
        $sql = "INSERT INTO advice (idAdvice, name) VALUES (5, 'Tesim sa, ze cvicis dost casto.')";
        mysqli_query($conn, $sql);
        $sql = "INSERT INTO advice (idAdvice, name) VALUES (6, 'Tesim sa, cvicis rovnomerne na vsetky partie.')";
        mysqli_query($conn, $sql);
        $sql = "INSERT INTO advice (idAdvice, name) VALUES (20, 'row 20')";
        mysqli_query($conn, $sql);

        //
        mysqli_close($conn);
    }
?>