<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rop_behealth_befit";

    //vytvorenie pripojenia

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //kontrola pripojenia

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error() );
    } else {
        echo "Connect success!";
    }
?>