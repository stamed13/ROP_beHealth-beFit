<?php
    //error_reporting(E_ERROR);// E_ALL, E_WARNING

    function login() {

        if ( $_SESSION['login'] == false ) {
            echo "
            <button type='button' class='bt-log-in' ><a href='2-tools/E-login/log-in/log-in.php'>Log in</a></button>
            ";
        }

        if ( $_SESSION['login'] == true ) {
            //$inicialy = $_SESSION['name'];

            //$_SESSION['name'] = "sm";

            $inicialy = $_SESSION['name'];
            $fullname = $_SESSION['fullname'];

            //echo $_SESSION['name'];



        echo "
            <div class='logins'>
                <div class='bt-loged'>$inicialy</div>
                
        ";

        hamSetting($fullname);


        echo "               
            </div>
            ";
        }



    }
    

    function hamSetting($fullname) {
        echo "
            <div class='ham-settings'>
                <div>
                    <div class='name'> $fullname </div>
                    <a href='' class='profile'>profil</a>
                    <a href='2-tools/E-login/log-out/log-out.php' class='log-out'>log-out</a>
                </div>
            </div>
        ";
    }

    //
    /*
            if ( $_SESSION['login'] == true ) {
            //echo $_SESSION['name'];


        echo "
            <div class='logins'>
                <div class='bt-loged'>$inicialy</div>
                
                
        ";

        hamSetting($fullname);

        /*echo "
                <div class='ham-settings'>
                    <div class='name'> $fullname </div>
                    <a href='' class='profile'>profil</a>
                    <a href='2-tools/E-login/log-out/log-out.php' class='log-out'>log-out</a>
                </div>
        ";*/

        /*echo "               
            </div>
            ";
        }*/
    /* */


    //button...
    /*
    function login() {
        $button = false;
        echo $button;

        if ( $_SESSION['login'] == false ) {
            echo "
            <button type='button' class='bt-log-in' ><a href='2-tools/E-login/log-in/log-in.php'>Log in</a></button>
            ";
        }

        if ( $_SESSION['login'] == true ) {
            //$inicialy = $_SESSION['name'];

            //$_SESSION['name'] = "sm";

            $inicialy = $_SESSION['name'];
            $fullname = $_SESSION['fullname'];

            //echo $_SESSION['name'];



        echo "
            <div class='logins'>
                <form action='' method='post' id='sign-up-formular'>
                    <input name='submit' value='$inicialy' type='submit' class='bt-loged'>
                </form>
                
        ";

        //hamSetting($fullname);

        if($_POST['submit']){
            if($button == false){
                $button = true;
                //hamSetting($fullname);
                //echo $button;
                
            }
            if($button == true){
                $button = false;
                //echo $button;
            }

        } 

        //hamSetting($fullname);

        echo "               
            </div>
            ";
        }


        //echo "                                                           ahoj";
        echo $button;
    }
    */
?>

<script src="login-ham.js"></script>