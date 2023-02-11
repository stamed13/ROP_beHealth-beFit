<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../E-login/helper/config.php');
    require_once ('../E-login/helper/Helper.php');

    function updateACTIVITY($conn){
        //somarina, nepouzitelna tabulka, vela moznosti...

        // vyprazdenie tabulke
        $sql = "TRUNCATE TABLE activities";
        mysqli_query($conn, $sql);

        // naplnenie tabulky vsetkymi moznymi
        // len 1, 2, 3
        $sql = "INSERT INTO activities (idActivity) VALUES (1)";   mysqli_query($conn, $sql);
        $sql = "UPDATE activities SET pullCa='1', pushCa='1', coreCa='1', legCa='1', neckSt='1', handSt='1', backSt='1', legSt='1' WHERE idActivity=1";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity) VALUES (2)";   mysqli_query($conn, $sql);
        $sql = "UPDATE activities SET pullCa='2', pushCa='2', coreCa='2', legCa='2', neckSt='2', handSt='2', backSt='2', legSt='2' WHERE idActivity=2";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity) VALUES (3)";   mysqli_query($conn, $sql);
        $sql = "UPDATE activities SET pullCa='3', pushCa='3', coreCa='3', legCa='3', neckSt='3', handSt='3', backSt='3', legSt='3' WHERE idActivity=3";
        mysqli_query($conn, $sql);


        


        /*
        $sql = "INSERT INTO activities (idActivity) VALUES (35)";
        mysqli_query($conn, $sql);
        $sql = "UPDATE activities SET pullCa='0', pushCa='0', coreCa='0', legCa='0', neckSt='0', handSt='0', backSt='0', legSt='0' WHERE idActivity=50";
        mysqli_query($conn, $sql);
        */

        if (mysqli_query($conn, $sql)) {
            echo "USPECH!!!";
        } else {
            echo "CHYBA!!!";
        }
  
        mysqli_close($conn);
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update-DB</title>
</head>
<body>
    <h1>ADMIN</h1>

    <?php updateACTIVITY($conn); ?>

</body>
</html>