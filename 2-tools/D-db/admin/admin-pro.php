<?php
    session_start();

    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../../E-login/helper/config.php');
    require_once ('../../E-login/helper/Helper.php');

    function selectSQL($conn, $sql){
        $row = mySQLall($conn, $sql);


        if (mysqli_query($conn, $sql)) {
            echo "USPECH!!!";
        } else {
            echo "CHYBA!!!";
        }
  
        mysqli_close($conn);

        debug($row, "SELECT");
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

    <link rel="shortcut icon" href="../../B-media/real-icon3.png" type="image/x-icon" />
    <link rel="stylesheet" href="../../A-styles/global.css">
    <link rel="stylesheet" href="styles/header-pro.css">
    <link rel="stylesheet" href="../../A-styles/content.css">
    <link rel="stylesheet" href="../../A-styles/footer.css">
    <link rel="stylesheet" href="styles/admin-pro.css">

    <title>DB admin</title>
</head>
<body>
    <?php
        //pripojenie header casti
        include('layout/header-pro.php');
    ?>
    
    <div id="content">
        <div id="database">
            <div id="main-title">Admin</div>

            <?php
                if( $_POST["select"] ){
                    $sql = $_POST["queryS"];
                    $results = mysqli_query($conn, $sql);
                    foreach( $results AS $result ){
                        //echo $result;
                        //echo "result";
                    }

                    echo $sql;

                    selectSQL($conn, $sql);
                }
            ?>

            <form action="" method="post">
                <input class="query" type="text" name="queryS" placeholder="Prikaz">

                <input class="submit" type="submit" name="select" value="Select">

            </form>

            <div>
                <?php

                ?>
            </div>
        </div>
    </div>

<?php
    //pripojenie footer casti
    include('layout/footer.php');
?>