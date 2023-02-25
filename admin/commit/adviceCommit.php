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
        $sql = "UPDATE advice SET name='Máš normálnu váhu.' WHERE idAdvice=1";
        mysqli_query($conn, $sql);

        //
        mysqli_close($conn);
        //
        //Skus viac posilovat ruky.
        //Skus viac posilovat nohy.
        //Skus viac strecovat chrbat.
        //Skus viac strecovat nohy.
        //Ak mas bolesti hlavy alebo zapastia skus prosim strecovat krk alebo ruky (to co robi problem).
        //Si zaciatocnik, pokojne cvic dalej, vysledky pomaly pridu.
        //Si pokrocily, este mozes posunut svoje schopnosti.
        //Si expert, pokojne si zlepsuj.
    }
?>