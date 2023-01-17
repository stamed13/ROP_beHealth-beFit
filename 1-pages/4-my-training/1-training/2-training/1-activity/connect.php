<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "rop_behealth_befit";

    //vytvorenie pripojenia

    $con = mysqli_connect($serverName, $userName, $password, $dbName);

    if (mysqli_connect_error()) {
        echo "Failed to connect!";
        exit();
    }

    echo "Connect success!";

?>