<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING

    function login() {
        //$inicialy = $_SESSION['name'];

        //$_SESSION['name'] = "sm";

        $inicialy = $_SESSION['name'];
        $fullname = $_SESSION['fullname'];

        if ( $_SESSION['login'] == false ) {
            echo "<button type='button' class='bt-log-in'><a href='2-tools/E-login/log-in/log-in.php'>Log in</a></button>";
        }

        if ( $_SESSION['login'] == true ) {
            //echo $_SESSION['name'];

            echo "
            <div class='logins'>
            <div class='bt-loged'> $inicialy </div>
            
            <div class='ham-settings'>
                <div class='name'> $fullname </div>
                <a href='' class='profile'>profil</a>
                <a href='2-tools/E-login/log-out/log-out.php' class='log-out'>log-out</a>
            </div>
        </div>
        ";
        }

    }
?>