<?php
    session_start();

    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../../E-login/helper/config.php');
    require_once ('../../E-login/helper/Helper.php');

    function selectSQL($conn, $sql){
        $row = mySQLall($conn, $sql);


        if (mysqli_query($conn, $sql)) {
            echo "<div> USPECH!!! </div>";
        } else {
            echo "<div> CHYBA!!! </div>";
        }
  
        mysqli_close($conn);

        debug($row, "SELECT");
    }

    function insertSQL($conn, $sql){
        //$row = mySQLall($conn, $sql);


        if (mysqli_query($conn, $sql)) {
            echo "<div> USPECH!!! </div>";
        } else {
            echo "<div> CHYBA!!! </div>";
        }
  
        mysqli_close($conn);

        //debug($row, "SELECT");
    }

    function updateSQL($conn, $sql){
        //$row = mySQLall($conn, $sql);
        //$sql = "UPDATE advice SET name='Tesim sa, cvicis rovnomerne na vsetky partie' WHERE id=6";


        if (mysqli_query($conn, $sql)) {
            echo "<div> USPECH!!! </div>";
        } else {
            echo "<div> CHYBA!!! </div>";
        }
  
        mysqli_close($conn);

        //debug($row, "SELECT");
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

                    echo "prikaz: ";
                    echo $sql;

                    selectSQL($conn, $sql);
                }

                if( $_POST["insert"] ){
                    $sql = $_POST["queryI"];

                    echo "prikaz: ";
                    echo $sql;

                    insertSQL($conn, $sql);
                }

                if( $_POST["update"] ){
                    $sql = $_POST["queryU"];

                    echo "prikaz: ";
                    echo $sql;

                    updateSQL($conn, $sql);
                }
            ?>

            <form action="" method="post">
                <textarea name="queryS" class="query" placeholder="SELECT * FROM table">SELECT * FROM table</textarea>
                <input class="submit" type="submit" name="select" value="Select">

                <textarea name="queryI" class="query" placeholder="INSERT INTO table () VALUES ()">INSERT INTO table () VALUES ()</textarea>
                <input class="submit" type="submit" name="insert" value="Insert">

                <textarea name="queryU" class="query" placeholder="UPDATE table SET column='value' WHERE condition">UPDATE table SET column='value' WHERE condition</textarea>
                <input class="submit" type="submit" name="update" value="Update">

                <textarea name="queryD" class="query" placeholder="DELETE FROM table WHERE condition">DELETE FROM table WHERE condition</textarea>
                <input class="submit" type="submit" name="delete" value="Delete">

                <textarea name="queryDD" class="query" placeholder="DROP TABLE table">DROP TABLE table</textarea>
                <input class="submit" type="submit" name="delete" value="Drop">
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