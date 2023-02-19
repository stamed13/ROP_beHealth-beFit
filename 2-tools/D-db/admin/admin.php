<?php
    session_start();

    error_reporting(E_ERROR);// E_ALL, E_WARNING

    require_once ('../../E-login/helper/config.php');
    require_once ('../../E-login/helper/Helper.php');

    $password = "rootDB";
    $_SESSION["logedAdmin"] = false;

    

    if( $_POST["login"] && $_POST["password"] == $password ){
        $_SESSION["logedAdmin"] = true;
        header("Location: admin-pro.php");
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
    <link rel="stylesheet" href="styles/header-login.css">
    <link rel="stylesheet" href="../../A-styles/content.css">
    <link rel="stylesheet" href="../../A-styles/footer.css">
    <link rel="stylesheet" href="styles/admin-login.css">

    <title>admin</title>
</head>
<body>
    <?php
        //pripojenie header casti
        include('layout/header-login.php');
    ?>
    
    <div id="content">
        <div id="database">

            <?php

            ?>

            <form action="" method="post">
                <div id="title">Admin</div>

                <input id="passwd" type="text" name="password" placeholder="Heslo">

                <input id="submit" type="submit" name="login" value="Prihlasit">
            </form>
        </div>
    </div>

<?php
    
?>