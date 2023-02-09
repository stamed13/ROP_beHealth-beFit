<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../E-login/helper/config.php');
    require_once ('../E-login/helper/Helper.php');

    function update($conn){
        $sql = "INSERT INTO activities (pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (1, 1, 1, 1, 1, 1, 1, 1)";
        //$sql = "SELECT * FROM users";

        if (mysqli_query($conn, $sql)) {
            echo "USPECH!!!";
        } else {
            echo "CHYBA!!!";
        }
  
        mysqli_close($conn);
    }

    update($conn);
?>