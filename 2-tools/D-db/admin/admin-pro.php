<?php
    session_start();

    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../E-login/helper/config.php');
    require_once ('../E-login/helper/Helper.php');

    $password = "rootDB";
    $_SESSION["logedAdmin"] = false;

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

    if( $_POST["logout"] ){
        $_SESSION["logedAdmin"] = false;

    }

    if( $_POST["submit"] ){

    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../B-media/real-icon3.png" type="image/x-icon" />
    <link rel="stylesheet" href="../A-styles/global.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/header-mobile.css">
    <link rel="stylesheet" href="../A-styles/content.css">
    <link rel="stylesheet" href="../A-styles/footer.css">
    <link rel="stylesheet" href="styles/database.css">

    <title>DB admin</title>
</head>
<body>
    <?php
        //pripojenie header casti
        include('layout/header.php');
    ?>
    
    <div id="content">
        <div id="database">
            <h2>Database</h2>
            <h1>ADMIN</h1>

            <?php
                if( $_POST["submit"] ){
                    $sql = $_POST["query"];
                    $result = mysqli_query($conn, $sql);
                    foreach( $result AS $result ){
                        echo $result;
                        echo "result";
                    }
                }
            ?>

            <form action="" method="post">
            <input type="text" name="query" placeholder="Prikaz">

            <input type="submit" name="submit" value="Vykonaj">

<input type="submit" name="logout" value="Odhlasit">
            </form>
        </div>
    </div>

<?php
    //pripojenie footer casti
    include('layout/footer.php');
?>