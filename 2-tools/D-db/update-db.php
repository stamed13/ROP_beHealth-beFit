<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../E-login/helper/config.php');
    require_once ('../E-login/helper/Helper.php');

    function update($conn){
        // naplnenie tabulky vsetkymi moznymi
        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (1, 1, 1, 1, 1, 1, 1, 1, 1)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (2, 2, 1, 1, 1, 1, 1, 1, 1)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (3, 2, 2, 1, 1, 1, 1, 1, 1)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (4, 2, 2, 2, 1, 1, 1, 1, 1)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (5, 2, 2, 2, 2, 1, 1, 1, 1)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (6, 2, 2, 2, 2, 2, 1, 1, 1)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (7, 2, 2, 2, 2, 2, 2, 1, 1)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (8, 2, 2, 2, 2, 2, 2, 2, 1)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (9, 2, 2, 2, 2, 2, 2, 2, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (10, 1, 2, 2, 2, 2, 2, 2, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (11, 1, 1, 2, 2, 2, 2, 2, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (12, 1, 1, 1, 2, 2, 2, 2, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (13, 1, 1, 1, 1, 2, 2, 2, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (14, 1, 1, 1, 1, 1, 2, 2, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (15, 1, 1, 1, 1, 1, 1, 2, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (16, 1, 1, 1, 1, 1, 1, 1, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (17, 2, 1, 2, 2, 2, 2, 2, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (18, 2, 1, 2, 1, 2, 2, 2, 2)";

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (19, 2, 1, 2, 1, 1, 2, 2, 2)";
        mysqli_query($conn, $sql);        

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (20, 2, 1, 2, 1, 1, 1, 2, 2)";
        mysqli_query($conn, $sql);        

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (21, 2, 1, 2, 1, 1, 1, 1, 2)";
        mysqli_query($conn, $sql);        

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (22, 2, 1, 2, 1, 1, 1, 1, 1)";
        mysqli_query($conn, $sql);        

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (23, 2, 2, 1, 2, 2, 2, 2, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (24, 2, 2, 1, 2, 1, 2, 2, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (25, 2, 2, 1, 2, 1, 1, 2, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (26, 2, 2, 1, 2, 1, 1, 1, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (27, 2, 2, 1, 2, 1, 1, 1, 1)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (28, 2, 2, 2, 1, 2, 2, 2, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (29, 2, 2, 2, 1, 2, 1, 2, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (30, 2, 2, 2, 1, 2, 1, 1, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (31, 2, 2, 2, 1, 2, 1, 1, 1)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (32, 2, 2, 2, 2, 1, 2, 2, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (32, 2, 2, 2, 2, 1, 2, 1, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (33, 2, 2, 2, 2, 1, 2, 1, 1)";
        mysqli_query($conn, $sql);
        
        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (34, 2, 2, 2, 2, 2, 1, 2, 2)";
        mysqli_query($conn, $sql);

        $sql = "INSERT INTO activities (idActivity, pullCa, pushCa, coreCa, legCa, neckSt, handSt, backSt, legSt) 
        VALUES (35, 2, 2, 2, 2, 2, 1, 2, 1)";
        mysqli_query($conn, $sql);

        //$sql = "SELECT * FROM users";

        if (mysqli_query($conn, $sql)) {
            echo "USPECH!!!";
        } else {
            echo "CHYBA!!!";
        }
  
        mysqli_close($conn);
    }

    
?>

<h1>ADMIN</h1>

<?php update($conn); ?>
