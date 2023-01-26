<?php
    error_reporting(E_ERROR);// E_ALL, E_WARNING

    function login() {
        //$inicialy = $_SESSION['name'];

        //$_SESSION['name'] = "sm";

        $inicialy = $_SESSION['name'];
        $fullname = $_SESSION['fullname'];

        if ( $_SESSION['login'] == false ) {
            echo "
            <button type='button' class='bt-log-in' ><a href='2-tools/E-login/log-in/log-in.php'>Log in</a></button>
            ";
        }

        if ( $_SESSION['login'] == true ) {
            //echo $_SESSION['name'];

            if(isset($_POST["submit"])){
                $button = true;
            } else {
                $button = false;
            }

        echo "
            <div class='logins'>
                <form action='' method='post' id='sign-up-formular'>
                    <input name='submit' value='$inicialy' type='submit' class='bt-loged'>
                </form>
                
        ";
        if($button == true){
            hamSetting($fullname);
        } 
        echo "               
            </div>
            ";
        }

    }
    

    function hamSetting($fullname) {
        echo "
                <div class='ham-settings'>
                    <div class='name'> $fullname </div>
                    <a href='' class='profile'>profil</a>
                    <a href='2-tools/E-login/log-out/log-out.php' class='log-out'>log-out</a>
                </div>
        ";
    }
?>