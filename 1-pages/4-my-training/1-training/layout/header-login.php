<?php
    //error_reporting(E_ERROR);// E_ALL, E_WARNING

    //funkcia pre prihlaseneho pouzivatela
    function loginComputer($up) {
        // tlacidlo na prihlasenie
        if ( $_SESSION['login'] == false ) {
            echo "
                <a href='$up../../../../2-tools/E-login/log-in/log-in.php' class='bt-log-in'>Log in</a>
            ";
        }

        // prihlaseny pouzivatel
        if ( $_SESSION['login'] == true ) {
            //$_SESSION['name'] = "sm";

            $inicialy = $_SESSION['name'];
            $fullname = $_SESSION['fullname'];

            //echo $_SESSION['name'];

            echo "
                <div class='loginsC'>
                    
                    <div class='bt-logedC'>$inicialy</div>

            ";

            hamSettingC($fullname, $up);


            echo "               
                </div>
            ";
        }

    }


    //funkcia pre prihlaseneho pouzivatela
    function loginMobile($up) {
        // tlacidlo na prihlasenie
        if ( $_SESSION['login'] == false ) {
            echo "
                <a href='$up../../../../2-tools/E-login/log-in/log-in.php' class='bt-log-in'>Log in</a>
            ";
        }

        // prihlaseny pouzivatel
        if ( $_SESSION['login'] == true ) {
            //$_SESSION['name'] = "sm";

            $inicialy = $_SESSION['name'];
            $fullname = $_SESSION['fullname'];

            //echo $_SESSION['name'];

            echo "
                <div class='loginsM'>
                    
                    <div class='bt-logedM'>$inicialy</div>

            ";

            hamSettingM($fullname, $up);


            echo "               
                </div>
            ";
        }

    }
    

    // funkcia na menu pre prihlaseneho
    function hamSettingC($fullname, $up) {
        echo "
        <div class='ham-settingsC'>
            <div class='name'> $fullname </div>
            <a href='$up../../../../2-tools/E-login/profile/profile.php' class='profile'>profil</a>
            <a href='$up../../../../2-tools/E-login/log-out/log-out.php' class='log-out'>log-out</a>
        </div>
        ";
    }

    // funkcia na menu pre prihlaseneho
    function hamSettingM($fullname, $up) {
        echo "
        <div class='ham-settingsM'>
            <div class='name'> $fullname </div>
            <a href='$up../../../../2-tools/E-login/profile/profile.php' class='profile'>profil</a>
            <a href='$up../../../../2-tools/E-login/log-out/log-out.php' class='log-out'>log-out</a>
        </div>
        ";
    }

?>