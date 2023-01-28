<?php
    //error_reporting(E_ERROR);// E_ALL, E_WARNING

    $inicialy = "SM";
    $fullname = "Stan Bear";

    function hamSetting() {
        echo "
            <div class='ham-settings '>
                <div class='name'> SM </div>
                <a class='profile'>profil</a>
                <a class='log-out'>log-out</a>
            </div>
        ";
    }

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>loged</title>

    <link rel="stylesheet" href="styles/header.css">
</head>
<body>
    <header>

        <div class='logins'>
            <div class="bt-loged">SM</div>        

            <?php hamSetting(); //button($active); ?>
        </div>

    </header>
    <script src="js/login-ham.js"></script>
</body>
</html>