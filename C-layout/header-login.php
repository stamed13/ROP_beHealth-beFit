<?php
    //error_reporting(E_ERROR);// E_ALL, E_WARNING

    //funkcia pre prihlaseneho pouzivatela
    function loginComputer() {
        // tlacidlo na prihlasenie
        if ( $_SESSION['login'] == false ) {
            echo "
                <a href='2-tools/E-login/log-in/log-in.php' class='bt-log-in'>Log in</a>
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

            hamSettingC($fullname);


            echo "               
                </div>
            ";
        }

    }


    //funkcia pre prihlaseneho pouzivatela
    function loginMobile() {
        // tlacidlo na prihlasenie
        if ( $_SESSION['login'] == false ) {
            echo "
                <a href='2-tools/E-login/log-in/log-in.php' class='bt-log-in'>Log in</a>
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

            hamSettingM($fullname);


            echo "               
                </div>
            ";
        }

    }
    

    // funkcia na menu pre prihlaseneho
    function hamSettingC($fullname) {
        echo "
        <div class='ham-settingsC'>
            <div class='name'> $fullname </div>
            <a href='2-tools/E-login/profile/profile.php' class='profile'>profil</a>
            <a href='2-tools/E-login/log-out/log-out.php' class='log-out'>odhlásiť sa</a>
        </div>
        ";
    }

    // funkcia na menu pre prihlaseneho
    function hamSettingM($fullname) {
        echo "
        <div class='ham-settingsM'>
            <div class='name'> $fullname </div>
            <a href='2-tools/E-login/profile/profile.php' class='profile'>profil</a>
            <a href='2-tools/E-login/log-out/log-out.php' class='log-out'>odhlásiť sa</a>
        </div>
        ";
    }

?>