<?php
    //error_reporting(E_ERROR);// E_ALL, E_WARNING

    //funkcia pre prihlaseneho pouzivatela
    function loginComputer($currentPage) {
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

            hamNavC($currentPage);


            echo "               
                </div>
            ";
        }

    }


    //funkcia pre prihlaseneho pouzivatela
    function loginMobile($currentPage) {
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

            hamNavM($currentPage);


            echo "               
                </div>
            ";
        }

    }
    

    // funkcia na menu pre prihlaseneho
    function hamNavC($currentPage) {
        $location = $_SESSION['location'];
        if ( $_SESSION['login'] == true ) {
            echo "
            <div class='profile-menuC'>
                <nav id='computer-nav'>
                    <a href='$location'>domov</a>
                    <a href='' class='hide'>profile</a>
                </nav>
                <a href='../log-out/log-out.php' class='bt-logout'>log out</a>
            </div>
            ";
        }
    }

    // funkcia na menu pre prihlaseneho
    function hamNavM($currentPage) {
        $location = $_SESSION['location'];
        if ( $_SESSION['login'] == true ) {
            echo "
            <div class='profile-menuM'>
                <nav id='mobile-nav'>
                    <a href='$location'>domov</a>
                    <a href='' class='hide'>profile</a>
                </nav>
                <a href='../log-out/log-out.php' class='bt-logout'>log out</a>
            </div>
            ";
        }
    }

    function profile($currentPage) {
        if($currentPage == 'profile') {echo 'actual';}
    }

?>