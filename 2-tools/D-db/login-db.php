<?php
    session_start();

    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../E-login/helper/config.php');
    require_once ('../E-login/helper/Helper.php');

    $password = "rootDB";
    $_SESSION["logedAdmin"] = false;

    

    if( $_POST["login"] && $_POST["password"] == $password ){
        $_SESSION["logedAdmin"] = true;
        header("Location: database.php");
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

    <title>DB login</title>
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

            ?>

            <form action="" method="post">
                <input type="text" name="password" placeholder="Heslo">

                <input type="submit" name="login" value="Prihlasit">
            </form>
        </div>
    </div>

<?php
    //pripojenie footer casti
    include('layout/footer.php');
?>